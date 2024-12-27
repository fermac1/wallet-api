# WALLET MANAGEMENT SYSTEM

## Introduction
This Laravel application allows users to manage multiple wallets. Each wallet has a type with its own name, minimum balance, and monthly interest rate. 
The system supports sending and receiving money between wallets.

## Features
- User Management: Users can have multiple wallets.
- Wallet Types: Each wallet type has a name, minimum balance, and monthly interest rate.
- Transactions: Wallets can send and receive money to/from other wallets.

## Requirements
- PHP >= 8.0
- Laravel >= 9.x
- MySQL or compatible database

## Installation
To install and set up the application, follow these steps:
1. Clone the repository from GitHub.
2. Run `composer install` to install the project dependencies.
3. Copy the `.env.example` file to `.env` and configure your database connection.
4. Run `php artisan key:generate` to generate a new application key.
5. Run `php artisan migrate` to create the necessary tables in the database.
6. Run `php artisan db:seed` to populate the database with the seeders.
7. Start the development server by running `php artisan serve`.


## Testing
To test the API endpoints, you can use tools like Postman:
1. Import the Postman collection provided in the repository.
2. Send requests to the endpoints with the required parameters.
3. Verify the responses to ensure the API is functioning correctly.


### Conclusion

This design provides a solid foundation for an application where users can manage multiple wallets with different types and balances. The API allows for basic actions like getting user and wallet information, as well as transferring money between wallets.

