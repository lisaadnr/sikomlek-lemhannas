# sikomlek-lemhannas
Website Inventory Hardware Bagian Komputer dan Elektronika

## Introduction
This project is a web-based inventory system for managing hardware in the Komputer dan Elektronika division.

## Features
- Add and manage hardware items
- Track inventory levels
- Generate reports

## Installation
To install and run this project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/lisaadnr/sikomlek-lemhannas.git
   ```
2. Navigate to the project directory:
   ```bash
   cd sikomlek-lemhannas
   ```
3. Install the dependencies:
   ```bash
   composer install
   npm install
   ```
4. Copy the `.env.example` file to `.env` and update the environment variables:
   ```bash
   cp .env.example .env
   ```
5. Generate the application key:
   ```bash
   php artisan key:
   ```
6. Run the database migrations:
   ```bash
   php artisan migrate
   ```
7. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage
To use the system, navigate to `http://localhost:8000` in your web browser after starting the development server.

## Contributing
If you would like to contribute to this project, please fork the repository and create a pull request.

## License
This project is licensed under the MIT License.

## Contact
For any questions or inquiries, please contact the maintainer at elisabunga63@gmail.com.
