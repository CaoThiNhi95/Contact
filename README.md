# Contact using PHP, MySQL

##Creat database: contact/table contactus: id, name, message, created_date
	CREATE TABLE contactus (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(30) NOT NULL,
            message TEXT NOT NULL,
            created_date DATE NOT NULL
           )


##copy folder contact => htdoc/ folder contact

##Turn on MAMP 

##ttp://localhost:8888/contact