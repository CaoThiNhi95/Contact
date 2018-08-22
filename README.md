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

# Signin using PHP, MySQL

##Creat database: database contact/table menber: 

        CREATE TABLE menber (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(30) NOT NULL,
            name_hiragana VARCHAR(30) NOT NULL,
            address_province VARCHAR(255) NOT NULL,
            address VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL
           )
    
##copy folder  => htdoc/ folder signin

##Turn on MAMP 

##http://localhost:8888/contact/signin.php