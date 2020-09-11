#Academy management

instructions -

Step 1. Database creation - 
			create a database naming "school" and import school.sql file from model. (added in school.zip)
Step 2. Login details - (can check from db)
			Admin 
				id - 000
 				username - admin
				password - admin
			student 
				id - 111		
				username - aaa	
				password - aaa
			
			find more from db

Code details -

	controller/login.php - runs login page for admin & student

	model/valiation.php - verifies user login data and redirects student to student page and admin to admin page

	controller/adminshow.php - shows students info table where admin can edit and remove data and add result 

	model/edit.php - runs update data query for adminshow.php

	model/del.php - runs delete data of adminshow.php

	controller/adminwork.php - inserts new student data for adminshow.php 

	model/insert.php - runs insertion query for adminwork.php
	
	controller/adminshow2.php - shows students result table where admin can edit and remove data 
	
	model/edit2.php - runs update data query for adminshow2.php

	model/del2.php - runs delete data of adminshow2.php

	controller/adminwork2.php - shows student list to select the student for adding result
	
	controller/submitresult.php - inserts new result for adminshow2.php 

	model/insert2.php - runs insertion query for submitresult.php

	controller/show.php - shows student info for student login

	model/edit3.php - runs update data query for show.php

 	model/utility.php - checks session and cookies are available or not. if not available redirects user to login page 
	
	controller/logout.php - runs session destroy command and reset cookies 
	
