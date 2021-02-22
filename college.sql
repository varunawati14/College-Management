create database college_crud;
use college_crud;
create table Student(
	roll_no int primary key auto_increment,
    student_name varchar(30),
    student_branch varchar(40),
    student_college varchar(75),
    student_address varchar(100)
);