<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DatabaseController extends Controller
{
    public function index(Request $request) {
      $migrationPid = $request->session()->get('migrationPid');

      if ($migrationPid && posix_getpgid($migrationPid)) {
        $content = file_get_contents(base_path('migrate.log'));

        return view('installer::database')->with(['inProgress' => 1, 'log' => $content]);
      } else {
        if (!isset($migrationPid)) {
            return view('installer::database')->with(['inProgress' => 0]);
        } else {
          $request->session()->remove('migrationPid');
          return redirect()->route('LaravelInstaller::admin');
        }
      }
    }

  /**
   * Migrate and seed the database.
   *
   * @param Request $request
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
   */
    public function migrate(Request $request): \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response {
      if ($request->input('useSeeders')) {
        $temp = $this->run("php artisan migrate --force --seed", base_path('migrate.log'));
      } else {
        $temp = $this->run("php artisan migrate --force", base_path('migrate.log'));
      }

      $pid = intval($temp);
      $request->session()->put('migrationPid', $pid);
      return redirect('/install/database');
    }

    /**
     * Run process in background
     *
     * @param $command
     * @param $outputFile
     *
     * @return false|string|null
     */
    function run($command, $outputFile = '/dev/null') {
      $pwd = base_path();
      return shell_exec(sprintf(
        'cd %s && %s > %s 2>&1 & echo $!',
        $pwd,
        $command,
        $outputFile
      ));
    }
}
