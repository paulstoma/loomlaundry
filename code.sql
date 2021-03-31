
CREATE DATABASE IF NOT EXISTS LaundryLoom;
use LaundryLoom;

CREATE TABLE Customer(
	C_ID int primary key auto_increment,
    C_FirstName varchar(250) NOT NULL,
    C_LastName varchar(250) NOT NULL,
    C_Address varchar(250) NOT NULL,
    C_Password varchar(100) NOT NULL,
    C_PhoneNumber varchar(100) NOT NULL,
    C_ZipCode int not null,
    C_StreetName varchar(250),
    C_City varchar(100),
    C_State varchar(150),
    C_AccCreateDate datetime default current_timestamp,
    C_AccUpdateDate datetime default current_timestamp
);

CREATE TABLE Driver(
	D_ID int primary key auto_increment,
    D_Name varchar(250) NOT NULL,
    D_Address varchar(150) NOT NULL,
    D_PhoneNumber varchar(100) NOT NULL,
    D_ZipCode int not null,
    D_Password varchar(100) NOT NULL,
    D_AccCreateDate datetime,
    D_AccUpdateDate datetime,
    D_SSN varchar(100),
    D_License varchar(150)
);

CREATE TABLE Vendor(
	V_ID int primary key auto_increment,
    V_Name varchar(250) NOT NULL,
    V_Address varchar(150) NOT NULL,
    V_PhoneNumber varchar(100) NOT NULL,
    V_ZipCode int not null,
    V_Password varchar(100) NOT NULL,
    V_AccCreateDate datetime,
    V_AccUpdateDate datetime,
    V_SSN varchar(100),
    V_License varchar(150)
);

CREATE TABLE VendorOffering (
    V_ID int,
    V_OpenDay varchar(100) NOT NULL,
    V_OpenTime time,
    V_CloseTime time,
    V_Wash boolean,
    V_Dry boolean,
    V_Fold boolean,
    V_DryClean boolean
);

CREATE TABLE Orders(
    Order_ID int PRIMARY KEY auto_increment,
    C_ID int,
    PickUp_Driver int,
    Serviced_Vendor int,
    BlueBag_Count int,
    GreenBag_Count int,
    Spl_Instructions varchar(250),
    Driver_Instructions varchar(500),
    PickUp_Date date,
    PickUp_Time varchar(150),
    PickUp_Status varchar(10),
    DeliveredBy_Driver int,
    Delivery_Status varchar(100),
    Order_Status varchar(100),
    Dropoff_Date date
);

CREATE TABLE DriverTasks(
    D_ID int,
    Order_ID int,
    PickUpTime datetime,
    DeliveryTime datetime
);

CREATE TABLE Testimonials(
    C_ID int,
    C_Rating int,
    C_Comment varchar(500)
);

CREATE TABLE PricingPlans(
    Plan int PRIMARY KEY auto_increment,
    Price float
);

CREATE TABLE Feedback(
    Feeback_ID int PRIMARY key auto_increment,
    C_ID int,
    Order_ID int,
    Feedback_rating int,
    Feedback_Msg varchar(500)
);

CREATE TABLE ContactUs(
    FName varchar(200),
    LName varchar(200),
    Email varchar(200),
    CompanyName varchar(200),
    Contact_Message varchar(200),
    Create_Date datetime,
    L_Response boolean
);

CREATE TABLE L_BagsRequested(
    C_ID int,
    L_BlueBags_Count int,
    L_GreenBags_Count int,
    Request_Status boolean,
    Request_Date datetime,
    Request_DispatchDate datetime
);

CREATE TABLE Billing(
    Order_ID int,
    C_ID int,
    Price float,
    Billing_Status int
);

CREATE TABLE Zipcode(
ID int(10),
zipcode int(5),
city varchar (30)
);

INSERT INTO Zipcode( ID, zipcode, city)
Values('1', '48503', 'Flint');
Values('2', '48360', 'Lake Orion');
Values('3', '48326', 'Auburn Hills');
Values('4', '48335', 'Farmington Hills');
Values('5', '48317', 'Shelby Township');