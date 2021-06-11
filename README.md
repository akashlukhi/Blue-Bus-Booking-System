# Blue-Bus-Booking-System

Database Configuration

Open phpmyadmin
Create Database�db with user = 'akash' and password = 'AKlukhi@123'


create four Tables wich are listed below:
  1) users(user_name varchar(20) primary key, password varchar(20), email_id varchar(20)).
  2) passanger_details(id varchar(20) primary key, seat_no varchar(20), passanger_name varchar(20), email_id varchar(40), mobile_no int(10),age int(10),gender varchar(20),booked_by varchar(20),source varchar(20),destination varchar(20),bus_plate_no varchar(20),bus_name varchar(20)).
  3) bus_info(id varchar(20) primary key, bus_name varchar(20), plate_no varchar(20), type varchar(40),source varchar(20),destination varchar(20),rate varchar(20),date date,boarding_time time,departure_time time,seats varchar(20)).
  4) booked_seat(id varchar(20) primary key, seat_no varchar(20), plate_no varchar(20),booked_time time,user_name varchar(20)).

