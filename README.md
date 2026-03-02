# 🚀 SaralPHP - Secure Mini MVC Framework

**SaralPHP** is a lightweight, secure, and production-ready PHP micro-framework built completely from scratch using pure OOP concepts. 

Designed for developers who need to launch fast, low-end websites or build minimal APIs without the heavy overhead of massive frameworks like Laravel or Symfony—while retaining the exact same enterprise-grade security and Developer Experience (DX).

---

## 🔥 Enterprise Features

- **🚀 Dynamic Router**: Support for closures, controllers, and Regex dynamic endpoints (e.g. `Route::get('/user/{id}')`).
- **🛡️ Bulletproof Security**: Built-in protections against SQL Injection, Mass Assignment, CSRF, and Session Hijacking. 
- **⛓️ Middleware Chaining**: A dynamic `MiddlewareResolver` that lets you easily stack authentications (e.g., `'auth|admin'`).
- **🗄️ C.R.U.D ORM**: The `baseModel` comes pre-built with `find()`, `all()`, `create()`, `update()`, and `delete()` methods utilizing strictly prepared PDO statements.
- **🌍 Environment Support (`.env`)**: Uses `vlucas/phpdotenv` to safely load database credentials out of version control.
- **🚨 Global Error Handling**: Development mode prints beautiful stack traces; Production mode safely logs errors to `storage/logs/error.log` and renders custom 500 error views.
- **☁️ Deploy-Ready**: Ships with a fully optimized Apache `.htaccess` that immediately blocks all hidden files (like `.git` and `.env`) and hard-blocks internal routing vectors to save PHP resources on shared hosts (like Hostinger).

---

## ⚡ Quick Start

### 1. Installation
Clone the repository and install the dependencies to generate the autoload map:
```bash
git clone https://github.com/SaralSingh/php-mini-mvc-framework.git my-app
cd my-app
composer install
```

### 2. Environment Setup
Create your `.env` file to configure your database and app environment:
```bash
cp .env.example .env
```
Make sure to set `APP_ENV=local` while developing, and change it to `APP_ENV=production` when uploading to your live server to hide stack traces.

### 3. Run Locally
You can use Apache (XAMPP/MAMP) or simply run PHP's built-in web server:
```bash
php -S localhost:8000
```

---

## 🚦 Routing Examples

Defining routes in `routes/web.php` is incredibly simple. You can define exact matches or use dynamic parameters:

```php
use App\Services\Route;

// Basic GET route
Route::get('/', 'HomeController', 'index');

// Route with dynamic Regex Parameters
Route::get('/user/{name}', 'UserController', 'showProfile');

// Chaining Multiple Middlewares
Route::get('/admin/dashboard', 'DashboardController', 'index', 'auth|admin');
```

---

## 🗄️ Database ORM

SaralPHP comes with a lightweight ORM that makes interacting with Database tables effortless. Because it uses PDO Prepared Statements under the hood, you never have to worry about SQL injection.

```php
namespace App\Models;

class User extends baseModel 
{
    protected $tableName = "users";
    
    // Protect against Mass Assignment hackers
    protected $fillable = ['name', 'email', 'password']; 
}

// Fetch a user
$user = User::find(1);

// Get all users
$users = User::all();

// Create a new user (Auto-filters out non-fillable payloads)
$id = User::create([
    'name'  => 'Saral',
    'email' => 'saral@example.com',
    'admin' => 1 // This will be safely ignored because it is not in $fillable!
]);

// Update a user
User::update($id, ['name' => 'Saral Singh']);

// Delete a user
User::delete($id);
```

---

## 👨‍💻 Author
Built by [Saral Singh](https://github.com/SaralSingh) as an ongoing pursuit to understand and emulate how enterprise frameworks structure their backend logic. Ideal for rapid deployment on low-end servers.
