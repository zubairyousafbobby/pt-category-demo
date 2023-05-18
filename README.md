# Laravel-Multi Category
## Project setup
Open terminal
```
git clone https://github.com/zubairyousafbobby/pt-category-demo.git
composer install
```
Open project directory
```
cd pt-category-demo
composer install
```

#### Copy .en.example to .env and add mysql database connection information
```
cp .env.example .env
php artisan key:generate
```

#### Run Migration
```
php artisan migrate
```

#### To Seed the Category and Sub-Category data
```
php artisan db:seed --class=CategorySeeder
```


#### Run Project

```
php artisan serve
http://127.0.0.1:8000
```


