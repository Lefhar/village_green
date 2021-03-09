DROP DATABASE IF EXISTS `village_green`;
CREATE DATABASE `village_green`;
USE `village_green`;

CREATE TABLE suppliers(
   sup_id VARCHAR(50),
   sup_firstname VARCHAR(50),
   sup_lastname VARCHAR(50),
   sup_address VARCHAR(150),
   sup_type VARCHAR(50),
   sup_cp INT,
   sup_city VARCHAR(50),
   PRIMARY KEY(sup_id)
);

CREATE TABLE category(
   cat_id INT,
   cat_name VARCHAR(50) NOT NULL,
   cat_parent INT,
   PRIMARY KEY(cat_id)
);

CREATE TABLE departments(
   dep_id INT,
   dep_name VARCHAR(50),
   PRIMARY KEY(dep_id)
);

CREATE TABLE posts(
   post_id INT,
   pos_name VARCHAR(50),
   dep_id INT NOT NULL,
   PRIMARY KEY(post_id),
   FOREIGN KEY(dep_id) REFERENCES departments(dep_id)
);

CREATE TABLE products(
   pro_id INT,
   pro_name VARCHAR(50),
   pro_description VARCHAR(150),
   pro_photo VARCHAR(50),
   pro_label VARCHAR(50),
   pro_ref VARCHAR(50),
   pro_price DECIMAL(5,2),
   pro_status INT,
   pro_stock INT,
   cat_id INT NOT NULL,
   sup_id VARCHAR(50) NOT NULL,
   PRIMARY KEY(pro_id),
   FOREIGN KEY(cat_id) REFERENCES category(cat_id),
   FOREIGN KEY(sup_id) REFERENCES suppliers(sup_id)
);

CREATE TABLE customer(
   cus_id INT,
   cus_firstname VARCHAR(50),
   cus_lastname VARCHAR(50),
   cus_address VARCHAR(150),
   cus_cp INT,
   cus_city VARCHAR(50),
   cus_telephone INT,
   cus_type VARCHAR(50),
   cus_coef INT,
   post_id INT NOT NULL,
   PRIMARY KEY(cus_id),
   FOREIGN KEY(post_id) REFERENCES posts(post_id)
);

CREATE TABLE employee(
   emp_id VARCHAR(50),
   emp_firstname VARCHAR(50),
   emp_lastname VARCHAR(50),
   emp_address VARCHAR(150),
   emp_cp INT,
   emp_city VARCHAR(50),
   emp_tel INT,
   dep_id INT,
   PRIMARY KEY(emp_id),
   FOREIGN KEY(dep_id) REFERENCES departments(dep_id)
);

CREATE TABLE orders(
   ord_id INT,
   ord_order_date DATETIME,
   ord_ship_date DATETIME,
   ord_status VARCHAR(50),
   cus_id INT NOT NULL,
   PRIMARY KEY(ord_id),
   FOREIGN KEY(cus_id) REFERENCES customer(cus_id)
);

CREATE TABLE orders_details(
   ode_id INT,
   ode_unit_price DECIMAL(10,2),
   ode_qte INT,
   ode_discount INT,
   pro_id INT NOT NULL,
   ord_id INT NOT NULL,
   PRIMARY KEY(ode_id),
   FOREIGN KEY(pro_id) REFERENCES products(pro_id),
   FOREIGN KEY(ord_id) REFERENCES orders(ord_id)
);
