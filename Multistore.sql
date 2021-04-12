SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

create table Users(
	firstName varchar(20) NOT NULL,
    lastName varchar(50) NOT NULL,
	username varchar(50) unique,
    primary key(username),
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    DOB date NOT NULL,
    token int(6)
);

create table History(
    time timestamp,
	username varchar(50),
    foreign key(username) references Users(username),
    `name` varchar(255) NOT NULL,
    img varchar(255),
    link varchar(255) NOT NULL,
    price varchar(50),
    store varchar(50)
);

create table Favourites(
    time timestamp,
	username varchar(50),
    foreign key(username) references Users(username),
    `name` varchar(255) NOT NULL,
    img varchar(255),
    link varchar(255) NOT NULL,
    price varchar(50),
    store varchar(50)
);