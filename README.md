# younginnovatonsoln
Solution of given task

Total Files: 11
Files: 
	1)index.php
	2)contracts.php
	3)awards.php
	4)final.php
	5)combines.php
	6)act.php
	7)contracts.csv
	8)awards.csv
	9)connect_db.php
	10)younginnovation(1).sql
	11)README.txt

------------Process of running the script, with installation/setup-------------

1. Please install XAMPP in you do not have it in your computer.
2. Create a root folder(eg: younginnovationsoln) inside htdocs folder and copy all the 11 files inside the folder.
3. Run XAMPP and start the modules Apache and MySQL
4. Then import the database file younginnovation(1).sql in your localhost/phpmyadmin.
5. Now if your root folder is "younginnovationsoln" enter "localhost/younginnovationsoln" in your browser and you will see a page which allows you to read and upload Contracts CSV and Awards CSV files.
6. Click the buttons "Upload Contracts CSV" and "Upload Awards CSV" to upload the CSV files to the database.
7. After uploading the CSV files, Click on the link "Combine contracts.csv and awards.csv". This will read the two files "contracts.csv" and "awards.csv" and output data-combined file "final.csv" and redirects you to a page final.php
8. final.php will read the output file "final.csv" and prints Total Amount of current contracts
9. Thank you


