<?php

return [

  /*
   *
   * Shared translations.
   *
   */
  'title' => 'Установка ' . config('app.name'),
  'next' => 'Следующий шаг',
  'forms' => [
    'errorTitle' => 'В ходе выполнения произошли ошибки:',
  ],

  /*
   *
   * Home page translations.
   *
   */
  'welcome' => [
    'templateTitle' => '',
    'title' => 'Установка ' . config('app.name'),
    'message' => 'Добро пожаловать в первоначальную настройку проекта',
    'next' => 'Проверить наличие требуемых модулей'
  ],

  /*
   *
   * Requirements page translations.
   *
   */
  'requirements' => [
    'templateTitle' => 'Шаг 1 | Проверить модули',
    'title' => 'Необходимые модули',
    'next' => 'Проверить разрешения для папок'
  ],

  /*
   *
   * Permissions page translations.
   *
   */
  'permissions' => [
    'templateTitle' => 'Шаг 2 | Проверить доступы',
    'title' => 'Проверка разрешений на папках',
    'next' => 'Настроить окружение'
  ],

  /*
   *
   * Environment page translations.
   *
   */
  'environment' => [
    'menu' => [
      'templateTitle' => 'Шаг 3 | Настройки среды',
      'title' => 'Настройки среды',
    ],
    'wizard' => [
      'templateTitle' => 'Шаг 3 | Настройки среды | Управляемый мастер',
      'tabs' => [
        'environment' => 'Окружение',
        'database' => 'База данных',
        'application' => 'Приложение',
      ],
      'form' => [
        'name_required' => 'Требуется имя среды.',
        'app_name_label' => 'Имя приложения',
        'app_name_placeholder' => 'Имя приложения',
        'app_environment_label' => 'Окружение приложения',
        'app_environment_label_local' => 'Локальное',
        'app_environment_label_developement' => 'Разработка',
        'app_environment_label_qa' => 'Qa',
        'app_environment_label_production' => 'Продакшн',
        'app_environment_label_other' => 'Другое',
        'app_environment_placeholder_other' => 'Введите свое окружение ...',
        'app_debug_label' => 'Разрешить отладку приложения',
        'app_debug_label_true' => 'Да',
        'app_debug_label_false' => 'Нет',
        'app_log_level_label' => 'Уровень журнала логирования',
        'app_log_level_label_debug' => 'debug',
        'app_log_level_label_info' => 'info',
        'app_log_level_label_notice' => 'notice',
        'app_log_level_label_warning' => 'warning',
        'app_log_level_label_error' => 'error',
        'app_log_level_label_critical' => 'critical',
        'app_log_level_label_alert' => 'alert',
        'app_log_level_label_emergency' => 'emergency',
        'app_url_label' => 'URL приложения',
        'app_url_placeholder' => 'URL приложения',
        'db_connection_label' => 'Подключение к базе данных',
        'db_host_label' => 'Хост базы данных',
        'db_host_placeholder' => 'Хост базы данных',
        'db_port_label' => 'Порт базы данных',
        'db_port_placeholder' => 'Порт базы данных',
        'db_name_label' => 'Название базы данных',
        'db_name_placeholder' => 'Название базы данных',
        'db_username_label' => 'Имя пользователя базы данных',
        'db_username_placeholder' => 'Имя пользователя базы данных',
        'db_password_label' => 'Пароль базы данных',
        'db_password_placeholder' => 'Пароль базы данных',
        'db_connection_failed' => 'Не удалось подключится к базе данных.',

        'app_tabs' => [
          'more_info' => 'Больше информации',
          'broadcasting_title' => 'Broadcasting, Caching, Session, Queue',
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
          'setup_database' => 'Настройка базы данных',
          'setup_application' => 'Настройка приложения',
        ],
      ],
      'next' => 'Сохранить настройки'
    ],
    'title' => 'Настройки окружения',
    'save' => 'Сохранить .env',
    'success' => 'Настройки успешно сохранены в файле .env',
    'errors' => 'Произошла ошибка при сохранении файла .env, пожалуйста, попробуйте ещё раз или сохраните его вручную',
  ],

  /*
   * database page transltions
   */
  'database' => [
    'templateTitle' => 'Шаг 4 | База данных',
    'title' => 'Выполнение миграций и заполнение тестовыми данными',
    'label' => 'Использовать сидеры (заполнить базу данных тестовыми данными)',
    'migrate' => 'Выполнить миграции',
    'statusOK' => 'Операция выполнена успешно',
    'statusError' => 'Во время операции произошла ошибка:',
    'next' => 'Создать пользователя'
  ],

  /*
   * admin account creation page translations
   */
  'admin' => [
    'templateTitle' => 'Шаг 5| Учётная запись',
    'title' => 'Создать учётную запись администратора',
    'name' => 'Имя',
    'login' => 'Логин',
    'email' => 'Email',
    'password' => 'Пароль',
    'create' => 'Создать',
    'statusOK' => 'Учётная зaпись успешно создана',
    'statusError' => 'Ошибка при создании учётной записи:',
    'next' => 'Создать пользователя'
  ],

  /*
   *
   * Final page translations.
   *
   */
  'final' => [
    'title' => 'Готово',
    'templateTitle' => 'Установка завершена',
    'migration' => 'Лог миграций и сидеров:',
    'console' => 'Лог приложения:',
    'log' => 'Лог установщика:',
    'env' => 'Окончательный .env файл:',
    'finished' => 'Приложение успешно настроено, но некоторые параметры, такие как настройка почты, расписания
          выполнения заданий или интеграций производится из панели администратора.',
    'exit' => 'Открыть панель администратора',
  ],
];
