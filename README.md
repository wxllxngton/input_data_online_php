# Input Data Online PHP Project

This project is a simple web application for managing student details. It is built using PHP and utilizes MySQL for database storage. The project allows users to view and input student information through a web interface.

## Getting Started

These instructions will help you set up and run the project on your local machine.

### Prerequisites

-   PHP installed on your machine
-   MySQL or MariaDB server installed
-   [phpMyAdmin](https://www.phpmyadmin.net/) for database management

### Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/wxllxngton/input_data_online_php.git
    ```

2. Create a new database in phpMyAdmin, e.g., named `kca`.

3. Import the provided SQL file `database.sql` into your newly created database. You can find the SQL file in the `database` folder.

    - Open phpMyAdmin in your browser (http://localhost/phpmyadmin/).
    - Log in with your credentials.
    - Click on "Databases" and create a new database named `kca`.
    - Select the `kca` database.
    - Go to the "Import" tab.
    - Choose the `kca.sql` file in `databases`.
    - Click "Go" to import the database structure and initial data.

4. Update the database connection details in the PHP script.

    Open `index.php` and locate the following lines:

    ```php
    $connection = mysqli_connect('localhost', 'root');
    mysqli_select_db($connection, 'kca');
    ```

    Modify the connection parameters (`'localhost'`, `'root'`, `'kca'`) according to your local setup.

## Usage

1. Start a local server. You can use PHP's built-in server:

    ```bash
    php -S localhost:8000
    ```

2. Open a web browser and navigate to [http://localhost:8000](http://localhost:8000).

3. You should see the "Input Data Online PHP" web application. The connection status and data retrieval messages will be displayed.

4. Navigate to phpMyAdmin (http://localhost/phpmyadmin/) to manage and view the stored data.
