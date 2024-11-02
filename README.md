
# GlobalGiving-like Platform

This project is a web application built using Laravel 11, designed to mimic the functionality of GlobalGiving, a platform that connects nonprofits with donors and companies.  It allows nonprofits to create profiles, list projects, track donations, and submit reports. Donors can browse projects, make donations, and track their impact.

## Features

* **Nonprofit Management:** Nonprofits can register, create and manage organizational profiles, including their mission, programs, and staff information.
* **Project Listing:** Nonprofits can add projects with descriptions, goals, and fundraising progress.
* **Donation Tracking:**  The platform tracks donations made to each project.  (Currently placeholder data is used).
* **Reporting:** Nonprofits can submit reports on project progress. (Basic reporting functionality is implemented, but needs further development).
* **Project Browsing:** Donors can browse and search for projects based on various criteria (currently limited filtering).
* **Donation Processing:**  A simplified donation flow is implemented, but it doesn't integrate with a real payment gateway yet.  (Uses placeholder data).
* **User Authentication:**  Secure user registration and login for both nonprofits and donors.  (Donor registration currently redirects to the organization creation page).
* **Dashboard:**  Personalized dashboards for nonprofits to manage their organization and projects.


## Technologies Used

* **Laravel 11:**  PHP web framework.
* **Tailwind CSS:**  Utility-first CSS framework for styling.
* **Alpine.js:**  Minimal JavaScript framework for front-end interactions.
* **SQLite:** Default database (can be configured for other databases).
* **Vite:**  Frontend build tool.

## Installation

1. Clone the repository: `git clone https://github.com/your-username/globalgiving-clone.git`
2. Install dependencies: `composer install`
3. Configure the environment: Copy `.env.example` to `.env` and fill in the necessary details (database, mail, etc.).
4. Generate an application key: `php artisan key:generate`
5. Run database migrations: `php artisan migrate`
6. Seed the database (optional): `php artisan db:seed`
7. Start the development server: `php artisan serve`

## Future Development

* **Payment Gateway Integration:** Integrate with a payment gateway like Stripe or PayPal to process real donations.
* **Enhanced Search and Filtering:** Improve project browsing with more sophisticated search and filtering options.
* **Advanced Reporting:** Develop more comprehensive reporting features with visualizations and data analysis.
* **User Roles and Permissions:** Implement more granular user roles and permissions.
* **Notifications:** Add a notification system to keep users informed about donations, project updates, and reports.
* **Front-end Enhancements:**  Improve the user interface and user experience with more interactive elements.
* **Testing:** Expand the existing test suite to cover more features and edge cases.

## Contributing

Contributions are welcome!  Please feel free to submit pull requests or open issues.

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
