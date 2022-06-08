<?php
define('HOST','localhost');
define('DATABASE','Eproject1');
define('USERNAME','root');
define('PASSWORD','');

const SQL_CREATE_DATABASE = "create database IF NOT EXISTS".DATABASE;
const SQL_CREATE_TABLE_USERS = 'create table IF NOT EXISTS users (
	id int primary key auto_increment,
	id_role int,
	username varchar(50),
	email varchar(100),
	password varchar(100),
    address varchar(300),
    phonenumber varchar(20),
	created_at datetime,
	updated_at datetime
)';

const SQL_CREATE_TABLE_ROLES = 'create table IF NOT EXISTS roles(
    id int,
    rolename varchar(50)
)';

const SQL_CREATE_TABLE_POST = 'create table IF NOT EXISTS post(
    id int,
    title varchar(300),
    content longtext,
    id_author int,
    id_category int,
    like int,
    dislike int,
    created_at datetime,
    updated_at datetime
)';

const SQL_CREATE_TABLE_CATEGORY = 'create table IF NOT EXISTS category(
    id int,
    name varchar(100),
    content varchar(300)
)';

const SQL_CREATE_TABLE_COMMENTS = 'create table IF NOT EXISTS comments(
    id int,
    id_post int,
    id_user int,
    content varchar(300),
    created_at datetime,
    updated_at datetime
)';

const SQL_CREATE_TABLE_REPORTS = 'create table IF NOT EXISTS reports(
    id int,
    id_user int,
    name varchar(100),
    email varchar(100),
    title varchar(300),
    content longtext
)';