create database YoucodeClub;
use YoucodeClub;
create table Clubs (
ClubId int not null auto_increment primary key,
ClubName varchar(20),
Logo varchar(1000),
descriptio varchar(1000),
datec date
);

create table apprenant (
userId int not null auto_increment primary key,
Fullname varchar(20),
class varchar(20),
age int,
jClub varchar(20),
role varchar(20),
prevIdClub int,
FOREIGN KEY (prevIdClub) REFERENCES Clubs(ClubId)
);
create table AdminC (
AdminId int not null auto_increment primary key,
Fullname varchar(20),
password varchar(20)
);
