# PHP User Authentication System

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Folder Structure](#folder-structure)

## Introduction

This project is a simple PHP-based user authentication system. It includes functionalities like user sign-up, login, session management, and sign-out. The project demonstrates the use of PHP for handling form submissions, interacting with a MySQL database, and managing user sessions securely.

## Features

- **User Sign-Up:** Register a new user with a username, email, and password.
- **User Login:** Authenticate users using their credentials.
- **Session Management:** Securely manage user sessions, including session regeneration.
- **Sign-Out:** Log out users and destroy their session data.

## Installation

### Prerequisites

- PHP 7.x or higher
- MySQL 5.x or higher
- Composer (optional, if dependencies are managed via Composer)

### Usage

1. **Clone the repository:**
   git clone [Clone](https://github.com/your-username/php-user-authentication.git)

2. **Navigate to the project directory**
cd php-user-authentication

3. **Create a database and import the SQL schema:**

- Use the my_database.sql file located in the project to set up your database schema.
- Run the following command in your MySQL interface:

## Configuration

4.**Configure the project:**
-Copy config.example.php to config.php and update the database credentials.

5.**Start your local server:**
-php -S localhost:8000

## Folder structure

6.**Access the application in your browser:**
-Visit [Local](http://localhost:8000) in your web browser.

php-user-authentication/
├── includes/
│   ├── dbh.inc.php
│   ├── formhandler.inc.php
│   ├── signup.inc.php
│   ├── signout.inc.php
│   └── login.inc.php
├── config.php
├── index.php
├── signup.php
├── login.php
├── welcome.php
├── README.md
└── db.sql
