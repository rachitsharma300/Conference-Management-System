# <h1>Conference Management System</h1>
# <p>Technologies - HTML, CSS, JavaScript, PHP, SQL</P>
<pre>
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||                    
||                      <h1> <--- FLOW DIAGRAM FOR CONFERENCE MANAGEMENT SYSTEM ---></h1>                  ||                                                                                    
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
