# AQUATRADE – Local Fisherman Marketplace

## Overview

Aquatrade is a web-based platform designed to connect local fishermen directly with customers. This system allows fishermen to sell their fresh catch online while enabling customers to conveniently browse, order, and support sustainable fishing practices.

---

## Features

### For Customers:

* **User Registration & Login** – Secure account creation and login.
* **Browse Products** – View a list of available fish and seafood from local fishermen.
* **Place Orders** – Easily order products with just a few clicks.
* **Support Local Fishermen** – Promote sustainable and community-driven fishing practices.

### For Fishermen:

* **Product Management** – Add, update, and remove products for sale.
* **Order Notifications** – Receive alerts when a customer places an order.
* **Profile Management** – Update business details and contact information.

### Security:

* **Password Hashing** – All passwords are securely hashed before storing in the database.
* **Strong Password Enforcement** – Passwords must contain uppercase letters, lowercase letters, numbers, and a minimum length of 8 characters.
* **Input Validation** – Both front-end and back-end validation to ensure data integrity.

---

## Technology Stack

* **Frontend:** HTML5, CSS3, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Mailing:** PHPMailer (for notifications and password resets)
* **Version Control:** Git / GitHub

---

## Installation / Setup

1. Clone the repository:

   ```bash
   git clone <repository-url>
   ```
2. Import the database `fisherman.sql` to your local MySQL server.
3. Update `config.php` (or database connection settings) with your MySQL credentials.
4. Launch the project on a local server (e.g., XAMPP, WAMP, or MAMP).
5. Access the website in your browser: `http://localhost/<project-folder>/`

---

## Usage

1. Register as a customer or fisherman.
2. Log in to access respective dashboards.
3. Customers can browse and place orders.
4. Fishermen can manage products and view incoming orders.

---

## Future Enhancements

* **Payment Gateway Integration** – Accept online payments securely.
* **Ratings & Reviews** – Allow customers to review products and fishermen.
* **Mobile App Version** – Enhance accessibility on mobile devices.
* **Analytics Dashboard** – Provide insights for fishermen on sales and demand trends.

---

## License

This project is **open-source** and free to use under the MIT License.
