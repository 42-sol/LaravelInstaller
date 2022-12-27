<?php

namespace RachidLaasri\LaravelInstaller\Helpers;

use Exception;
use Illuminate\Database\SQLiteConnection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\BufferedOutput;

class DatabaseManager {
  /**
   * Migrate and seed the database.
   *
   * @param Request $request
   *
   * @return array
   */
    public function migrateAndSeed(Request $request): array {
        $outputLog = new BufferedOutput;

        $this->sqlite($outputLog);

        if ($request->input('useSeeders') == true) {
          $migrateResponse = $this->migrate($outputLog);
          $seedResponse = $this->seed($outputLog);

          if ($migrateResponse['status'] && $seedResponse['status']) {
            return ['status' => true];
          } else {
            if (isset($migrateResponse['error'])) {
              return $migrateResponse;
            } else {
              return $seedResponse;
            }
          }
        } else {
          return $this->migrate($outputLog);
        }

    }

    /**
     * Run the migration and call the seeder.
     *
     * @param \Symfony\Component\Console\Output\BufferedOutput $outputLog
     * @return array
     */
    public function migrate(BufferedOutput $outputLog): array {
        try {
          Artisan::call('migrate', ['--force'=> true], $outputLog);
        } catch (Exception $e) {
          return ['ststus' => false, 'error' => $e->getMessage()];
        }

        return ['status' => true];
    }

    /**
     * Seed the database.
     *
     * @param \Symfony\Component\Console\Output\BufferedOutput $outputLog
     *
     * @return array
     */
    public function seed(BufferedOutput $outputLog): array {
        try {
            Artisan::call('db:seed', ['--force' => true], $outputLog);
        } catch (Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }

        return ['status' => true];
    }

    /**
     * Check database type. If SQLite, then create the database file.
     *
     * @param \Symfony\Component\Console\Output\BufferedOutput $outputLog
     */
    private function sqlite(BufferedOutput $outputLog) {
        if (DB::connection() instanceof SQLiteConnection) {
            $database = DB::connection()->getDatabaseName();
            if (! file_exists($database)) {
                touch($database);
                DB::reconnect(Config::get('database.default'));
            }
            $outputLog->write('Using SqlLite database: '.$database, 1);
        }
    }
}
