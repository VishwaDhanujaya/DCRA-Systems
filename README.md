# 🏛️ Department of Christian Religious Affairs — Central E-Services Portal

Welcome to the central repository for the digital e-services systems of the **Department of Christian Religious Affairs (DCRA)** under the Government of Sri Lanka. 

This repository hosts a unified portal dashboard serving as the entry point for staff to access and manage the six core department workspaces.

---

## 📂 Project Architecture & Modules

The portal is structured as a main landing dashboard that routes administrators and staff members to six specialized sub-systems. Each system functions as an independent module.

### Core Systems Directory

| System Code | Module Workspace Folder | System Name | Description | Color Theme |
| :--- | :--- | :--- | :--- | :--- |
| **SYS-01** | [`ChurchReg/`](file:///c:/xampp/htdocs/DCRA/ChurchReg/) | **Church Registration Management** | Official registration of churches, religious places of worship, governing bodies, trustees, and legal archives. | Maroon (`#4E0000`) |
| **SYS-02** | [`PriestCert/`](file:///c:/xampp/htdocs/DCRA/PriestCert/) | **Priesthood Identity & Passport Cert** | Issuance and verification of priesthood certificates, clergy identity authentication, and passport clearance. | Maroon (`#4E0000`) |
| **SYS-03** | [`VisaRecommend/`](file:///c:/xampp/htdocs/DCRA/VisaRecommend/) | **Visa Recommendation System** | Processing entry, resident, and extension visa recommendation letters for missionary clergy & foreign dignitaries. | Maroon (`#4E0000`) |
| **SYS-04** | [`ChurchRenovation/`](file:///c:/xampp/htdocs/DCRA/ChurchRenovation/) | **Church Renovation Information** | Project tracking, renovation grant requests, technical site inspections, and structural restoration. | Navy Blue (`#13273F`) |
| **SYS-05** | [`MedicalLetter/`](file:///c:/xampp/htdocs/DCRA/MedicalLetter/) | **Free Medical Letter Issuing** | Formal medical treatment recommendation letters and state healthcare assistance for ordained clergy. | Navy Blue (`#13273F`) |
| **SYS-06** | [`BungalowBooking/`](file:///c:/xampp/htdocs/DCRA/BungalowBooking/) | **Thalawila Pilgrim House Booking** | Reservation and booking management for Thalawila Shrine Pilgrim House, guest quarters, and retreat facilities. | Navy Blue (`#13273F`) |

---

## 🛠️ Technology Stack

* **Backend**: Pure PHP (PDO MySQL, strict typing, session-based security, CSRF protection).
* **Frontend**: HTML5, CSS3, Tailwind CSS (using Tailwind CSS configurations inside specific modules).
* **Typography**: Montserrat (for headings) & Inter (for body text).
* **Icons**: Inline SVG graphics (tailored per module).
* **Assets**: Shared logos, official state emblems, and stylesheets located in the [`assets/`](file:///c:/xampp/htdocs/DCRA/assets/) folder.

---

## 🎨 Theme Tokens & Design Guidelines

Each row of systems on the portal follows a distinct visual identity defined by Sri Lankan government/ecclesiastical color codes:

### 1. Upper Row Systems (SYS-01, SYS-02, SYS-03)
* **Primary Color (Maroon)**: `#4E0000`
* **Tailwind classes**: `bg-[#4E0000]`, `text-[#4E0000]`, `border-[#4E0000]/20`

### 2. Lower Row Systems (SYS-04, SYS-05, SYS-06)
* **Secondary Color (Navy Blue)**: `#13273F`
* **Tailwind classes**: `bg-[#13273F]`, `text-[#13273F]`, `border-[#13273F]/20`

### 3. Accents
* **Accent Gold**: `#D4AF37`
* **Neutral Background**: `#FDFBF9` (Slightly warm white)

---

## 🚀 Local Development Setup (XAMPP)

Follow these steps to run the DCRA Central Portal locally on your machine:

### Prerequisites
1. **XAMPP Control Panel** (Apache & MySQL).
2. **Git** configured on your local machine.

### Installation Steps

1. **Clone the repository** to your local XAMPP `htdocs` directory:
   ```bash
   cd c:\xampp\htdocs
   git clone https://github.com/VishwaDhanujaya/DCRA-Systems.git DCRA
   ```

2. **Start Services**:
   Open XAMPP Control Panel and start **Apache** and **MySQL**.

3. **Access the Portal**:
   Open your browser and navigate to:
   ```
   http://localhost/DCRA/
   ```

### Working on Sub-Modules (e.g., Visa Recommendation)
If you are developing inside subfolders that use local node modules (like [`VisaRecommend/`](file:///c:/xampp/htdocs/DCRA/VisaRecommend/)):
1. Navigate to the module directory:
   ```bash
   cd VisaRecommend
   ```
2. Install npm dependencies:
   ```bash
   npm install
   ```
3. Run the CSS builder watcher to compile custom styles:
   ```bash
   npm run watch:css
   ```
