<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use App\Http\Controllers\Controller;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller {
  public function index() {
    return view('vendor.installer.create_admin');
  }

  /**
   * Create basic admin account for user
   *
   * @param Request $request
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
   */
  public function createAdminUser(Request $request) {
    try {
      Artisan::call('admin:create', $request->except('_token'));
    } catch (Error|Exception $e) {
      return response()->view('vendor.installer.create_admin', [ 'status' => false, 'error' => $e->getMessage()]);
    }
    return redirect()->route('LaravelInstaller::final');
  }
}
