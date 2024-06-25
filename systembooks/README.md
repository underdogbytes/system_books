# Creating the project
```
composer create-project laravel/laravel api "7.0.*" --prefer-dist
```

# Migrations & Models

```
php artisan make:model Models\Book -m
```

```
php artisan make:controller api\BookController --resource
```

# Route
Route::apiResource('books', 'api\BookController');