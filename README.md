# Wordpress theme with Advanced custom fields

## Install
- Download wordpress
- Install
- cd wp-content/themes/
- git clone ...
- cd theme
- npm install
- [Plugin] Custom Fields Advanced ACF-PRO
-- cd wp-content/plugins
-- git clone https://github.com/wp-premium/advanced-custom-fields-pro.git
-- Activate on admin

## Conf files
* Copy and remove "-sample"
* backend/config-db.php
* js/config.js

## Create pages
- model/base/pages.php this file create wp pages

## Confs for wordpress admin (disable menus)
- model/base/config-admin.php

## Important
- When creating a new field localhost/person/
need to open wp-admin, go to menu permalinks(/wp-admin/options-permalink.php), change something and save then the url will work

## SCSS and JS
Change css and js file versions
model/base/enqueue.php

Run this to watch changes on scss and js 
npm run gulp
