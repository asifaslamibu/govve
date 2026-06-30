# Sindh Human Rights Commission – Complaint Management System

A PHP/MySQL CRUD web application for registering, categorising, and tracking citizen **complaints** for the Sindh Human Rights Commission. Staff log in to an admin dashboard to record complaints, assign categories/sub-categories, priorities, departments, and reference data, and to generate complaint reports.

## Tech Stack

- **Backend:** PHP (procedural) with MySQLi
- **Database:** MySQL (`complains`)
- **Frontend:** Bootstrap admin template (Cork), Select2, Bootstrap-Select, jQuery
- **AJAX:** for inventory/category sub-type lookups and inline operations

## Features

- Staff authentication and session-based access control (`index.php`, `sessioninput.php`, `logout.php`)
- Complaint registration, editing, and viewing (`complains.php`, `edit_com.php`, `updatecom.php`, `view.php`)
- Master-data management: categories and sub-categories, cities, departments, priorities, call/complaint types, references
- Cascading category → sub-category selection via AJAX (`get_sub_type.php`, `subCat.php`, `ajax_inventory/`)
- User management (`addusers.php`)
- Complaint reporting (`complaint_report.php`, `com_table.php`)
- Multi-language support hook (`lang.php`)

## Requirements

- PHP 7.x+ with MySQLi
- MySQL / MariaDB
- Apache (XAMPP recommended for local development)

## Installation & Setup

1. Copy the project into your web root (e.g. `C:\xampp\htdocs\govve`).
2. Create the database and import the schema:
   ```sql
   CREATE DATABASE complains;
   ```
   ```bash
   mysql -u root -p complains < complains.sql
   ```
3. Configure the database connection in `config_indemnifier.php`:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'complains');
   ```
4. Start Apache and MySQL, then open `http://localhost/govve/` and log in with a valid user account.

## Usage

- Log in from the landing page (`index.php`).
- Register new complaints, assign category/sub-category, priority, department, and reference details.
- Manage master data (cities, departments, categories, priorities) from the sidebar.
- Generate and review complaint reports.

## Project Structure

```
index.php                 # Login
config_indemnifier.php    # Database connection
complains.php             # Complaint entry
edit_com.php / updatecom.php / view.php
categories.php / subCat.php / city.php / departments.php / priority.php
ajax_inventory/           # AJAX CRUD endpoints
complaint_report.php / com_table.php
assets/, bootstrap/, plugins/   # UI template assets
complains.sql             # Database schema
```

## License

This project is for educational/portfolio purposes.
