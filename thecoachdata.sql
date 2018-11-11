#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: iNZ25_programs
#------------------------------------------------------------

CREATE TABLE iNZ25_programs(
        id          Int  Auto_increment  NOT NULL ,
        ProgramName Varchar (100) NOT NULL
	,CONSTRAINT iNZ25_programs_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_sports
#------------------------------------------------------------

CREATE TABLE iNZ25_sports(
        id        Int  Auto_increment  NOT NULL ,
        sportName Varchar (100) NOT NULL
	,CONSTRAINT iNZ25_sports_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_department
#------------------------------------------------------------

CREATE TABLE iNZ25_department(
        id               Int  Auto_increment  NOT NULL ,
        departmentNumber Varchar (50) NOT NULL ,
        departmentName   Varchar (155) NOT NULL
	,CONSTRAINT iNZ25_department_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_city
#------------------------------------------------------------

CREATE TABLE iNZ25_city(
        id                  Int  Auto_increment  NOT NULL ,
        zipcode             Varchar (155) NOT NULL ,
        cityName            Varchar (100) NOT NULL ,
        id_iNZ25_department Int NOT NULL
	,CONSTRAINT iNZ25_city_PK PRIMARY KEY (id)

	,CONSTRAINT iNZ25_city_iNZ25_department_FK FOREIGN KEY (id_iNZ25_department) REFERENCES iNZ25_department(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_usersTypes
#------------------------------------------------------------

CREATE TABLE iNZ25_usersTypes(
        id             Int  Auto_increment  NOT NULL ,
        usersTypesName Varchar (100) NOT NULL
	,CONSTRAINT iNZ25_usersTypes_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_users
#------------------------------------------------------------

CREATE TABLE iNZ25_users(
        id                  Int  Auto_increment  NOT NULL ,
        lastname            Varchar (100) NOT NULL ,
        firstname           Varchar (100) NOT NULL ,
        birthDate           Varchar (255) NOT NULL ,
        phoneNumber         Varchar (255) NOT NULL ,
        email               Varchar (255) NOT NULL ,
        address             Varchar (255) NOT NULL ,
        login               Varchar (50) NOT NULL ,
        password            Char (255) NOT NULL ,
        id_iNZ25_city       Int NOT NULL ,
        id_iNZ25_usersTypes Int NOT NULL
	,CONSTRAINT iNZ25_users_PK PRIMARY KEY (id)

	,CONSTRAINT iNZ25_users_iNZ25_city_FK FOREIGN KEY (id_iNZ25_city) REFERENCES iNZ25_city(id)
	,CONSTRAINT iNZ25_users_iNZ25_usersTypes0_FK FOREIGN KEY (id_iNZ25_usersTypes) REFERENCES iNZ25_usersTypes(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_usersBySports
#------------------------------------------------------------

CREATE TABLE iNZ25_usersBySports(
        id                  Int  Auto_increment  NOT NULL ,
        id_iNZ25_users      Int NOT NULL ,
        id_iNZ25_sports     Int NOT NULL ,
        id_iNZ25_usersTypes Int NOT NULL
	,CONSTRAINT iNZ25_usersBySports_PK PRIMARY KEY (id)

	,CONSTRAINT iNZ25_usersBySports_iNZ25_users_FK FOREIGN KEY (id_iNZ25_users) REFERENCES iNZ25_users(id)
	,CONSTRAINT iNZ25_usersBySports_iNZ25_sports0_FK FOREIGN KEY (id_iNZ25_sports) REFERENCES iNZ25_sports(id)
	,CONSTRAINT iNZ25_usersBySports_iNZ25_usersTypes1_FK FOREIGN KEY (id_iNZ25_usersTypes) REFERENCES iNZ25_usersTypes(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_appointments
#------------------------------------------------------------

CREATE TABLE iNZ25_appointments(
        id                  Int  Auto_increment  NOT NULL ,
        dateHour            Varchar (50) NOT NULL ,
        id_iNZ25_users      Int NOT NULL ,
        id_iNZ25_users_have Int NOT NULL
	,CONSTRAINT iNZ25_appointments_PK PRIMARY KEY (id)

	,CONSTRAINT iNZ25_appointments_iNZ25_users_FK FOREIGN KEY (id_iNZ25_users) REFERENCES iNZ25_users(id)
	,CONSTRAINT iNZ25_appointments_iNZ25_users0_FK FOREIGN KEY (id_iNZ25_users_have) REFERENCES iNZ25_users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_propositions
#------------------------------------------------------------

CREATE TABLE iNZ25_propositions(
        id              Int  Auto_increment  NOT NULL ,
        propositionName Varchar (255) NOT NULL ,
        sports          Varchar (50) NOT NULL ,
        dateHour        Varchar (50) NOT NULL ,
        location        Varchar (155) NOT NULL ,
        id_iNZ25_users  Int NOT NULL ,
        id_iNZ25_sports Int NOT NULL
	,CONSTRAINT iNZ25_propositions_PK PRIMARY KEY (id)

	,CONSTRAINT iNZ25_propositions_iNZ25_users_FK FOREIGN KEY (id_iNZ25_users) REFERENCES iNZ25_users(id)
	,CONSTRAINT iNZ25_propositions_iNZ25_sports0_FK FOREIGN KEY (id_iNZ25_sports) REFERENCES iNZ25_sports(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: iNZ25_usersProgram
#------------------------------------------------------------

CREATE TABLE iNZ25_usersProgram(
        id                Int  Auto_increment  NOT NULL ,
        id_iNZ25_programs Int NOT NULL ,
        id_iNZ25_users    Int NOT NULL
	,CONSTRAINT iNZ25_usersProgram_PK PRIMARY KEY (id)

	,CONSTRAINT iNZ25_usersProgram_iNZ25_programs_FK FOREIGN KEY (id_iNZ25_programs) REFERENCES iNZ25_programs(id)
	,CONSTRAINT iNZ25_usersProgram_iNZ25_users0_FK FOREIGN KEY (id_iNZ25_users) REFERENCES iNZ25_users(id)
)ENGINE=InnoDB;
