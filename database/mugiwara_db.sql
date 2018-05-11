-- ------------------------------------------------------
-- Database: onepiece_fanpage Tables: multiples
-- ------------------------------------------------------
/**
 * Author:  adrian alonso ake ek
 * Created: May 11, 2018
 */------------------------------------------------------

CREATE DATABASE IF NOT EXISTS onepiece_fanpage;
USE onepiece_fanpage ;

DROP TABLE IF EXISTS profiles;
CREATE TABLE profiles (
  idprofile int(11) NOT NULL  primary key,
  description varchar(100) NOT NULL,
  isvisible tinyint(1) DEFAULT '1',
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
insert into profiles values(1,'Invitado',1,curdate(),curdate());
insert into profiles values(99,'Administrador',1,curdate(),curdate());


DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  idprofile int(11) NOT NULL
  email varchar(255) UNIQUE NOT NULL,
  name varchar(255)  NOT NULL,  
  password varchar(255)  NOT NULL,
  remember_token varchar(100)  DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  foreign key (idprofile) references profiles (idprofile)  on delete cascade on update cascade
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS characters;
CREATE TABLE characters (
  idcharacter varchar(10) NOT NULL primary key,  
  name varchar(100) NOT NULL,        
  description text NOT NULL,        
  status tinyint(1) DEFAULT '1',
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



