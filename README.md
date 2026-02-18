# 🗨️ Discuss-PHP

A simple Discussion Platform built using **PHP, MySQL, Bootstrap, and PDO**.

Users can register, log in, post questions, view latest questions, search questions, and delete their own posts.

---

## 🚀 Features

- 🔐 User Authentication (Login / Signup)
- 📝 Post Questions
- 📋 View Latest Questions
- 🔎 Search Questions
- 🗑 Delete Own Questions
- 🛡 Secure Database Connection using PDO
- 🎨 Responsive UI using Bootstrap

---

## 🛠 Tech Stack

- Frontend: HTML, CSS, Bootstrap
- Backend: PHP
- Database: MySQL
- Version Control: Git & GitHub

---

## 📂 Project Structure
Discuss/
│── client/
│── config.php
│── index.php
│── login.php
│── signup.php
│── questions.php
│── README.md


---

## ⚙️ Installation & Setup

### 1️⃣ Clone Repository


git clone https://github.com/harshgavandit/Discuss-PHP.git


### 2️⃣ Move Project to XAMPP

Place the folder inside:


C:\xampp\htdocs\


### 3️⃣ Create Database

Open phpMyAdmin and create a database named:


discuss


### 4️⃣ Configure Database

Update `config.php` with your database credentials:


$host = "localhost";
$dbname = "discuss";
$username = "root";
$password = "";


### 5️⃣ Run Project

Start Apache & MySQL from XAMPP.

Open browser:


http://localhost/Discuss


---

## 🔐 Security Features

- PDO Prepared Statements (Prevents SQL Injection)
- Session-based Authentication
- Owner-based Delete Protection

---

## 📸 Future Improvements

- Upvote / Downvote System
- Answer Section
- Comment System
- Admin Panel
- CSRF Protection
- Password Hashing Improvement

---

## 👨‍💻 Author

Harsh Gavand  
BTech IT Student  
Learning Full Stack Development & DevOps 🚀

---

## ⭐ If You Like This Project

Give it a ⭐ on GitHub!
