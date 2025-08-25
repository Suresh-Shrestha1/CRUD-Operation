# 🛠️ Simple PHP MySQL CRUD Application

![PHP](https://img.shields.io/badge/PHP-7%2B-blue?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-5%2B-orange?logo=mysql)
![License](https://img.shields.io/badge/license-MIT-green)
![Status](https://img.shields.io/badge/status-Active-brightgreen)
![Responsive](https://img.shields.io/badge/Responsive-Yes-blue)

A basic **CRUD (Create, Read, Update, Delete)** web application built using **PHP** and **MySQL**. This lightweight project demonstrates how to handle user data in a database through an easy-to-use web interface.

---

## ✨ Features

- 📋 View a list of all users in a styled table  
- ➕ Add new users with name, email, and password  
- 🛠️ Edit existing user records  
- 🗑️ Delete users from the database  
- 🔐 Password toggle (hide/show for user privacy)  
- 💻 Fully responsive interface  
- 🎨 Clean and modern UI (via `style.css`)  
- 🔗 Modular code with reusable database connection  

---

## 🧰 Technologies Used

| Technology | Purpose             |
|------------|---------------------|
| PHP        | Backend logic       |
| MySQL      | Database management |
| HTML & CSS | Frontend design     |

---


## 🗂️ File Structure

```
/crud-php/
│
├── index.php          # Displays all users and actions
├── create.php         # Form to add a new user
├── edit.php           # Form to edit user details
├── delete.php         # Deletes a user
├── createTable.php    # Creates the user table
├── db.php             # Database connection settings
├── style.css          # Application styling
├── screenshot         # Screenshot foder
└── README.md          # Project documentation
```

---

## 🧱 Database Schema

Here's the SQL used in `createTable.php`:

```sql
CREATE TABLE user (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL
);
```

---

## 🚀 Getting Started

### Prerequisites

- 🐘 **PHP** (v7 or later)
- 🛢️ **MySQL/MariaDB**
- 🖥️ **Web server** (Apache, Nginx, or use XAMPP/LAMP/WAMP stack)

### Installation

1. **Clone the repo:**
   ```bash
   git clone https://github.com/yourusername/crud-php-mysql.git
   ```

2. **Set up the database:**
   - Create a MySQL database named `mydb`
   - Run `createTable.php` to generate the user table

3. **Update database credentials:**
   Edit `db.php` to match your MySQL credentials:
   ```php
   <?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    ?>
   ```

4. **Run the app:**
   Open `index.php` in your browser:
   ```
   http://localhost/crud-php/index.php
   ```

---

## 🔧 Customization Tips

- ✅ Hash passwords before saving:
```php
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
```

- 🔐 Use prepared statements (mysqli) to prevent SQL injection:
```php
// Example: Insert user safely
$stmt = $conn->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashedPassword);
$stmt->execute();
$stmt->close();
```

- 🌐 Add client/server-side validation (e.g., required fields, email format)
- 🧑 Add more fields: phone number, profile picture (file uploads), roles, etc.
- 📦 Use sessions to build a login system or admin-only access
- 🎨 Tweak `style.css` for branding or theme changes

---

## 💡 Real-World Use Cases

This project can be adapted for:

- 🧑‍💼 **Employee/User Management Dashboard**
- 📝 **Student Record System**
- 🏫 **School/College Registration System**
- 💾 **Backend prototype for small web applications**

---
