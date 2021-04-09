SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

drop database if exists Multistore;
create database Multistore;
use Multistore;

create table Users(
	firstName varchar(20) NOT NULL,
    lastName varchar(50) NOT NULL,
	username varchar(50) unique,
    primary key(username),
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    DOB date NOT NULL,
    token int(6) NOT NULL
);

create table SearchHistory(
	username varchar(50),
	foreign key(username) references Users(username),
    searchHistory varchar(255)
);

create table History(
	username varchar(50),
    foreign key(username) references Users(username),
    `name` varchar(50) NOT NULL,
    img varchar(255),
    link varchar(255) NOT NULL,
    price float,
    store varchar(50)
);

create table Favourites(
	username varchar(50),
    foreign key(username) references Users(username),
    `name` varchar(50) NOT NULL,
    img varchar(255),
    link varchar(255) NOT NULL,
    price float,
    store varchar(50)
);