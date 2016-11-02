/*==============================================================*/
/* DBMS name:      ShopperRegistration                                     */
/* Created on:     26/10/2016 2:09:05 PM                         */
/*==============================================================*/



/*==============================================================*/
/* Table: Shopper                                            */
/*==============================================================*/

CREATE TABLE Shopper (
sh_id                   INT NOT NULL,
sh_username             VARCHAR(30) NOT NULL,
sh_password             VARCHAR(255) NOT NULL,
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
sh_street2              VARCHAR(64) NOT NULL,
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
card_no                INT NOT NULL,
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
question              VARCHAR(128) NOT NULL,
answer                VARCHAR(128) NOT NULL,
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