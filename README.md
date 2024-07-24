# globaltender-test
Тестовое задание для Globaltender ЭТП

## Инициализация
В директории ./src/laravel создаем .env файл (копируем содержимое из .env.example)

```
docker compose up
docker compose exec php_fpm bash
composer install
php artisan migrate
```

Разработка фронтенда и запуск в dev-режиме:
Фронтенд-приложение расположено в ***./src/laravel/resources/js/chat***
Для запуска в режиме dev используется команда (Запускается исапользуя порт :8080)
```
npm run serve
```
Если nodejs не установлен локально:
1) Раскомментировать проброс порта 8080 в ./docker-compose.yml до запуска проекта
2) Выполнить команду в контейнере:
```
# Зайти в контейнер php_fpm
docker compose exec php_fpm bash
# Перейти в директорию с фронтенд-приложением
cd laravel/resources/js/chat
# Запустить фронтенд-приложение
npm run serve
```