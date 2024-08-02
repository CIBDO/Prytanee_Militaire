create table pays
(
    id         int auto_increment,
    name       varchar(255)                                 null,
    created_at timestamp default CURRENT_TIMESTAMP null,
    updated_at timestamp                           null,
    constraint pays_pk
        primary key (id)
);
