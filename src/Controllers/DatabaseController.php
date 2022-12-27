<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RachidLaasri\LaravelInstaller\Helpers\DatabaseManager;

class DatabaseController extends Controller
{
    /**
     * @var DatabaseManager
     */
    private DatabaseManager $databaseManager;

    /**
     * @param DatabaseManager $databaseManager
     */
    public function __construct(DatabaseManager $databaseManager) {
      $this->databaseManager = $databaseManager;
    }

    public function index() {
      return view('vendor.installer.database');
    }

  /**
   * Migrate and seed the database.
   *
   * @param Request $request
   *
   * @return \Illuminate\Http\Response
   */
    public function migrate(Request $request): \Illuminate\Http\Response {
      $response = $this->databaseManager->migrateAndSeed($request);
      return response()->view('vendor.installer.database', $response);
    }
}
