# callbackkiller - модуль заказа обратного звонка для Drupal 8
Самые оптимальные цены и функционал для виджета обратного звонка: http://cb-killer.ru/callback/?r=54763&c=106

## Drupal 8 Hello world module
Модуль составлялся в процессе изучения специфики написания модулей для Drupal 8:

### callbackkiller.module
Тело модуля

### callbackkiller.links.menu
Добавляет ссылку на админку в меню конфигурации

### callbackkiller.routing.yml
Роутинг, здесь указывается алиас и путь для формы конфигурации

### callbackkiller.settings.yml
Пустой файл настроек

### src/Form/callbackkillerSettingsForm.php
Сама форма настроек

## Установка модуля заказа обратного звонка на Drupal 8:

1.Зарегистрируйтесь на CallbackKILLER:
http://cb-killer.ru/callback/?r=54763&c=106

2.В папке modules - создайте папку vvmspace или custom

3.Скопируйте туда папку callbackkiller

4.Включите модуль:
адрес-сай.та/admin/modules

5.Откройте настройки модуля по адресу:
адрес-сай.та/admin/vvmspace/callbackkiller/settings

6.Скопируйте туда код полученный на сайте http://cb-killer.ru/callback/?r=54763&c=106

7.Нажмите "Сохранить конфигурацию"
