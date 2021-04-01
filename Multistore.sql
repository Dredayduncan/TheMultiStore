create database Multistore;
use Multistore;

create table Users(
	firstName varchar(20),
    lastName varchar(50),
	username varchar(50) unique,
    primary key(username),
    password varchar(255),
    email varchar(255),
    DOB date
);

create table SearchHistory(
	username varchar(50),
	foreign key(username) references Users(username),
    searchHistory varchar(255)
);

create table History(
	username varchar(50),
    foreign key(username) references Users(username),
    HistoryName varchar(50),
    HistoryLink varchar(255)
);