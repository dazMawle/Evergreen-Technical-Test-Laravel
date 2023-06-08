This is my **refactored Laravel** implementation of the task set by Evergreen for their technical test. I've folllowed the criteria set for me and used a Bootstrap form to accept new customer data (Company name, first/last name, contact number and full address). This data is then handled by my Laravel server and sent to MySQL. I then display the data by utilising Blade to loop over and display all records in my 'Customers' collection within a table. As part of the requirements for the task I have displayed a Google Map for each customer in the list. Each map thumbnail is a dynamically created static map based on each address attached to each customer. The map thumbnails are also links that will open up a new tab and take you to that address in Google Maps for a closer look if preferred. I have also made use of datatables.net for my table data which adds searchable functionality and pagination to the list of customers.

Technologies and packages utilised:

* PHP
* Laravel: with default packages out of the box...
* Bootstrap 
* TablePlus
* MySQL

Set up:

* In terminal/command line, cd into 'Evergreen-Technical-Test-Laravel-main/'

* Run 'composer install' to install dependencies

* Edit '.env' file with MySQL credentials

* Get TablePlus and connect it to your installed MySQL instance

* Get and provide a Google Maps API key (developers.google.com) and put that into your .env file as           GOOGLE_MAPS_API_KEY=**your-key-here**

* Run 'php artisan serve' and go to http://127.0.0.1:8000 in your browser

* [Demo video here:](https://drive.google.com/file/d/1CX7rPipWVCH27-o48hn4vr0xvlhN8oIW/view?usp=sharing)
