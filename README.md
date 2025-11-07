# RabbitSchool - Laravel Multi-Auth System

A sophisticated multi-role authentication system built with Laravel, featuring role-based access control using Spatie Permissions. This system provides separate dashboards for Students, Lecturers, and Administrators with smart redirects based on user roles.

## Features

- 🔐 **Unified Authentication System**
  - Single login form for all user types
  - Role-based automatic redirects after login
  - Secure password hashing and validation

- 👥 **Multiple User Roles**
  - Admin Dashboard
  - Lecturer Dashboard
  - Student Dashboard

- 🛡️ **Role-Based Access Control**
  - Powered by Spatie Permissions
  - Route protection using middleware
  - Role-specific navigation and features

- 🎨 **Modern UI**
  - Clean and responsive design using Tailwind CSS
  - Separate layouts for authenticated and guest users
  - Role-specific navigation menus

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL or compatible database

## Packages

### Main Dependencies

- **Spatie Laravel Permission** (`^6.23`) - Role and permission management

### Development Dependencies

- **Laravel Breeze** (`^2.3`) - Authentication scaffolding

## Installation

1. Clone the repository

    ```bash
    git clone https://github.com/rabbitmaid/school_multi_auth.git
    cd school_multi_auth
    ```

1. Install PHP dependencies

    ```bash
    composer install
    ```

1. Install and build frontend assets

    ```bash
    npm install
    npm run build
    ```

1. Configure environment

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

1. Configure your database in `.env` file

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

1. Run migrations and seeders

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

## Default Users

After seeding, the following demo users will be available:

- **Admin User**
  - Email: `admin@example.com`
  - Password: `password`

- **Lecturer User**
  - Email: `lecturer@example.com`
  - Password: `password`

- **Student User**
  - Created upon registration
  - New registrations are assigned the student role by default

## Project Structure

### Key Directories

```plaintext
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── Dashboard/    # Role-specific dashboard controllers
│   │   └── Requests/         # Form requests and validation
│   ├── Models/
│   └── Services/
│       └── RoleRedirectService.php  # Handles role-based redirects
├── routes/
│   ├── admin.php       # Admin routes
│   ├── lecturer.php    # Lecturer routes
│   ├── student.php     # Student routes
│   └── auth.php        # Authentication routes
└── resources/
    └── views/
        ├── dashboard/  # Role-specific dashboard views
        └── layouts/    # Blade layout templates
```

### Routes

- `/login` - Unified login page
- `/register` - Registration page (creates student accounts)
- `/admin/dashboard` - Admin dashboard
- `/lecturer/dashboard` - Lecturer dashboard
- `/student/dashboard` - Student dashboard

## Security

- Authentication uses Laravel's built-in features
- Role-based middleware protection for routes
- CSRF protection enabled
- Password hashing using bcrypt
- Rate limiting on authentication attempts

## Contributing

1. Fork the repository
1. Create your feature branch
1. Commit your changes
1. Push to the branch
1. Create a new Pull Request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
