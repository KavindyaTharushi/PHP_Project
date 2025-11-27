# PHP_Project
# SkylineSells – Online Apartment Marketplace

SkylineSells is a PHP/MySQL web application that helps buyers discover premium apartments, lets owners publish listings, and keeps everyone coordinated through bookings, reviews, and FAQs. The repo contains a full-stack implementation built for coursework, but it is organized so you can continue iterating on it as a production-style prototype.

## Features
- **Public marketing site** with landing page, hero slider, and static About/Services/Contact content (`index.php`, `Home.php`, `service.php`, `aboutus.php`, `contactus.php`).
- **Property catalogue** that highlights curated apartments with imagery, feature lists, and quick booking entry points (`readPropertyList.php`).
- **Account system** for buyers and sellers: registration with profile photo upload, hashed passwords, and login-protected flows (`register.php`, `Login.php`, `userRegister.php`, `userLogin.php`).
- **Booking workflow** that pre-fills the authenticated user’s information and stores reservations in MySQL with CRUD management (`bookingindex.php`, `bookinginsert.php`, `bookingread.php`, `bookingupdate*.php`, `bookingdeleteindex.php`).
- **Seller portal** to capture advertisement requests (title, location, bedroom/bath counts, pricing, description) plus admin-style read/update/delete screens (`seller.php`, `postinsert.php`, `postread.php`, `postupdate.php`, `postdelete.php`).
- **Community feedback** via the simple FAQ/comments board with create/edit/delete support (`maincomment.php`, `crud.php`, `editcomment.php`).
- **Reusable UI components** for headers, footers, and styles, plus helper JS for navigation, dropdowns, confirmation dialogs, and client-side validation (`header.php`, `footer.php`, `styles/`, `js/`).

## Tech Stack
- **Language:** PHP 8+ (procedural style with mysqli)
- **Database:** MySQL or MariaDB (`apartment` schema by default)
- **Frontend:** HTML5, vanilla CSS/JS
- **Session/Auth:** Native PHP sessions with password hashing via `password_hash`/`password_verify`

## Directory Layout
```
website_final/
├── README.md
└── src/
    ├── Home.php, index.php, ...        # Page-level controllers/views
    ├── booking*.php                    # Booking CRUD
    ├── post*.php                       # Seller advertisement CRUD
    ├── userRegister.php, userLogin.php # Auth handlers
    ├── maincomment.php, crud.php       # FAQ/comments
    ├── styles/                         # CSS (global + page-specific)
    ├── js/                             # Browser scripts
    ├── images/                         # Assets + user uploads
    └── config.php                      # Single DB connection file
```

## Getting Started

1. **Install prerequisites**
   - PHP 8.x with mysqli extension (XAMPP/WAMP/Laragon works great on Windows).
   - MySQL or MariaDB server.
   - Composer is not required—there are no external PHP dependencies.

2. **Clone or copy the source**
   ```bash
   git clone <repo-url>
   cd website_final/src
   ```
   If you’re using XAMPP/WAMP, move the `src` folder inside `htdocs`/`www` or configure a virtual host that points to it.

3. **Create the database**
   ```sql
   CREATE DATABASE apartment;
   USE apartment;

   -- Users
   CREATE TABLE profile (
     id INT AUTO_INCREMENT PRIMARY KEY,
     First_name VARCHAR(100),
     Last_name VARCHAR(100),
     Email VARCHAR(255) UNIQUE,
     phone_number VARCHAR(20),
     user_name VARCHAR(100),
     password VARCHAR(255),
     profile_picture VARCHAR(255)
   );

   -- Apartment bookings
   CREATE TABLE apartment3 (
     id INT AUTO_INCREMENT PRIMARY KEY,
     apartment_name VARCHAR(255),
     first_name VARCHAR(100),
     last_name VARCHAR(100),
     phone_number VARCHAR(20),
     email VARCHAR(255),
     booking_date DATE
   );

   -- Seller advertisements
   CREATE TABLE advertisement (
     `Client ID` INT AUTO_INCREMENT PRIMARY KEY,
     `Name` VARCHAR(150),
     `Email` VARCHAR(255),
     `Tel Number` VARCHAR(20),
     `Mob Number` VARCHAR(20),
     `Title of the Ad` VARCHAR(255),
     `Location` VARCHAR(255),
     `No of Bedrooms` INT,
     `No of Bathrooms` INT,
     `Price` DECIMAL(15,2),
     `Description` TEXT
   );

   -- FAQ / comments
   CREATE TABLE comments1 (
     cid INT AUTO_INCREMENT PRIMARY KEY,
     uid VARCHAR(100),
     date DATETIME,
     message TEXT
   );
   ```
   > The exact schema used in class may differ; adjust the DDL to match your existing data dumps if you already have them.

4. **Configure database credentials**
   - Edit `src/config.php` if your MySQL host/user/password/database differ from the default (`localhost` / `root` / `''` / `apartment`).

5. **Serve the application**
   - Via PHP’s built-in server:
     ```bash
     php -S localhost:8080 -t src
     ```
   - Or through Apache/Nginx. Navigate to `http://localhost:8080/` (or your virtual host) to load the landing page.

6. **Create demo users and bookings**
   - Use `register.php` to create accounts (profile photos saved under `images/user_profiles`).
   - After logging in, visit `readPropertyList.php` → “Booking Apartment” to place reservations.
   - Access `seller.php` to submit ads; `postread.php` lists and manages them.

## Environment & Assets
- User-uploaded avatars live in `src/images/user_profiles`. Ensure the folder is writable by the web server.
- Static assets are bundled under `src/images`. Replace them with your branding as needed.
- JavaScript helpers reside in `src/js`. `myScript.js` contains navigation, dropdown toggles, and validation helpers used across pages.

## Testing & QA
- There are no automated tests. Perform manual regression before deployments:
  1. Register + login flows (including password mismatch validation).
  2. Booking CRUD cycle (insert, update, delete).
  3. Seller advertisement CRUD cycle.
  4. Comment board create/edit/delete actions.
  5. Upload a profile picture and verify it displays.

## Troubleshooting
- **Blank page / warnings** – Turn on PHP error reporting (`ini_set('display_errors', 1);`) during development to spot syntax or DB errors.
- **Cannot connect to DB** – Confirm credentials in `config.php`, ensure MySQL service is running, and the `apartment` database exists.
- **Uploads failing** – Check folder permissions for `src/images/user_profiles`.
- **Session issues** – PHP sessions require write access to the system temp directory; Windows users should run Apache/PHP with enough permissions.

## Extending the Project
- Replace inline SQL with prepared statements to mitigate SQL injection.
- Introduce role-based access (e.g., admin vs. buyer vs. seller).
- Add pagination/search to the property list and advertisements.
- Convert static apartment listings into DB-driven data with uploadable galleries.
- Add automated tests (PHPUnit or end-to-end with Playwright/Cypress).

## License
No explicit license is provided. Treat the code as all-rights-reserved unless the course instructor supplies a license file.

---
Need help or have questions about the structure? Open an issue or start a discussion in your repository so future contributors share the same context captured here.

