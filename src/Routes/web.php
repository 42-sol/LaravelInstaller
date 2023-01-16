<?php

Route::group([
  'prefix' => config('installer.install.route_path'),
  'as' => 'LaravelInstaller::',
  'namespace' => 'RachidLaasri\LaravelInstaller\Controllers',
  'middleware' => ['web', 'install']
], function () {
    Route::get('/', [
        'as' => 'welcome',
        'uses' => 'WelcomeController@welcome',
    ]);

    Route::get('environment', [
        'as' => 'environment',
        'uses' => 'EnvironmentController@environmentMenu',
    ]);

    Route::post('environment/saveWizard', [
        'as' => 'environmentSaveWizard',
        'uses' => 'EnvironmentController@saveWizard',
    ]);

    Route::get('requirements', [
        'as' => 'requirements',
        'uses' => 'RequirementsController@requirements',
    ]);

    Route::get('permissions', [
        'as' => 'permissions',
        'uses' => 'PermissionsController@permissions',
    ]);

    Route::post('permissions', [
        'as' => 'fixPermissions',
        'uses' => 'PermissionsController@fixPermissions',
    ]);

    Route::get('database', [
      'as' => 'database',
      'uses' => 'DatabaseController@index',
    ]);

    Route::post('databaseMigrate', [
        'as' => 'databaseMigrate',
        'uses' => 'DatabaseController@migrate',
    ]);

    Route::get('admin', [
      'as' => 'admin',
      'uses' => 'AdminController@index',
    ]);

    Route::post('adminCreate', [
      'as' => 'adminCreate',
      'uses' => 'AdminController@createAdminUser',
    ]);

    Route::get('final', [
        'as' => 'final',
        'uses' => 'FinalController@finish',
    ]);
});
