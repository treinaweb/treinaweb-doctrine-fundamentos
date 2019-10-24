create table user(
	id int not null auto_increment,
    name varchar(100) not null,
    constraint primary key (id)
);

insert into user (name) value ('Daniel'), ('Maria'), ('Pedro');