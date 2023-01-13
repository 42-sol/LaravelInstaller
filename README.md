# Laravel Web Installer | A Web Installer [Package](https://packagist.org/packages/42sol/laravel-installer)

- [About](#about)
- [Requirements](#requirements)
- [Installation](#installation)
- [Routes](#routes)
- [Usage](#usage)
- [Help](#help)
- [Screenshots](#screenshots)
- [License](#license)

## About

Форк от библиотеки [LaravelInstaller](https://github.com/rashidlaasri/LaravelInstaller).

Фичи:
- Ппроверить соответсвие требованиям сервера.
- Проверить разрешения на папках.
- Возможность настроить .env.
  - руками через редактор
  - через мастер форм 
- Провести миграции.
- Засидить таблицы.
- Создать учётку с админскими доступами

## Requirements

* [Laravel 5.5+](https://laravel.com/docs/installation)

## Installation

1. В коревой папке проекта в терминале выполнить команду: 

```bash
    composer require 42sol/laravel-installer
```

2. Зарегистрировать пакет

* С версии Laravel 5.5 поддерживается автоматическое обнаружение,
но можно сделать и в ручную, добавив ```AppServiceProvider.php```
```php
	'providers' => [
	    RachidLaasri\LaravelInstaller\Providers\LaravelInstallerServiceProvider::class,
	];
```

3. Опубликовать ресурсы пакета в соответствующие папки проекта:

```bash
    php artisan vendor:publish --tag=installer
```

## Routes

* `/install`

## Usage

* **Для пути Install**
  * Чтобы начать установку, откройте путь `/install` и следуйте инструкциям.
  * После окончания установки пустой файл `installed` будет создан в `/storage`. Дальнейшие попытки открыть путь `/install` перенаправляются на `/dashboard`.

* Поясненеия по файлам проекта:

| Файл                                       | Описание                                                                        |
|:-------------------------------------------|:--------------------------------------------------------------------------------|
| `config/installer.php`                     | Файл конфигов. Для установления требований к папкам, модулям и данным для форм. |
| `public/installer/assets`                  | Ассеты стилей.                                                                  |
| `resources/views/vendor/installer`         | Страницы инсталлятора написанные с использованием blade                         |
| `resources/lang/en/installer_messages.php` | Переводы на русский и английский                                                |
## Help

* К оригаинальной либе есть туториал, на случай если кто-то не разберётся: [Laravel Installer by Devdojo](https://www.youtube.com/watch?v=Jput5doFYLg)

## Screenshots
Скрины из оригинальной либы, но суть осталась такой же, просто кое-где стало меньше опций и появились дополнительные этапы
###### Installer
![Laravel web installer | Step 1](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/1-welcome.jpg)
![Laravel web installer | Step 2](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/2-requirements.jpg)
![Laravel web installer | Step 3](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/3-permissions.jpg)
![Laravel web installer | Step 4 Menu](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4-environment.jpg)
![Laravel web installer | Step 4 Classic](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4a-environment-classic.jpg)
![Laravel web installer | Step 4 Wizard 1](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4b-environment-wizard-1.jpg)
![Laravel web installer | Step 4 Wizard 2](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4b-environment-wizard-2.jpg)
![Laravel web installer | Step 4 Wizard 3](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4b-environment-wizard-3.jpg)
![Laravel web installer | Step 5](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/5-final.jpg)
