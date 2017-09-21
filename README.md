
steps
//RES....
http://labs.infyom.com/laravelgenerator/ 

Links....
#https://www.codexworld.com/laravel-tutorial-crud-add-edit-delete-operations/
#https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers



steps.....

 
>composer global require "laravel/installer"

#// same create proj using composer
>composer create-project --prefer-dist laravel/laravel LaraCon 5.3.*

// >php artisan make:migration create_fileshares_table --create=fileshares


// camelcase will replace by underscore
>php artisan make:model Fileshares -mcr // include migrate controller model


then update the migration table structure
D:\__local__\test.pc\laravel\LaraCon\database\migrations\2017_09_20_072327_create_fileshares_table.php


then update the database config 
D:\__local__\test.pc\laravel\LaraCon\config\database.php
.. short cut to D:\__local__\test.pc\laravel\LaraCon\.env

>php artisan migrate


>php artisan migrate:refresh
>php artisan db:seed --class=UsersTableSeeder

update npm if necessary
>npm update -g

// make the gulp available in our package
>npm i -g laravel-elixir

to update the larvel needs/ requirements -- for gulp purpose
>npm install

to test the laravel with compiles scss
>npm run dev
# LaraCon
Laravel Testing Con

run the localhost
>php artisan serve

to support browser sync
>npm install laravel-elixir-browsersync-official --save-dev

.. to accept a minimal error
D:\__local__\test.pc\laravel\LaraCon\config\database.php
'strict' => false,

Let your laravel proj support form class native
>composer require "laravelcollective/html":"^5.3.0"

to remove package
>composer remove "laravelcollective/html"

Ability laravel to send email
>php artisan make:mail SharedFile
--check/edit your access @ .env
https://mailtrap.io/inboxes/261563/messages .. but your username and pass is not the used in sign up

file create @ /app/mail




font awesome adding to proj.
>npm install font-awesome --save

edit the D:\__local__\test.pc\laravel\LaraCon\gulpfile.js
--.copy('node_modules/font-awesome/fonts', 'public/fonts');

app.less
@import "../../../node_modules/font-awesome/css/font-awesome.css";


https://laracasts.com/discuss/channels/general-discussion/fontawesome-with-webpack-and-laravel-54-wrong-path-to-fonts


LINK RES
--- from here
https://appdividend.com/2017/05/02/laravel-5-4-crud-example-scratch/

-- mail tutorial
https://scotch.io/tutorials/easy-and-fast-emails-with-laravel-5-3-mailables
