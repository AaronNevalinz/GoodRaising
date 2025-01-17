# GoodRaising Platform Documentation

## Introduction

This project is a web application built using Laravel 11, designed to mimic the functionality of GoodRaising, a platform that connects nonprofits with donors and companies. It allows nonprofits to create profiles, list projects, track donations, and submit reports. Donors can browse projects, make donations, and track their impact.

## Main Features

- **Nonprofit Management:** Nonprofits can register, create, and manage organizational profiles, including their mission, programs, and staff information.
- **Project Listing:** Nonprofits can add projects with descriptions, goals, and fundraising progress.
- **Donation Tracking:** The platform tracks donations made to each project.
- **Reporting:** Nonprofits can submit reports on project progress.
- **Project Browsing:** Donors can browse and search for projects based on various criteria.
- **Donation Processing:** A simplified donation flow is implemented.
- **User Authentication:** Secure user registration and login for both nonprofits and donors.
- **Dashboard:** Personalized dashboards for nonprofits to manage their organization and projects.

## Installation Instructions

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and npm
- MySQL

### Steps

1. Clone the repository:
    ```bash
    git clone https://github.com/aaronnevalinz/goodraising.git
    ```
2. Navigate to the project directory:
    ```bash
    cd goodraising
    ```
3. Install dependencies:
    ```bash
    composer install
    npm install
    ```
4. Configure the environment:
    ```bash
    cp .env.example .env
    ```
    Fill in the necessary details in the .env file (database, mail, etc.).
5. Generate an application key:
    ```bash
    php artisan key:generate
    ```
6. Run database migrations:
    ```bash
    php artisan migrate
    ```
7. Seed the database (optional):
    ```bash
    php artisan db:seed
    ```
8. Start the development server:
    ```bash
    php artisan serve
    ```

## Project Structure

### Key Directories and Files

- **app/:** Contains the core application code, including controllers, models, and policies.
- **bootstrap/:** Contains the application bootstrap files.
- **config/:** Contains configuration files.
- **database/:** Contains database migrations, seeders, and factories.
- **public/:** Contains the entry point for the application and public assets.
- **resources/:** Contains views, JavaScript, and CSS files.
- **routes/:** Contains all route definitions.
- **storage/:** Contains logs, compiled Blade templates, file uploads, and other storage.
- **tests/:** Contains test cases.
- **vendor/:** Contains Composer dependencies.

## Backend Documentation

### Key Routes

- **Web Routes:** Defined in web.php
- **API Routes:** Not applicable in this project.

### Controllers

- **AdminController:** Manages admin-related functionalities.
- **AuthController:** Handles user authentication.
- **DonationController:** Manages donations.
- **OrgController:** Manages nonprofit organizations.
- **ProjectController:** Manages projects.
- **ReportController:** Manages project reports.
- **WebController:** Handles public-facing pages.

### Services

- **AppServiceProvider:** Registers and bootstraps application services.

### Database Schema

#### Tables

- **users:** Stores user information.
- **orgs:** Stores nonprofit organization information.
- **projects:** Stores project information.
- **donations:** Stores donation records.
- **reports:** Stores project reports.

#### Relationships

- **User:** Has one organization.
- **Organization:** Has many projects and donations.
- **Project:** Belongs to an organization and has many reports.
- **Donation:** Belongs to an organization.
- **Report:** Belongs to a project.

## Frontend Documentation

### Components

- **Blade Templates:** Located in views
- **CSS:** Managed with Tailwind CSS, located in app.css
- **JavaScript:** Managed with Vite, located in app.js

### Key Features

- **Responsive Design:** Utilizes Tailwind CSS for responsive design.
- **Interactive Elements:** Uses Alpine.js for interactivity.

## API Documentation

### Endpoints

- **GET /projects:** Lists all projects.
- **POST /donate/{project}:** Creates a donation for a project.
- **GET /reports:** Lists all reports.

### Request/Response Examples

- **GET /projects**
  ```json
  [
     {
        "id": 1,
        "title": "Project Title",
        "funding_goal": 10000,
        "org_id": 1,
        "project_summary": "Summary of the project",
        "theme": "Education",
        "project_location": "Uganda",
        "cover_img": "path/to/image.jpg"
     }
  ]
  ```
- **POST /donate/{project}**
  ```json
  {
     "amount": 100,
     "full_name": "John Doe",
     "email": "john@example.com",
     "phone": "1234567890"
  }
  ```

## Authentication & Authorization

### User Authentication

- **Registration:** Users can register via the registration form.
- **Login:** Users can log in using their email and password.
- **Middleware:** Routes are protected using the `auth` middleware.

### Permissions

- **Admin:** Has access to admin functionalities.
- **Nonprofit:** Can manage their organization, projects, and donations.

## Deployment Instructions

### Steps

1. Set up a server with PHP, Composer, and a web server (e.g., Apache or Nginx).
2. Clone the repository to the server.
3. Set up the environment variables in the .env file.
4. Install dependencies:
    ```bash
    composer install
    npm install
    npm run build
    ```
5. Run database migrations:
    ```bash
    php artisan migrate --force
    ```
6. Set up a cron job for Laravel's scheduler:
    ```bash
    php /path/to/artisan schedule:run >> /dev/null 2>&1
    ```
7. Configure the web server to serve the application.

## Usage Instructions

### For Nonprofits

1. Register and create an organization profile.
2. Add projects with descriptions and fundraising goals.
3. Track donations and submit reports on project progress.

### For Donors

1. Browse projects and select a project to donate to.
2. Complete the donation form and submit.
3. Track the impact of your donations through project updates.

## Troubleshooting & FAQ

### Common Issues

- **Database Connection Error:** Ensure the database credentials in the .env file are correct.
- **File Permission Issues:** Ensure the storage and cache directories are writable.

### Tips for Debugging

- Use Laravel's built-in debugging tools like `dd()` and `dump()`.
- Check the logs in the logs directory for error messages.

## Contributors & License

- **Developer:** Aaron Ogwal
- **Contact:** aaron.nevalinz421@gmail.com
- **Phone:** +256777306662
- **WhatsApp:** +256755004133