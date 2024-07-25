# Laravel Blog System

This is a blog system built using the Laravel framework. 

## Requirements

- PHP 8.3.7
- Laravel 11
- Composer
- Node.js and npm (for frontend dependencies)

## Installation

### Step 1: Clone the repository

```bash
git clone https://github.com/MuhammadZulhusni/laravel-blog-system.git
```

```bash
cd laravel-blog-system
```

### Step 2: Install dependencies

```bash
composer install
npm install
npm run dev
```
### Step 3: Setup environment variables
- Copy the .env.example file to .env and update the necessary settings (database, mail, etc.).
  
```bash
cp .env.example .env
```

### Step 4: Generate application key
```bash
php artisan key:generate
```
### Step 5: Run migrations and seed the database
```bash
php artisan migrate --seed
```

### Step 6: Start the development server
```bash
php artisan serve
```
Visit http://localhost:8000 in your browser to see the application.


### Contributing
- Feel free to fork this repository and submit pull requests. Any improvements or bug fixes are welcome!



