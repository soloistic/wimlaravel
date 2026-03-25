# Word Increase Ministries (WIM) - Voice of Faith Magazine Site

This is a Laravel application designed to manage and display the "Voice of Faith" (VOF) magazines for Word Increase Ministries. It features a public-facing website for users to view and download magazines, and a Filament-powered admin panel for easy content management.

## Features

-   **Public Magazine Archive:** A clean, responsive interface for users to browse the collection of VOF magazines.
-   **PDF Viewer:** Integrated PDF viewer allows users to read magazines directly in the browser or download them for offline reading.
-   **Admin Panel:** Built with [Filament](https://filamentphp.com/), providing a robust backend to manage PDF uploads, thumbnails, and magazine details.
-   **Automated Seeder:** A custom seeder that automatically populates the database from PDF files in the storage directory, intelligently parsing filenames (e.g., `Mar25`) into readable titles (e.g., "March 2025").
-   **API:** A dedicated API endpoint (`/api/pdfs`) to access magazine data programmatically.
-   **Static Pages:** Includes About Us, Events, and Privacy Policy pages with a consistent, professional design.

## Installation

1.  **Clone the repository:**
    ```bash
    git clone <repository-url>
    cd vof_mag_site
    ```

2.  **Install dependencies:**
    ```bash
    composer install
    npm install
    npm run build
    ```

3.  **Environment Setup:**
    Copy the `.env.example` file to `.env` and configure your database and other settings.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Note: Ensure `APP_URL` in your `.env` includes the port if you are using `php artisan serve` (e.g., `http://127.0.0.1:8000`).*

4.  **Database Migration & Seeding:**
    Run the migrations to set up the database schema.
    ```bash
    php artisan migrate
    ```

5.  **Storage Link:**
    Create a symbolic link to make your storage accessible from the web.
    ```bash
    php artisan storage:link
    ```

## Usage

### Managing Content

To add new magazines, you can either use the admin panel or the automated seeder.

**Using the Seeder:**
1.  Place your PDF files in `storage/app/public/pdfs`.
2.  Place corresponding thumbnails (same filename, `.jpg` extension) in `storage/app/public/thumbnails`.
3.  Run the seeder:
    ```bash
    php artisan db:seed --class=MagazineSeeder
    ```
    *The seeder will automatically create titles based on the filename (e.g., `Mar25.pdf` becomes "March 2025").*

**Using the Admin Panel:**
1.  Create an admin user:
    ```bash
    php artisan make:filament-user
    ```
2.  Log in at `/admin` to upload and manage magazines manually.

### Development

To start the local development server:

```bash
php artisan serve
```

Access the site at `http://127.0.0.1:8000`.
