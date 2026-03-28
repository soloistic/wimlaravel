# Word Increase Ministries (WIM) - Voice of Faith Magazine Site

This is a modernized Laravel application designed to manage and display the **"Voice of Faith" (VOF)** magazines for Word Increase Ministries. It features a premium, responsive public-facing website and a robust Filament-powered admin panel for seamless content delivery.

---

## 🚀 Key Features

- **Premium UI/UX:** A modern, cinemátic design using glassmorphism, Google Fonts (Playfair Display & Inter), and a custom brand-consistent color palette.
- **Dynamic Magazine Archive:** 
    - **Homepage:** Showcases the 3 most recent releases with a "View All" transition.
    - **Voice of Faith Page:** Automatically groups magazines by year in descending order for easy browsing.
- **Admin Panel (Filament v3):** 
    - Full CRUD management for PDFs and thumbnails.
    - **User Management:** Manage admin accounts directly from the UI.
    - **Default Sorting:** Magazines are automatically sorted by newest release first.
- **Symlink-Free Storage:** Reconfigured for high compatibility with restrictive staging/production environments (stores directly in `public/storage`).
- **Stateless API:** Dedicated endpoints (`/api/pdfs`) for programmatic access to magazine data.
- **Regulatory Compliance:** Google Play-compliant Privacy Policy with clear data disclosure and deletion processes.

---

## 🏗️ Architecture & Tech Stack

- **Backend:** Laravel 12 (PHP ^8.2)
- **Admin Backend:** Filament PHP (TALL Stack: Tailwind, Alpine, Laravel, Livewire)
- **Frontend:** Blade Templates + Tailwind CSS (CDN)
- **API Security:** Laravel Sanctum
- **Architecture Pattern:** Standard MVC with service-level logic handled via Controllers and Filament Resources.

### Core Components
- **`Pdf` Model:** Handles publication data (`title`, `pdf_url`, `thumbnail_url`, `published_at`).
- **`User` Model:** Implements `FilamentUser` for secure administrative access.
- **`HomeController`:** Manages public views including the year-grouped archive logic.
- **`PdfController` (API):** Serves JSON data for external consumption.

---

## 🛠️ Installation & Setup

1. **Clone & Install:**
   ```bash
   git clone <repository-url>
   composer install
   npm install && npm run build
   ```

2. **Environment Configuration:**
   Copy `.env.example` to `.env`. Ensure `APP_URL` is set correctly.
   ```bash
   php artisan key:generate
   ```

3. **Database & Storage:**
   ```bash
   php artisan migrate
   ```
   *Note: `php artisan storage:link` is no longer strictly required as the application is configured to write directly to `public/storage` for better compatibility.*

4. **Development

   To start the local development server:

   ```bash
   php artisan serve
   ```

   Access the site at `http://127.0.0.1:8000`.

---

## 📖 Usage Guide

### Managing Magazines
- **Admin Panel:** Access at `/admin`. Create your first user via CLI: `php artisan make:filament-user`.
- **Bulk Upload (Seeder):**
  1. Place PDFs in `public/storage/pdfs` and Thumbnails in `public/storage/thumbnails`.
  2. Run `php artisan db:seed --class=MagazineSeeder`.
  *Filenames like `Mar25.pdf` are automatically parsed into "March 2025".*

### User Management
You can now add colleagues as admins directly through the **Users** menu in the Admin Panel without using the command line.

---

## 🛡️ Health & Safety
- **Staging Fix:** If migrating from an old setup, manually move files from `storage/app/public` to `public/storage`.
- **Permissions:** Ensure the `public/storage` and `bootstrap/cache` directories are writable by the web server (`775`).

---
*Last updated: March 28, 2026*
