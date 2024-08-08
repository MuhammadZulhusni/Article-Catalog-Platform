# Article Catalog Platform

Article Catalog Platform is a web application for browsing and exploring a collection of articles. Users can search, filter by category, and choose articles by author. This platform provides a read-only experience for discovering and reading content.

# Features
- **Search:** Find articles using keywords.
- **Category Filtering:** Sort articles by category.
- **Author Selection:** Choose articles by specific authors.
- **Read-Only:** View and read articles without editing capabilities.

## Requirements

- PHP 8.3.7
- Laravel 11
- Composer
- Node.js and npm (for frontend dependencies)

## Installation

### Step 1: Clone the repository

```bash
git clone https://github.com/MuhammadZulhusni/Article-Catalog-Platform.git
```

```bash
cd Article-Catalog-Platform
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

### Step 5: Setup database connection
- Open the `.env` file and update the following lines with your database configuration:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### Step 6: Run migrations and seed the database
```bash
php artisan migrate:fresh --seed
```

### Step 7: Start the development server
```bash
php artisan serve
```
Visit http://localhost:8000 in your browser to see the application.


### Contributing
- Feel free to fork this repository and submit pull requests. Any improvements or bug fixes are welcome!



