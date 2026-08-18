# Project Handover Document

**Project**: Priesthood Identity / Passport Certification System  
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
├── .agents/
│   ├── AGENTS.md                  # Project rules, PHP security & UI standards
│   └── skills/
│       ├── phppro/
│       │   └── SKILL.md          # Pure PHP PDO, session, CSRF & security skill
│       └── impeccable/
│           └── SKILL.md          # Impeccable UI craftsmanship & Tailwind rules
├── assets/
│   ├── css/
│   │   ├── input.css              # Tailwind directive source stylesheet
│   │   └── style.css              # Compiled Tailwind stylesheet
│   ├── js/
│   │   └── main.js                # Global client-side interactivity script
│   └── images/
│       └── .gitkeep               # Image assets directory
├── includes/
│   ├── config.php                 # App constants, DB details, session initiation
│   ├── db.php                     # PDO database connector singleton
│   ├── functions.php              # XSS escaping, CSRF, flash messaging, redirect
│   ├── auth.php                   # Staff authentication guard helpers
│   ├── header.php                 # Government top header & CSS imports
│   ├── sidebar.php                # Staff navigation drawer
│   └── footer.php                 # Footer layout & script imports
├── index.php                      # Root entry point & layout skeleton
├── package.json                   # Tailwind CSS build script & dependencies
├── tailwind.config.js             # Tailwind CSS theme configuration
├── HANDOVER.md                    # Project handover documentation
└── README.md                      # Quickstart guide
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
