<!-- to run the file in windows -->

<!-- step -1 install xampp -->

Install xampp from official website `https://www.apachefriends.org/` 

<!-- step-2 creating folder and installing it into xampp -->
create a new folder `travel_website` in `C:\xampp\htdocs` location and paste all the files in  `travel_website` folder.


<!-- step-3 run the apache server and sql databse -->
start `Apache` and `MySQL` from xampp application 

<!-- step -4 run the html file  -->
for running the project, use following url:
    `http://localhost/travel_website/home.html`

from here we can access the project html root file



<!-- step-5 create database and travel details table for this use this command line -->

1. after running both services go to `http://localhost/phpmyadmin/` there we can see the `SQL` tab
2. after clicking on tab use below command: 
                    CREATE DATABASE travel_db;
                    USE travel_db;
                    CREATE TABLE travel_details (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        destination VARCHAR(255) NOT NULL,
                        people_count INT NOT NULL,
                        arrival_date DATE NOT NULL,
                        leaving_date DATE NOT NULL,
                        user_details TEXT
                    );

3. Now we have successfully created database and table and we can use the project.

Using these steps we are good to go.
