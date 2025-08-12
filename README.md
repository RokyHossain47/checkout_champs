# 🛒 Checkout Champs

**Checkout Champs** is a Laravel-based e-commerce platform that allows you to **import products from Alibaba or AliExpress** and sell them directly to customers.  
This project is developed as part of our **E-Commerce & Web Engineering** group project.

---

## 🚀 Features

- **Product Import from Alibaba / AliExpress**
  - Fetch product details (title, description, price, images) via API.
  - Store imported products in your own database.
  
- **Customer Shopping Experience**
  - Browse products by categories.
  - Search and filter functionality.
  - Add to Cart & Checkout.

- **Order Management**
  - Place orders for imported products.
  - Track order status.

- **User Authentication**
  - Secure login & registration.
  - Profile management.

- **Admin Dashboard**
  - Manage products, categories, and orders.
  - Import products from Alibaba/AliExpress with one click.

---

## 🛠️ Technology Stack

- **Backend:** Laravel 12 (PHP 8+)
- **Frontend:** Blade Templates, Bootstrap 5, CSS3, JavaScript (jQuery)
- **Database:** MySQL
- **API Integration:** Alibaba / AliExpress Open API
- **Authentication:** Laravel Breeze / Laravel Sanctum
- **Deployment:** Apache / Nginx

---
## 🧾 Clone & install

Open terminal and run:

## clone the repo
git clone https://github.com/rokyh459/checkout_champs.git
cd checkout-champs

## Install PHP deps
composer install

## Connect with database
open -> .env.example .env change database name

## Generate Application Key
This command generates a new encryption key for the Laravel application and updates the `.env` file.
php artisan key:generate

## Seed the database
php artisan migrate:fresh --seed

## serve the project
php artisan serve

You will get Ip to run this project. open it with your browser
