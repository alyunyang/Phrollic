/* put this into phpMyAdmin to create the table*/
CREATE TABLE  `users` ( 
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `email` VARCHAR( 255 ) NOT NULL ,
 `name` VARCHAR( 120 ) NOT NULL ,
 `password` VARCHAR( 32 ) NOT NULL ,
 `session_id` VARCHAR( 32 ) NULL ,
 `date_registered` DATETIME NOT NULL ,
UNIQUE (
`email`
)
) ENGINE = MYISAM ;
