# MELI - Majdouie E-Learning Institute

A comprehensive Learning Management System (LMS) built with Laravel, designed to manage educational programs, courses, certifications, and student enrollment for the Majdouie E-Learning Institute.

## 📱 Showcase

### Desktop View

[Home - Desktop View](public/assets/images/showcase/home-desktop.png)

### Mobile View

[Home - Mobile View](public/assets/images/showcase/home-mobile.png)

## 🚀 Features

### Multi-Portal System

-   **Website Portal** - Public-facing website for browsing programs and applying for admission
-   **Student Portal** - Student dashboard for course management and learning
-   **Instructor Portal** - Interface for instructors to manage courses and students
-   **System Admin Portal** - Administrative backend for system management

### Core Functionality

-   **Program Management** - Organize courses into categories and certification programs
-   **Course Catalog** - Browse and search available courses with detailed information
-   **Certification Programs** - Structured learning paths with course requirements
-   **Student Enrollment** - Online application and admission process
-   **Academic Calendar** - Track important dates and events
-   **Contact Management** - Inquiry and communication system

## 🏗️ Project Structure

```
├── app/
│   ├── Console/           # Artisan commands
│   ├── Exceptions/        # Exception handlers
│   ├── Helpers/          # Custom helper functions
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── StudentControllers/    # Student portal controllers
│   │   │   └── WebsiteControllers/    # Website controllers
│   │   └── Middleware/    # HTTP middleware
│   ├── Models/
│   │   ├── StudentModels/ # Student-related models
│   │   └── WebsiteModels/ # CMS and course models
│   └── Providers/         # Service providers
├── database/
│   ├── migrations/        # Database migrations
│   └── seeders/          # Database seeders
├── public/
│   └── assets/
│       ├── css/websiteCss/    # Website stylesheets
│       ├── images/            # Image assets
│       └── js/website/        # Frontend JavaScript
├── resources/
│   └── views/
│       ├── website-views/     # Website templates
│       ├── student-views/     # Student portal views
│       ├── instructor-views/  # Instructor portal views
│       └── sysadmin-views/   # Admin portal views
└── routes/
    ├── web.php           # Website routes
    ├── student.php       # Student portal routes
    ├── instructor.php    # Instructor portal routes
    └── sysadmin.php     # Admin portal routes
```

## 🛠️ Technology Stack

-   **Framework**: Laravel 9.x
-   **Frontend**: Blade Templates, Bootstrap 5
-   **Database**: MySQL
-   **Authentication**: Laravel Sanctum
-   **Asset Bundling**: Vite

## 📦 Installation

### Prerequisites

-   PHP >= 8.0
-   Composer
-   Node.js & NPM
-   MySQL >= 5.7

### Setup Steps

1. **Clone the repository**

```bash
git clone https://github.com/AbdulazizBaHaj/meli-system.git
cd meli-system
```

2. **Install PHP dependencies**

```bash
composer install
```

3. **Install Node dependencies**

```bash
npm install
```

4. **Environment configuration**

```bash
cp .env.example .env
```

Edit `.env` file and configure your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. **Generate application key**

```bash
php artisan key:generate
```

6. **Run migrations**

```bash
php artisan migrate
```

7. **Seed the database** (optional)

```bash
php artisan db:seed
```

8. **Build assets**

```bash
npm run build
# or for development
npm run dev
```

9. **Start the development server**

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 🗄️ Database Structure

### Main Tables

-   `ppl_tbstudent` - Student information
-   `dbk_cur_tbcategory` - Course categories
-   `dbk_cur_tbsubcategory` - Course subcategories
-   `dbk_cur_tbcourse` - Course details
-   `dbk_cur_tbcoursecategory` - Course-category relationships
-   `dbk_cur_tbcertification` - Certification programs
-   `dbk_cur_tbcertificationcourse` - Certification-course relationships
-   `cms_general` - General CMS content
-   `cms_categoryprogram` - Category program content
-   `cms_certificationprogram` - Certification program content

## 🎨 Key Pages

### Website

-   **Home** (`/`) - Landing page with featured programs
-   **Programs** (`/program`) - Browse all programs
-   **Program Details** (`/program-view/{id}`) - Detailed program information
-   **Calendar** (`/calendar`) - Academic calendar
-   **Contact** (`/contact-us`) - Contact form
-   **Admission** (`/admission-apply`) - Online application

### Portals

-   **Student Portal** (`/student`) - Student dashboard
-   **Instructor Portal** (`/instructor`) - Instructor dashboard
-   **System Admin** (`/sysadmin`) - Administrative interface

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is proprietary software developed for Majdouie E-Learning Institute.

---

**Developed for Majdouie E-Learning Institute** | Powered by Laravel
