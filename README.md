# Conference Management System

This is a web application for managing conferences, where users can register for conferences, view schedules, and submit feedback. Admins can manage conference details and registration.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Features

1. **User Registration**
2. **Conference Management**
3. **Feedback Submission**
4. **Schedule Viewing**
5. **Login Authentication**

## Prerequisites

1. [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](http://www.wampserver.com/en/) for local server setup
2. [Git](https://git-scm.com/) for version control
3. [Composer](https://getcomposer.org/) for dependency management

## Setup Instructions

### 1. Clone the Repository
# File Structure
conference-management-system/
│
├── admin
│   └── conference_management.php
│   └── admin.php
|   └── logout.php
├── index.html
├── register.php
├── script.js
├── submit_feedback.php
├── get_schedule.php
├── get_conferences.php
└── db.php
└── styles.css


<pre>
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||                    
||                           <--- FLOW DIAGRAM FOR CONFERENCE MANAGEMENT SYSTEM ---><                      ||                                                                                    
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||


||||||||||||||||||||||||||               ||||||||||||||||||||||||||               |||||||||||||||||||||||||||
||          ID          ||               ||            ID        ||               ||          ID           ||
||       USERNAME       ||               ||          TITLE       ||               ||        USER_ID        ||
||         EMAIL        ||               ||       DESCRIPTION    ||               ||     CONFERENCE_ID     ||
||       PASSWORD       ||               ||           DATE       ||               ||       COMMENTS        ||
||||||||||||||||||||||||||               ||||||||||||||||||||||||||               |||||||||||||||||||||||||||
            ||                                        ||                                          ||
            ||                                        ||                                          ||
            ||                                        ||                                          ||
            ||                                        ||                                          ||
||||||||||||||||||||||||||               ||||||||||||||||||||||||||               |||||||||||||||||||||||||||  
||         USERS        ||               ||     CONFERENCES      ||               ||       FEEDBACK        ||                                      
||||||||||||||||||||||||||               ||||||||||||||||||||||||||               |||||||||||||||||||||||||||
            ||                                        ||                                          ||        
            ||                                        ||                                          ||        
            ||                                        ||                                          ||        
            ||                                        ||                                          ||        
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||                                                 CONFERENCE_MANAGEMENT                                   ||
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                                                      ||                                                      
                                                      ||                                                   
                                                      ||                                                    
                                                      ||                                                    
                  |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||                   
                  ||                          XAMPP SERVER                             ||                   
                  |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||                   
                                                      ||                                                    
                                                      ||                                                    
                                                      ||                                                        
                                                      ||                                                    
                  |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||                    
                  ||                             DB.PHP                                ||                   
                  |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||                   
                                                      ||                                                    
                                                      ||                                                     
                                                      ||                                                    
                                                      ||                                                    
                  |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||                   
                  ||                           BACK_END                                ||                   
                  |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||                   
                                                      ||                                                    
                                                      ||                                                    
                                                      ||                                                    
                                                      ||                                                    
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||       --PHP SCRIPT--            ||      --JAVASCRIPT--               ||     --DISPLAY SECTIONS--        ||
||                                 ||                                   ||                                 ||
|| -> Add Conference Form          || ->Fetch get_conference.php        || ->Conference Schedule Display   ||
|| -> Update Conference Form       || ->Fetch get_schedule.php          || ->Feedback Display              ||
|| -> Delete Conference Form       || ->Ajax form Submission            ||                                 ||
|| -> Feedback Submission Form     ||                                   |                                  ||
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                                                      ||
                                                      ||                                                    
                                                      ||
                                                      ||
                  |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||                   
                  ||                            FRONT_END                              ||
                  |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                                                      ||
                                                      ||                                                    
                                                      ||
                                                      ||                                                    
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||      --HTML FORM--             ||     --JAVASCRIPT--              ||     --DISPLAY SECTIONS--           ||
||                                ||                                 ||                                    ||
|| -> Add Conference Form         || ->Fetch get_conference.php      || ->Conference Schedule Display      ||
|| -> Update Conference Form      || ->Fetch get_schedule.php        || ->Feedback Display                 ||
|| -> Delete Conference Form      || ->Ajax form Submission          ||                                    ||
|| -> Feedback Submission Form    ||                                 ||                                    ||
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
</pre>


```sh
git clone https://github.com/yourusername/conference-management-system.git
cd conference-management-system
