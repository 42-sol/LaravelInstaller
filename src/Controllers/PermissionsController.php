<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;
use RachidLaasri\LaravelInstaller\Helpers\PermissionsChecker;

class PermissionsController extends Controller {
    /**
     * @var PermissionsChecker
     */
    protected $permissions;

    /**
     * @param PermissionsChecker $checker
     */
    public function __construct(PermissionsChecker $checker) {
        $this->permissions = $checker;
    }

    /**
     * Display the permissions check page.
     *
     * @return View
     */
    public function permissions() {
        $permissions = $this->permissions->check(
            config('installer.permissions')
        );

        return view('vendor.installer.permissions', compact('permissions'));
    }

    /**
     * Try fixe permissions and display the permissions check page/
     *
     * @return View
     */
    public function fixPermissions() {
        $this->permissions->check(config('installer.permissions'));
        $this->permissions->tryFixErrors();

        return $this->permissions();
    }
}
