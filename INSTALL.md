# Installation Guide

Follow these steps to set up and run this Laravel application on your local machine.

## Prerequisites

Before you begin, ensure you have the following installed:
- **PHP** (v8.2 or higher recommended)
- **Composer** (PHP package manager)
- **Node.js & npm** (Javascript package manager)
- **XAMPP** (or any other local MySQL server)

---

## 1. Initial Setup

1. **Open your terminal** and navigate to your project directory.
2. **Install PHP dependencies** by running:
   ```bash
   composer install
   ```
3. **Install Node.js dependencies** by running:
   ```bash
   npm install
   ```

## 2. Environment Configuration

1. Copy the example environment file to create your own `.env` file:
   ```bash
   cp .env.example .env
   ```
   *(If you are on Windows Command Prompt, use `copy .env.example .env`)*

2. **Generate your application key**:
   ```bash
   php artisan key:generate
   ```

## 3. Database Setup

1. Open **XAMPP Control Panel** and **Start the MySQL module**.
2. Open your `.env` file and make sure your database settings match your local setup. It should look something like this:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=marahuyodb
   DB_USERNAME=root
   DB_PASSWORD=
   ```
3. Create a database named `marahuyodb` in your MySQL server (you can do this via phpMyAdmin or your preferred database tool).
4. Run the database migrations to create the required tables:
   ```bash
   php artisan migrate
   ```

## 4. Running the Application

To run the application, you need to start **two separate terminal windows** inside your project directory.

**Terminal 1 (Backend Server):**
Run Laravel's built-in PHP server:
```bash
php artisan serve
```

**Terminal 2 (Frontend Server):**
Run Vite to compile your Tailwind CSS and JavaScript:
```bash
npm run dev
```

## 5. View the Website

Finally, open your web browser (Chrome, Edge, Firefox, etc.) and visit:
[http://localhost:8000](http://localhost:8000)

*(Note: The terminal running `npm run dev` might mention `localhost:5173`, but you should ignore that link. Always use the port 8000 link provided by `php artisan serve`)*
