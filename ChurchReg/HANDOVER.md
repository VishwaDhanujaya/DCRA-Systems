# Project Handover Document

**Project**: Church Renovation Information System  
**Department**: Department of Christian Religious Affairs  
**Stack**: Pure PHP (PDO MySQL), Tailwind CSS, Custom Agent Rules & Skills  
**Date**: August 2026  

---

## 1. Executive Summary & Status
The baseline system format and folder structure for the Department of Christian Religious Affairs staff portal have been established. All core include modules, Tailwind CSS configurations, agent rules (`AGENTS.md`), custom skills (`phppro` and `impeccable`), and theme definitions (`#4E0000` & `#13273F`) are ready for full UI implementation.

---

## 2. Theme Colors & Tokens
- **Primary Color (Maroon / Crimson)**: `#4E0000`
  - Tailwind Token: `bg-primary`, `text-primary`, `border-primary`, `hover:bg-primary-dark`
- **Secondary Color (Navy Blue)**: `#13273F`
  - Tailwind Token: `bg-secondary`, `text-secondary`, `border-secondary`, `hover:bg-secondary-dark`
- **Accent Color (Government Gold)**: `#D4AF37`
  - Tailwind Token: `bg-accent-gold`, `text-accent-gold`
- **Neutral Background**: `#F8FAFC` (Slate 50)

---

## 3. Directory Layout
```
c:\xampp\htdocs\Priest\
â”œâ”€â”€ .agents/
â”‚   â”œâ”€â”€ AGENTS.md                  # Project rules, PHP security & UI standards
â”‚   â””â”€â”€ skills/
â”‚       â”œâ”€â”€ phppro/
â”‚       â”‚   â””â”€â”€ SKILL.md          # Pure PHP PDO, session, CSRF & security skill
â”‚       â””â”€â”€ impeccable/
â”‚           â””â”€â”€ SKILL.md          # Impeccable UI craftsmanship & Tailwind rules
â”œâ”€â”€ assets/
â”‚   â”œâ”€â”€ css/
â”‚   â”‚   â”œâ”€â”€ input.css              # Tailwind directive source stylesheet
â”‚   â”‚   â””â”€â”€ style.css              # Compiled Tailwind stylesheet
â”‚   â”œâ”€â”€ js/
â”‚   â”‚   â””â”€â”€ main.js                # Global client-side interactivity script
â”‚   â””â”€â”€ images/
â”‚       â””â”€â”€ .gitkeep               # Image assets directory
â”œâ”€â”€ includes/
â”‚   â”œâ”€â”€ config.php                 # App constants, DB details, session initiation
â”‚   â”œâ”€â”€ db.php                     # PDO database connector singleton
â”‚   â”œâ”€â”€ functions.php              # XSS escaping, CSRF, flash messaging, redirect
â”‚   â”œâ”€â”€ auth.php                   # Staff authentication guard helpers
â”‚   â”œâ”€â”€ header.php                 # Government top header & CSS imports
â”‚   â”œâ”€â”€ sidebar.php                # Staff navigation drawer
â”‚   â””â”€â”€ footer.php                 # Footer layout & script imports
â”œâ”€â”€ index.php                      # Root entry point & layout skeleton
â”œâ”€â”€ package.json                   # Tailwind CSS build script & dependencies
â”œâ”€â”€ tailwind.config.js             # Tailwind CSS theme configuration
â”œâ”€â”€ HANDOVER.md                    # Project handover documentation
â””â”€â”€ README.md                      # Quickstart guide
```

---

## 4. Installed Skills & Custom Rules
1. **`php-pro` Skill**: (`.agents/skills/php-pro`)
   - Official PHP Pro skill by `@jeffallan`.
   - Mandates strict typing, PSR standards, PDO prepared statements, security validation, and clean architecture.

2. **`impeccable` Skill**: (`.agents/skills/impeccable`)
   - Official Impeccable Design skill by `@pbakaus`.
   - Controls aesthetic quality, visual authority, component design system, typography hierarchy, accessibility, and color palette enforcement (`#4E0000` & `#13273F`).


---

## 5. Build & Development Commands
- **Install dependencies** (optional for local Tailwind CLI build):
  ```bash
  npm install
  ```
- **Build CSS once**:
  ```bash
  npm run build:css
  ```
- **Watch CSS for changes during UI design**:
  ```bash
  npm run watch:css
  ```

---

## 6. Next Steps for Next Session / Developer
1. Provide UI mockup / design specifications for the staff portal pages.
2. Implement database migrations / SQL schema for `priests`, `applications`, `certifications`, and `staff_users`.
3. Create root pages (`applications.php`, `certify.php`, `roster.php`, `login.php`) importing `includes/header.php`, `includes/sidebar.php`, and `includes/footer.php`.

