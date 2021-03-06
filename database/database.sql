/*==============================================================*/
/* DBMS name:      ShopperRegistration                                     */
/* Created on:     26/10/2016 2:09:05 PM                         */
/*==============================================================*/

create database if not exists demo1;

use demo1;

drop table if exists Shopper;
drop table if exists Shaddr;
drop table if exists CreditCard;
drop table if exists SecretQuestion;

/*==============================================================*/
/* Table: Shopper                                            */
/*==============================================================*/

CREATE TABLE Shopper (
sh_id                   INT NOT NULL AUTO_INCREMENT,
sh_username             VARCHAR(30) NOT NULL,
sh_password             CHAR(255) NOT NULL,
sh_email                VARCHAR(64) NOT NULL,
sh_phone                VARCHAR(45) NOT NULL,
sh_type                 CHAR(1) NULL,
sh_group                INT NULL,
sh_field1               VARCHAR(128) NULL,
sh_field2               VARCHAR(128) NULL,
PRIMARY KEY (sh_id)
);

/*==============================================================*/
/* Table: Shaddr                                          */
/*==============================================================*/

CREATE TABLE Shaddr (
shaddr_id               INT NOT NULL,
sh_id                   INT NOT NULL,
sh_title                CHAR(8) NOT NULL,
sh_firstname            VARCHAR(20) NOT NULL,
sh_familyname           VARCHAR(30) NOT NULL,
sh_street1              VARCHAR(64) NOT NULL,
sh_street2              VARCHAR(64) NULL,
sh_city                 VARCHAR(32) NOT NULL,
sh_state                VARCHAR(8) NOT NULL,
sh_postcode             VARCHAR(10) NOT NULL,
sh_country              VARCHAR(32) NOT NULL,
PRIMARY KEY (shaddr_id),
FOREIGN KEY (sh_id) REFERENCES Shopper(sh_id)
);

/*==============================================================*/
/* Table: CreditCard                                          */
/*==============================================================*/

CREATE TABLE CreditCard (
sh_id                  INT NOT NULL,
card_no                BIGINT NOT NULL,
expiry_month           INT NOT NULL,
expiry_year            INT NOT NULL,
FOREIGN KEY (sh_id) REFERENCES Shopper(sh_id)
);

/*==============================================================*/
/* Table: SecretQuestion                                */
/*==============================================================*/

CREATE TABLE SecretQuestion (
secret_q_id           INT NOT NULL,
sh_id                 INT NOT NULL,
question1              VARCHAR(128) NOT NULL,
answer1                VARCHAR(128) NOT NULL,
question2              VARCHAR(128) NOT NULL,
answer2                VARCHAR(128) NOT NULL,
PRIMARY KEY (secret_q_id),
FOREIGN KEY (sh_id) REFERENCES Shopper(sh_id)
);

/*==============================================================*/
/* Table: Session                                               */
/*==============================================================*/

CREATE TABLE Sessions (
id                    INT NOT NULL,
sh_id                 INT NOT NULL,
data                  BLOB,
time                  TIMESTAMP,
PRIMARY KEY (id),
FOREIGN KEY (sh_id) REFERENCES Shopper(sh_id)
);

/*==============================================================*/
/* Insert Statements aka dummy data                              */
/*==============================================================*/

INSERT into Shopper values (1, 'Batman99', 'password1', 'joe_bloggs@gmail.com', '0499123456', NULL, NULL, NULL, NULL);
INSERT into Shaddr values (1, 1, 'Mr', 'Joe', 'Bloggs', '39 Fake St, Epping', NULL, 'Sydney', 'NSW', '2000', 'Australia'); 
INSERT into CreditCard values (1, 9998822111, 01, 18 );
INSERT into SecretQuestion values (1, 1, 'what is your favourite colour?', 'red', 'What was the name of your first pet?', 'Fluffy');



