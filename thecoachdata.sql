#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE `theCoach`;
USE `theCoach`;

#------------------------------------------------------------
# Table: iNZ25_programmes
#------------------------------------------------------------

CREATE TABLE `iNZ25_programmes`(
        `id`  Int NOT NULL ,
        `name` Varchar (50) NOT NULL
	,CONSTRAINT `iNZ25_programmes_PK` PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_sports
#------------------------------------------------------------

CREATE TABLE `iNZ25_sports`(
        `id`  Int NOT NULL ,
        `name` Varchar (50) NOT NULL
	,CONSTRAINT `iNZ25_sports_PK` PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_departement
#------------------------------------------------------------

CREATE TABLE `iNZ25_departement`(
        `id`    Int NOT NULL ,
       `number` Varchar (50) NOT NULL ,
        `name`   Varchar (155) NOT NULL
	,CONSTRAINT `iNZ25_departement_PK` PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_city
#------------------------------------------------------------

CREATE TABLE `iNZ25_city`(
        `id`                   Int NOT NULL ,
       `zipcode`              Varchar (155) NOT NULL ,
        `name`                 Varchar (50) NOT NULL ,
        `idDepartement` Int NOT NULL
	,CONSTRAINT `iNZ25_city_PK` PRIMARY KEY (`id`)

	,CONSTRAINT `iNZ25_city_iNZ25_departement_FK` FOREIGN KEY (`idDepartement`) REFERENCES `iNZ25_departement`(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_usersTypes
#------------------------------------------------------------

CREATE TABLE `iNZ25_usersTypes`(
        `id`  Int NOT NULL ,
        `name` Varchar (50) NOT NULL
	,CONSTRAINT `iNZ25_usersTypes_PK` PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_users
#------------------------------------------------------------

CREATE TABLE `iNZ25_users`(
        `id`                  Int NOT NULL ,
        `lastname`           Varchar (50) NOT NULL ,
       `firstname`          Varchar (50) NOT NULL ,
        `birthDate`           Varchar (255) NOT NULL ,
        `phoneNumber`        Varchar (255) NOT NULL ,
       `email`              Varchar (255) NOT NULL ,
        `address`           Varchar (255) NOT NULL ,
       `login`               Varchar (50) NOT NULL ,
        `password`            Char (255) NOT NULL ,
        `idCity`     Int NOT NULL ,
        `idUsersTypes` Int NOT NULL
	,CONSTRAINT `iNZ25_users_PK` PRIMARY KEY (`id`)

	,CONSTRAINT `iNZ25_users_iNZ25_city_FK` FOREIGN KEY (`idCity`) REFERENCES `iNZ25_city`(`id`)
	,CONSTRAINT `iNZ25_users_iNZ25_usersTypes0_FK` FOREIGN KEY (`idUsersTypes`) REFERENCES `iNZ25_usersTypes`(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_usersBySports
#------------------------------------------------------------

CREATE TABLE `iNZ25_usersBySports`(
        `id`                  Int NOT NULL ,
        `idUsers`      Int NOT NULL ,
        `idSports`     Int NOT NULL ,
       `idUsersTypes` Int NOT NULL
	,CONSTRAINT `iNZ25_usersBySports_PK` PRIMARY KEY (`id`)

	,CONSTRAINT `iNZ25_usersBySports_iNZ25_users_FK` FOREIGN KEY (`idUsers`) REFERENCES `iNZ25_users`(`id`)
	,CONSTRAINT `iNZ25_usersBySports_iNZ25_sports0_FK` FOREIGN KEY (`idSports`) REFERENCES `iNZ25_sports`(`id`)
	,CONSTRAINT `iNZ25_usersBySports_iNZ25_usersTypes1_FK` FOREIGN KEY (`idUsersTypes`) REFERENCES `iNZ25_usersTypes`(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_appointments
#------------------------------------------------------------

CREATE TABLE `iNZ25_appointments`(
        `id`                 Int NOT NULL ,
        `dateHour`            Varchar (50) NOT NULL ,
        `idUsers`      Int NOT NULL ,
        `idUsers_have` Int NOT NULL
	,CONSTRAINT `iNZ25_appointments_PK` PRIMARY KEY (`id`)

	,CONSTRAINT `iNZ25_appointments_iNZ25_users_FK` FOREIGN KEY (`idUsers`) REFERENCES `iNZ25_users`(`id`)
	,CONSTRAINT `iNZ25_appointments_iNZ25_users0_FK` FOREIGN KEY (`idUsers_have`) REFERENCES `iNZ25_users`(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_offres
#------------------------------------------------------------

CREATE TABLE `iNZ25_offres`(
        `id`            Int NOT NULL ,
       `name`            Varchar (255) NOT NULL ,
       `sports`          Varchar (50) NOT NULL ,
        `dateHour`       Varchar (50) NOT NULL ,
        `location`        Varchar (155) NOT NULL ,
        `idUsers`  Int NOT NULL ,
        `idSports` Int NOT NULL
	,CONSTRAINT `iNZ25_offres_PK` PRIMARY KEY (`id`)

	,CONSTRAINT `iNZ25_offres_iNZ25_users_FK` FOREIGN KEY (`idUsers`) REFERENCES `iNZ25_users`(`id`)
	,CONSTRAINT `iNZ25_offres_iNZ25_sports0_FK` FOREIGN KEY (`idSports`) REFERENCES `iNZ25_sports`(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_usersProgram
#------------------------------------------------------------

CREATE TABLE `iNZ25_usersProgram`(
        `id`                  Int NOT NULL ,
        `idProgrammes` Int NOT NULL ,
        `idUsers`     Int NOT NULL
	,CONSTRAINT `iNZ25_usersProgram_PK` PRIMARY KEY (`id`)

	,CONSTRAINT `iNZ25_usersProgram_iNZ25_programmes_FK` FOREIGN KEY (`idProgrammes`) REFERENCES `iNZ25_programmes`(`id`)
	,CONSTRAINT `iNZ25_usersProgram_iNZ25_users0_FK` FOREIGN KEY (`idUsers`) REFERENCES `iNZ25_users`(`id`)
)ENGINE=InnoDB;

