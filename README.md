# Expense Tracker

Expense Tracker is a web application designed to help users track their expenses and manage their transactions.

## Prerequisites

Before running the Expense Tracker application, ensure you have the following installed:

- PHP >= 7.4
- Composer
- Node.js (for npm)
- MySQL or other compatible database management system
- A web server like Apache or Nginx

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/Lovepreet-G/Expense_Tracker_Laravel.git
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Install JavaScript dependencies:

   ```bash
   npm install && npm run dev
   ```

4.  Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Migrate the database:

   ```bash
   php artisan migrate:refresh --seed

5. Test Login:

   ```bash
   Email : test@example.com
   Password : password


## Usage

1. Start the development server:

   ```bash
   php artisan serve
   ```

2. Access the application in your web browser at `http://127.0.0.1:8000/`.

3. http://lovepreet-g.infinityfreeapp.com/HTTP5225/assignment2/signin.php

## Screenshots

### Login Page
![Login Page](/resources/Login.jpg)

### Home Page
![Home Page](/resources/index_page.jpg)

### All Transactions Page
![All Transactions Page](/resources/All_transaction.jpg)

### Add Transaction Page
![Add Transaction Page](/resources/Add_transaction.jpg)

### Deposits Page
![Deposits Page](/resources/Deposit.jpg)


