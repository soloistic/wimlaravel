# Project Onboarding & Architecture Audit

## 1. Architecture Overview
**Pattern:** Standard Laravel MVC extended with a Filament Admin Panel.
The project adheres strictly to Laravel's conventional Model-View-Controller architecture. It currently opts for straightforward Controller-to-Model interactions rather than layered architectural abstractions like Domain-Driven Design (DDD), or explicit Service/Repository patterns or Action classes.

## 2. Tech Stack Detection
* **Backend Framework:** Laravel 12 (PHP ^8.2)
* **Frontend Implementation:**
  * **Public Facing:** Standard Blade templates (managed via `HomeController` and web routes).
  * **Admin Backend:** Filament v3 (built on the TALL Stack - Tailwind CSS, Alpine.js, Laravel, Livewire).
* **API Authentication:** Laravel Sanctum (`HasApiTokens` enabled on the User model).

## 3. Core Components Index
### Eloquent Models
* **`User`**: Standard authenticatable Laravel user. Uses `HasApiTokens` for automated Sanctum auth.
* **`Pdf`**: Represents a magazine or document publication.
  * **Mass Assignable (`fillable`)**: `title`, `pdf_url`, `thumbnail_url`, `published_at`.
  * **Casts**: `published_at` is treated as a native date.
  * **Relationships**: No explicit Eloquent relationships are defined on the model (e.g., independent entity without `belongsTo` dependencies).

### Key Controllers
* **`App\Http\Controllers\HomeController`**: Orchestrates the primary public-facing views (`index`, `about`, `events`, `privacy`, `magazine`).
* **`App\Http\Controllers\Api\PdfController`**: Manages the stateless API endpoints designed for PDF consumption (`index`, `latest`, `show`).

### Key Routes
* **Web (`routes/web.php`):** `/`, `/about`, `/events`, `/privacy`, `/magazine/{pdf}`.
* **API (`routes/api.php`):** `/api/pdfs`, `/api/pdfs/latest`, `/api/pdfs/{pdf}`.
* **Admin (Filament):** Standard endpoints including `/admin` (Dashboard), `/admin/login`, and `/admin/pdfs` (CRUD operations for PDFs).

### Middleware & Providers
* **Providers:** Primary configurations and global bootstrapping are located in `AppServiceProvider`. Filament resources establish their own implicit routes and providers under the `app/Filament` directory.
* **Middleware/Configuration:** Leverages the modernized Laravel 11/12 execution pipeline via `bootstrap/app.php`, simplifying middleware declarations directly inside the application bootstrap rather than an `Http/Kernel.php` file.

## 4. Health Check Summary
* **Dependency Health (`composer install`)**: All dependencies are perfectly synchronized and the vendor directory is fully intact. No missing requirements were detected.
* **Routing Health (`php artisan route:list`)**: The routing table parses correctly, successfully exposing 25 routes without throwing any environment, configuration, or controller binding errors.

---
*This document serves as the Source of Truth for future development tasks, outlining the established standards and stack to maintain consistency.*
