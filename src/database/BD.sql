drop table if exists user;

create table user(
    id varchar(60),
    username varchar(30),
    password varchar(255),
    email varchar(255),
    telephone varchar(11),
    country enum('sp','us','uk','ca','au','de','fr','jp','other'),
    birthdate date,
    type enum('ADMIN','EDITOR','REGULAR')
);

alter table user add constraint pk_user primary key (id);
alter table user add constraint uk_user_username unique (username);
alter table user add constraint uk_user_email unique (email);