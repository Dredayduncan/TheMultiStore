create database Multistore;
use Multistore;

create table Users(
	firstName varchar(20),
    lastName varchar(50),
	username varchar(50) unique,
    primary key(username),
    password varchar(60),
    email varchar(255),
    DOB date
    
    
);

create table SearchHistory(
	username varchar(50),
	foreign key(username) references Users(username),
    searchHistoryTyped varchar(50),
    searchHistoryLink varchar(255)
);