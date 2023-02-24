<p align="center"><img src="https://user-images.githubusercontent.com/79900070/221207139-a48d356d-2b50-46f1-b697-eb6e39912858.png"></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Medic App
Medic App is a web-based application built using the Laravel framework and following the Model-View-Controller (MVC) structural design pattern. The app provides a platform for managing Covid-19 patient records, preventing data duplication, and minimizing data loss. The application supports multi-authentication roles and provides a user-friendly interface for managing the system.

## Features
* User Authentication - supports multiple authentication roles.
* Manage Patients - CRUD operations to manage patients' records.
* Prevent Data Duplication - The system checks for existing patient data to avoid duplication.
* Minimize Data Loss - The system ensures data integrity by validating and sanitizing input data before saving it in the database.


## Requirements
* PHP version v8.2.2
* Composer
* Laravel Framework v9.51.0


## Installation
1. Clone the repository:
`git clone https://github.com/Yowezy/MedicApp-Multi-Authentication.git`
2. Change into the project directory: 
`cd medic-app`
3. Install dependencies:
`composer install`
4. Create a copy of the .env.example file and rename it to .env:
`cp .env.example .env`
5. Generate a new application key: 
`php artisan key:generate`
6. Create a new database and update the .env file with your database credentials:
```.env DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
7. Run migrations: 
`php artisan migrate`
8. Seed the database:
`php artisan db:seed` 
9. Start the server:
`php artisan serve`


The application has two types of users: admin and medical staff.

## Admin User
The admin user can manage all hospitals' patient records, view all records, create new records, update existing records, and delete records. The admin can also assign roles to users to make them admins.

## Medical Staff User
The medical staff user can view patient records for their assigned hospital, create new records, update existing records, and delete records for their assigned hospital.

## Contributing
Contributions are welcome! Please follow the following steps to contribute:

1. Fork the repository.
2. Create a new branch for your changes.
3. Make your changes and commit them with a descriptive commit message.
4. Push your changes to your forked repository.
5. Create a pull request to the original repository.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

