/* put this into phpMyAdmin to create the table*/
CREATE TABLE `users` (  
`UserID` INT(25) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`Name` VARCHAR(32) NOT NULL ,  
`Username` VARCHAR(65) NOT NULL ,  
`Password` VARCHAR(32) NOT NULL ,  
`Email` VARCHAR(255) NOT NULL  
)