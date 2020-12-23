create table products
(
	id int auto_increment
		primary key,
	sku varchar(255) not null,
	name varchar(255) not null,
	price float not null,
	size int default 0 null,
	weight float default 0 null,
	height int default 0 null,
	width int default 0 null,
	length int default 0 null
);

