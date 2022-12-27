<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller {
  public function index() {
    return view('vendor.installer.create_admin');
  }

  /**
   * Create basic admin account for user
   *
   * @return \Illuminate\Http\Response
   */
  private function createAdminUser(Request $request) {
    $status = Artisan::call('admin:create', $request->all());
    return response()->view('vendor.installer.database', $status);
  }
}
