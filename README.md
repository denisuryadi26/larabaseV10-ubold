# Larabase (Laravel base application)



## About Larabase

## Whats Inside
- Ubold Admin UI
- Boostrapt 5
- Yajra Datatables (https://github.com/yajra/laravel-datatables)
- Bootstrap Fileinput (https://github.com/kartik-v/bootstrap-fileinput)
- Ckeditor (https://github.com/ckeditor/ckeditor5)

Include simple Data Table (CRUD).

| Feature | Status |
| --- | --- |
| Bootstrap Modern Admin Themes | OK |
| Auth Scaffolding | OK |
| Roles & Permissions | OK |
| Sweet Alert JS | OK |
| Laravel Datatables | OK |
| Menu Builder | OK |
| Upload Handler | OK |
| WYSIG Editor | OK |
| CRUD Generator | OK |



## Installation
### First clone or download this repository
```shell
git clone https://github.com/denisuryadi26/larabaseV10-ubold.git
```

After clone or download this repository, next step is install all dependency required by laravel and laravel-mix.

```shell
# install composer-dependency
composer install
```

### Next Step
Before we start web server make sure we already generate app key, configure `.env` file and do migration.

```shell
# create copy of .env
cp .env.example .env

# create laravel key
php artisan key:generate
# config database user and password

# migrate & seed some data
php artisan migrate:fresh --seed

#ready to serve
php artisan serve
```

### Default User
Username : spradmin <br>
Password  : secret



## Generator
To Crete CRUD generator, just type lbase:generate modulName <br>
<br>
For example, Follow instruction bellow

```shell
php artisan lbase:generate TableName

Generate Table ?
[0] Yes
[1] No

#Message : Please Input Column Except Primary Key


 How Many Column?:
 > 2

 1. Column Name?:
 > code


 1. Type For Column code?:
 [0] int
 [1] string
 [2] text
 [3] date
 [4] timestamp
  > 1

 2. Column Name?:
 > name

 2. Type For Column name?:
  [0] int
  [1] string
  [2] text
  [3] date
  [4] timestamp
 > 1

#Migrate Success
#New Migration File : /home/dodi/Desktop/larabase/database/migrations/2022_06_16_000000_create_samples_table.php
#New Model File : /home/dodi/Desktop/larabase/app//Models/Generator/Sample.php
#New View File : /home/dodi/Desktop/larabase/resources/views/admin/contents/sample/index.blade.php
#New Controller File : /home/dodi/Desktop/larabase/app/Http/Controllers/Generator/SampleController.php
#New Service File : /home/dodi/Desktop/larabase/app/Service/Generator/SampleService.php
#New Repository File : /home/dodi/Desktop/larabase/app/Repository/Generator/SampleRepository.php

```
Thank you for considering contributing to this repo!

## Contributing
Thank you for considering contributing to this repo!



## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



