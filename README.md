# F3SimpleAjaxCRUD
This is a super simple contact list crud example using FatFree Framework (F3), MySQL and Ajax calls for CRUD operations.  I created this example because I found it difficult to find examples of using AJAX with F3 that were straight forward and easy to understand - at least for someone that wasn't super familiar with F3 or MVC design in general.  This should be fairly easy to follow for anyone wanting to understand how to handle routing and ajax calls in F3.

# Getting Started

This little sample was created to run on a local test setup (MAMP, WAMP, etc..)

1. Create a MySQL database and populate it using the db.sql script in the root of this project.
2. Edit the config/config.ini to reflect your MySQL db access information.  
3. Fire the app up in your browser.

#nginx notes
This sample app has a .htaccess file and is intended to run under apache server.  However, if you are using a server with nginx - you just have to make sure you have your conf file set up correctly.  There is lots of information out there about this - just google "f3 nginx configuration" or something similar.

Hope this helps!
