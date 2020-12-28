drop table if exists Employees;
drop table if exists CustPurchases;
drop table if exists CustCart;
drop table if exists Inventory;
drop table if exists Customers;
drop table if exists Suppliers;


CREATE TABLE Suppliers (
Name varchar(255),
SupplierID int,
Phone int,
Email varchar(255),
PhysicalLocation varchar(255),
ShippingTime int, -- number of days
Website varchar(255),
LoginID varchar(255),
PaymentMethod varchar(255),
PRIMARY KEY (SupplierID)
);
 

CREATE TABLE Customers (
Fname varchar(255),
Lname varchar(255),
CustID int,
Address varchar(255),
Membership varchar(255),
Phone int,
Email varchar(255),
Gender char,
Num_Transactions int,
PRIMARY KEY(CustID)
);

CREATE TABLE Inventory (
FigName varchar(255),
FigID int,
Height int,
Weight int,
SuppID int,
Price float(2),
FigCondition varchar(255),
Pre_owned varchar(225),
Material varchar(255),
Categories varchar(255),
PRIMARY KEY(FigID),
FOREIGN KEY(SuppID) REFERENCES Suppliers(SupplierID)
);

CREATE TABLE CustCart (
CustID int,
FigID int,
currentCost float(2),
PRIMARY KEY(CustID, FigID),
FOREIGN KEY(FigID) REFERENCES Inventory(FigID),
FOREIGN KEY(CustID) REFERENCES Customers(CustID)

);

CREATE TABLE CustPurchases (
CustID int,
FigID int,
OrderID int NOT NULL,
OrderDate date,
Cost float(2),
LocationOrdered varchar(255),
LocationDelivered varchar(255),
CustomerRating int,
PaymentMethod varchar(255),
Discount decimal(3),
PRIMARY KEY(CustID, FigID, OrderID),
FOREIGN KEY(FigID) REFERENCES Inventory(FigID),
FOREIGN KEY(CustID) REFERENCES Customers(CustID)

);

CREATE TABLE Employees (
Fname varchar(255),
Lname varchar(255),
M_init char,
EmpID int,
Gender char,
EmployedSince datetime,
Position varchar(255),
Salary int,
Phone int,
Email varchar(255),
SuperID int,
PRIMARY KEY(EmpID),
FOREIGN KEY(SuperID) REFERENCES Employees(EmpID)

);
