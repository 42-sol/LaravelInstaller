<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use RachidLaasri\LaravelInstaller\Events\LaravelInstallerFinished;
use RachidLaasri\LaravelInstaller\Helpers\FinalInstallManager;
use RachidLaasri\LaravelInstaller\Helpers\InstalledFileManager;

class FinalController extends Controller {
  /**
   * Update installed file and display finished view.
   *
   * @param \RachidLaasri\LaravelInstaller\Helpers\InstalledFileManager $fileManager
   * @param \RachidLaasri\LaravelInstaller\Helpers\FinalInstallManager $finalInstall
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function finish(InstalledFileManager $fileManager, FinalInstallManager $finalInstall) {
    $finalMessages = $finalInstall->runFinal();
    $finalStatusMessage = $fileManager->update();

    event(new LaravelInstallerFinished);

    return view('vendor.installer.finished', compact('finalMessages', 'finalStatusMessage'));
  }
}
