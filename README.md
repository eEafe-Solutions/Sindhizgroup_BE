## 2021S2_REG_WE_62
## Movie Ticket Booking System

### Group Details
| Student ID | Name                  | Username        |
|------------|-----------------------|-----------------|
| IT19164304 | A.R.D.Y.Y Ramanayake  |yasinduramanayake|
| IT19159454 | Fernando P.P.A        | Pubudi123       |
| IT19022116 | Prasad R.M            | MaduraPrasad    |

### Project Description
The project is a web-based movie ticket booking system that helps to manage bookings, theaters, movies, and users. 
The system can also be used for generating essential reports regarding bookings, theaters, movies, and users details.

### Technologies
As for the main technology the system is developed Vue js and Laravel 8. 
Azure Boards is used for planning and managing the project, Git and GitHub for version control management, 
SonarQube for continuous inspection of code quality, and Selenium for testing the system functionalities and interfaces.

### Getting Started
#### Prerequisite
* [Git](https://git-scm.com/downloads) installed
* [Node](https://nodejs.org/en/download/) and [NPM](https://nodejs.org/en/download/) installed
* Xampp (https://www.apachefriends.org/download.html)

#### Setting up the Backend
* Clone the [project](https://github.com/yasinduramanayake/MovieApp-backend). &#8594; `git clone https://github.com/yasinduramanayake/MovieApp-backend`
* To generate depedencies in vendor folder. &#8594; `composer install`
* Setup environment variables
   * change `.env.example` to `.env` file in the root directory.
* Generate Key
   * run `.php artisan key:generate`
* Setup database
   * Open the file `.env` Edit values to match your database.Add empty database using phpmyadmin.Include that name in the DB_DATABASE
* Get Tables
   * run `.php artisan migrate`
* Get default/initial/dummy table values
   * run `.php artisan db:seed --class=UserSeeder`

to Run the project\
   * `php artisan serve`


#### Setting up the Frontend
* Clone the [project](https://github.com/yasinduramanayake/MovieApp-frontend). &#8594; `git clone https://github.com/yasinduramanayake/MovieApp-frontend`
* Install the dependencies with NPM. &#8594; `npm i`
* Available scripts
   * `npm run serve`\
Runs the app in the development mode.\
Open [http://localhost:8000](http://localhost:8000) to view it in the browser.
   * `npm run build`\
Builds the app for production to the `build` folder.
