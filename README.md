## Introduction
This is a simple wallet application that allows users to have multiple wallets, with each wallet associated with a specific wallet type. Each wallet type defines properties like its name, minimum balance and monthly interest rate. Users can send and receive money from other wallets, enabling simple financial transactions.

## 1. Installation
To install and set up the application, follow these steps:
1. Clone the repository from GitHub.
2. Run `composer install` to install the project dependencies.
3. Copy the `.env.example` file to `.env` and configure your database connection.
4. Run `php artisan key:generate` to generate a new application key.
5. Run `php artisan migrate` to create the necessary tables in the database.
6. Start the development server by running `php artisan serve`.

## 2. Database Migration
To run database migrations and create the necessary tables, use the following command:

php artisan migrate


## 3. Endpoints
### GET /users
- Description: Retrieve all users in the system.
- Parameters: None
- Response: JSON array of user objects.

### GET /wallets
- Description: Retrieve all wallets in the system.
- Parameters: None
- Response: JSON array of wallet objects.

### GET /wallets/{wallet_id}
- Description: Retrieve a specific wallet's details.
- Parameters: wallet_id (integer)
- Response: JSON object with wallet details including owner, type, and available balance.

### POST /transactions
- Description: Send money from one wallet to another.
- Parameters: sender_wallet_id (integer), receiver_wallet_id (integer), amount (decimal)
- Response: JSON object confirming the transaction.

## 4. Testing
To test the API endpoints, you can use tools like Postman:
1. Import the Postman collection provided in the repository.
2. Send requests to the endpoints with the required parameters.
3. Verify the responses to ensure the API is functioning correctly.
