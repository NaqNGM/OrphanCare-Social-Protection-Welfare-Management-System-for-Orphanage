# OrphanCare – Social Protection and Welfare Management System

**OrphanCare** is a web-based Social Protection and Welfare Management System developed for **Pertubuhan Kebajikan Anak-anak Yatim Islam Jasin (PKAYIDJ)**.

The system aims to simplify and improve the management of orphanage operations by providing a centralized platform for admission applications, guardian management and appointment scheduling.

This project is developed as part of the Diploma in Computer Science programme at Universiti Teknikal Malaysia Melaka (UTeM).

---

## Project Objectives

- Digitize the admission application process.
- Provide a convenient platform for guardians to submit applications and supporting documents.
- Allow guardians to check their application status.
- Help staff manage and review admission applications.
- Improve appointment scheduling and management.
- Reduce manual paperwork and improve information management.

## Features

### 1. Admission Application Management
- Submit online admission applications.
- Upload required supporting documents.
- Review and manage submitted applications.
- Approve or reject admission applications.

### 2. Guardian Management
- Create guardian accounts after successful admission approval.
- Secure guardian login and authentication.
- Manage guardian and child information.
- View application details and status.

### 3. Appointment Management
- Allow guardians to request appointments.
- Enable staff to manage appointment requests.
- View appointment details and schedules.

### 4. Staff Management
- Manage admission applications.
- Review submitted documents.
- Update application statuses.
- Manage guardian and appointment records.

---

## Technology Stack

| Technology | Purpose |
|---|---|
| HTML5 | Website structure |
| CSS3 | Website styling and layout |
| JavaScript | Client-side interactivity |
| PHP | Server-side development |
| MySQL | Database management |

## System Architecture

OrphanCare uses a **Three-Tier Architecture**:

1. **Presentation Layer** – HTML, CSS and JavaScript for the user interface.
2. **Application Layer** – PHP for processing requests, application logic and system operations.
3. **Database Layer** – MySQL for storing and managing system information.

## Installation and Setup

Follow these steps to run the project locally.

### Prerequisites

- [XAMPP](https://www.apachefriends.org/)
- Web browser (Google Chrome, Microsoft Edge, etc.)
- Code editor (Visual Studio Code recommended)

### Steps

1. Clone this repository:

   ```bash
   git clone https://github.com/NaqNGM/OrphanCare.git
   ```

2. Move the project folder into the XAMPP `htdocs` directory.

3. Start **Apache** and **MySQL** from the XAMPP Control Panel.

4. Open phpMyAdmin:

   ```text
   http://localhost/phpmyadmin
   ```

5. Create a new MySQL database and import the project's database SQL file.

6. Configure the database connection settings in the project configuration file.

7. Open the website in your browser:

   ```text
   http://localhost/OrphanCare
   ```

---

## Project Structure

The project may contain the following main components:

```
OrphanCare/
│
├── assets/             # Images, icons and other assets
├── css/                # Stylesheets
├── js/                 # JavaScript files
├── documents/            # Uploaded documents
├── database/           # Database SQL files
│
├── index.php           # Main landing page
├── login.php           # Login page
└── README.md            # Project documentation

---

## Project Scope

This system focuses on improving admission and welfare management processes for PKAYIDJ.

The system is designed to support guardians and staff through a centralized web platform. Admission decisions remain under the authority of PKAYIDJ staff.

**Important:** This project uses sample data for development and demonstration purposes. No real children's personal documents or confidential records should be uploaded to the demonstration system.

## Sustainable Development Goals (SDG)

**SDG 1 – No Poverty**

OrphanCare supports SDG 1, particularly Target 1.3, by contributing towards improved access to social protection and welfare management services.

## Development Team

**Diploma in Computer Science (DCS 2/1)**

Universiti Teknikal Malaysia Melaka (UTeM)

| No. | Team Member |
|---|---|
| 1 | Alia Najwa |
| 2 | Anis Athirah |
| 3 | Naqiuddin Hadif |
| 4 | Nur Aqilah |
| 5 | Ulfah Umairah |

## Project Supervisor

**Ts. Azlianor Binti Abdul Aziz**

## Project Status

<PRIVATE_STATUS> In Development

---

*OrphanCare – Improving Welfare Management Through Technology.*
