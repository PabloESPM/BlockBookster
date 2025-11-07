drop table if exists user;

create table user(
    uuid varchar(60),
    username varchar(30),
    password varchar(255),
    email varchar(255),
    telephone varchar(11),
    country enum('sp','us','uk','ca','au','de','fr','jp','other'),
    edad integer,
    type enum ('NORMAL','WORKER','ADMIN')

);
alter table user add constraint pk_user primary key (uuid);
alter table user add constraint uk_user_username unique (username);
alter table  user add constraint uk_user_email unique (email);