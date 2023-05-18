# SIM-iLab

SIM-iLab is a web application for laboratory inventory management. It is built using the Laravel framework to provide an efficient and user-friendly solution for tracking item conditions, managing item borrowing, and facilitating item returns.

## Installation

To get started with SIM-iLab, follow the steps below:

1. Install the required dependencies by running the following command:
```composer install --ignore-platform-req=ext-gd```

2. Generate a unique application key by running the following command:
```php artisan key:generate```

3. Migrate the database tables and seed them with initial data by running the following command:
```php artisan migrate --seed```

4. Ignite the App:
```php artisan serve```


## Users

SIM-iLab includes different user levels with their respective credentials:

**Administrator Level**
- Username: admin
- Password: 12345

**Officer Level**
- Username: petugas
- Password: 12345

**Staff Level**
- Username: pegawai
- Password: 12345

You can use these credentials to log in and explore the SIM-iLab application.


