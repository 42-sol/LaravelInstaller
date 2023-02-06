<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title' => config('app.name') . ' Installer',
    'next' => 'Next Step',
    'forms' => [
        'errorTitle' => 'The Following errors occurred:',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'Welcome',
        'title'   => config('app.name') . 'Installer',
        'message' => 'Easy Installation and Setup for the app',
        'next'    => 'Check Requirements',
    ],

    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'Step 1 | Server Requirements',
        'title' => 'Server Requirements',
        'next'    => 'Check Permissions',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'Step 2 | Permissions',
        'title' => 'Permissions',
        'fix' => 'Fix permissions',
        'next' => 'Configure Environment',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Step 3 | Environment Settings',
            'title' => 'Environment Settings',
        ],
        'wizard' => [
            'templateTitle' => 'Step 3 | Environment Settings | Guided Wizard',
            'tabs' => [
                'environment' => 'Environment',
                'database' => 'Database',
                'application' => 'Application',
            ],
            'form' => [
                'name_required' => 'An environment name is required.',
                'app_name_label' => 'App Name',
                'app_name_placeholder' => 'App Name',
                'app_environment_label' => 'App Environment',
                'app_environment_label_local' => 'Local',
                'app_environment_label_developement' => 'Development',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Production',
                'app_environment_label_other' => 'Other',
                'app_environment_placeholder_other' => 'Enter your environment...',
                'app_debug_label' => 'App Debug',
                'app_debug_label_true' => 'True',
                'app_debug_label_false' => 'False',
                'app_log_level_label' => 'App Log Level',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'critical',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'emergency',
                'app_url_label' => 'App Url',
                'app_url_placeholder' => 'App Url',
                'db_connection_failed' => 'Could not connect to the database.',
                'db_connection_label' => 'Database Connection',
                'db_host_label' => 'Database Host',
                'db_host_placeholder' => 'Database Host',
                'db_port_label' => 'Database Port',
                'db_port_placeholder' => 'Database Port',
                'db_name_label' => 'Database Name',
                'db_name_placeholder' => 'Database Name',
                'db_username_label' => 'Database User Name',
                'db_username_placeholder' => 'Database User Name',
                'db_password_label' => 'Database Password',
                'db_password_placeholder' => 'Database Password',

                'app_tabs' => [
                    'more_info' => 'More Info',
                    'broadcasting_title' => 'Broadcasting, Caching, Session, &amp; Queue',
                    'broadcasting_label' => 'Broadcast Driver',
                    'broadcasting_placeholder' => 'Broadcast Driver',
                    'cache_label' => 'Cache Driver',
                    'cache_placeholder' => 'Cache Driver',
                    'session_label' => 'Session Driver',
                    'session_placeholder' => 'Session Driver',
                    'queue_label' => 'Queue Driver',
                    'queue_placeholder' => 'Queue Driver',
                    'redis_label' => 'Redis Driver',
                    'redis_host' => 'Redis Host',
                    'redis_password' => 'Redis Password',
                    'redis_port' => 'Redis Port',
                ],
                'buttons' => [
                    'setup_database' => 'Setup Database',
                    'setup_application' => 'Setup Application',
                ],
            ],
          'next' => 'Run migrations'
        ],
        'success' => 'Your .env file settings have been saved.',
        'errors' => 'Unable to save the .env file, Please create it manually.',
    ],

  /*
   * database page transltions
  */
  'database' => [
    'templateTitle' => 'Step 4 | Database',
    'title' => 'Run migrations and seeders',
    'label' => 'Use seeders (fill database with test data)',
    'migrate' => 'Run migrations',
    'inProgress' => 'Migration in progress. After process completion you will be redirected to the next page',
    'statusOK' => 'Success',
    'statusError' => 'Error occurred during migration',
    'next' => 'Create user'
  ],

  /*
   * admin account creation page translations
   */
  'admin' => [
    'templateTitle' => 'Step 5| Account',
    'title' => 'Create an admin account',
    'name' => 'Name',
    'login' => 'Login',
    'email' => 'Email',
    'password' => 'Password',
    'create' => 'Create',
    'statusOK' => 'Account created',
    'statusError' => 'Error occurred during creation process:',
    'next' => 'Finish'
  ],

    'install' => 'Install',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'Laravel Installer successfully INSTALLED on ',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Installation Finished',
        'templateTitle' => 'Installation Finished',
        'migration' => 'Migration and Seed Console Output:',
        'console' => 'Application Console Output:',
        'log' => 'Installation Log Entry:',
        'finished' => 'Application has been successfully installed',
        'exit' => 'Get started',
    ],
];
