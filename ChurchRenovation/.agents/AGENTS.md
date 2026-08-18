# Project Rules & Guidelines - Priesthood Identity & Passport Certification System

Department of Christian Religious Affairs - Priesthood Identity / Passport Certification System.

## Core Tech Stack
- **Backend Language**: Pure PHP (PHP 8.x, PDO for MySQL/MariaDB)
- **Styling**: Tailwind CSS
- **Database**: MySQL/MariaDB with PDO
- **Architecture**: Modular include pattern (`includes/`), clean root pages (`index.php`, etc.), static assets (`assets/`)

## Design System & Theme Colors
- **Primary Color (Maroon / Deep Crimson)**: `#4E0000` (`bg-primary`, `text-primary`, `border-primary`)
  - Primary Hover: `#3A0000`
  - Primary Soft: `#FAF0F0`
- **Secondary Color (Navy Blue)**: `#13273F` (`bg-secondary`, `text-secondary`, `border-secondary`)
  - Secondary Hover: `#0D1C2E`
  - Secondary Soft: `#F0F4F8`
- **Accent Color (Government Gold)**: `#D4AF37` / `#C5A059`
- **Neutral Background**: `#F8FAFC` (Slate 50)
- **Card Background**: `#FAFAFA` with soft slate borders (`border-slate-200`) and top primary accent bars (`border-t-4 border-primary`).

## Typography & Font Rules
- **Headings & Key Metrics (`font-montserrat` / `font-heading`)**:
  - Font Family: **Montserrat** (Google Fonts `500;600;700;800`).
  - Used for: Main system titles ("Priesthood Identity/Passport Certification"), Page Headings ("Dashboard Overview"), Section Titles ("Recent Applications", "Status Distribution", "Monthly Applications (2026)", "Quick Summary"), Metric Numbers (`148`, `23`, `112`, `13`), and Stat Card labels.
- **Body Text & Tabular Data (`font-inter` / `font-sans`)**:
  - Font Family: **Inter** (Google Fonts `400;500;600;700`).
  - Used for: Table headers/rows, subtext indicators (`↑ 12 this month`), dates, breadcrumbs (`Home`), input fields (`Search`), and sidebar item labels.

## Directory & File Structure Rules
1. **Root Directory**:
   - `index.php` and other main user/staff facing pages MUST remain at the root folder level.
   - Core configuration (`tailwind.config.js`, `package.json`, `HANDOVER.md`, `README.md`) stays at root.
2. **`includes/` Folder**:
   - Stores all reusable layouts (`header.php`, `footer.php`, `sidebar.php`).
   - Stores core system modules (`config.php`, `db.php`, `functions.php`, `auth.php`).
   - Every inclusion must use `require_once __DIR__ . '/filename.php'` or `ROOT_PATH` constants to avoid relative path resolution bugs.
3. **`assets/` Folder**:
   - `assets/css/input.css`: Source Tailwind directives.
   - `assets/css/style.css`: Compiled CSS bundle referenced by `includes/header.php`.
   - `assets/js/main.js`: Client-side scripting.
   - `assets/images/`: Logos, seals, iconography, and uploaded document previews.

## PHP Coding & Security Standards
1. **Database Queries**:
   - MUST use Prepared Statements via PDO for ALL SQL queries. NEVER concatenate raw variables into SQL queries.
2. **Output Sanitization**:
   - Escape all dynamic values rendered in HTML using `e($val)` (using `htmlspecialchars`).
3. **CSRF Protection**:
   - All forms submitting `POST`/`PUT`/`DELETE` must include `<?= csrf_field() ?>` and verify tokens on request processing using `verify_csrf()`.
4. **Session Handling**:
   - Sessions must be started securely in `includes/config.php` with `httponly` and `samesite` attributes.
5. **Code Style**:
   - Strict typing where appropriate, clean indentation (4 spaces), descriptive function names.

## Agent Skills Invocation
- Use **php-pro** skill (`.agents/skills/php-pro`) for modern PHP standards, security, PDO handling, architecture patterns, and PSR compliance.
- Use **impeccable** skill (`.agents/skills/impeccable`) for creating visually stunning, accessible, and responsive Tailwind UI designs aligned with government/religious affairs branding.

