#ZADANIE DODATKOWE

##XAMPP
- nowa baza danych
create DATABASE ERPDatabase

 uzytkownicy
CREATE TABLE Uzytkownicy( 
login varchar(20), 
haslo varchar(20),
PRIMARY KEY(login));


##products
create TABLE Products (
	id int  AUTO_INCREMENT NOT null,
    nazwa varchar(20),
    opis varchar(30),
    cena double,
    dostepnosc  BIT,
    PRIMARY KEY(id)
);

##customers
create TABLE Customers (
	id int  AUTO_INCREMENT NOT null,
    imie varchar(20),
    nazwisko varchar(30),
    adres varchar(30),
    e_mail varchar(30),
    PRIMARY KEY(id)
);


##Orders
create TABLE Orders (
	id int  AUTO_INCREMENT NOT null,
    zamowienie int,
    data_zamowienia date,
    klient int,
    produkt int,
    PRIMARY KEY(id)
);

#employees
create TABLE Employees (
	id int  AUTO_INCREMENT NOT null,
    imie varchar(20),
    nazwisko varchar(30),
    stanowisko varchar(30),
    wynagrodzenie double,
    PRIMARY KEY(id)
);


##employees_actions
create TABLE Employee_Actions (
	id int  AUTO_INCREMENT NOT null,
    id_klienta int,
    id_pracownika int,
    id_products int,
    typ_akcji varchar(20),
    PRIMARY KEY(id)
);


- Uzupelnienie rekordow

#customers
INSERT into customers(id,adres,e_mail,imie,nazwisko) values 
("1","kwiatowa","email1@wp.pl","Jan","Kowalski"),
("2","polna","email2@o2.pl","wieslawa","nowak"),
("3","laczna","tenemail@gmail.com","toamsz","kwas"),
("4","krzywa","taktenmail@.pl","igor","masny"),
("5","kwiatowa","email1@wp.pl","karol","has");

#employees
INSERT into employees(id,stanowisko,wynagrodzenie,imie,nazwisko) values 
("1","informatyk","4000","adam","snak"),
("2","dyrektor","5000","gabriela","zeromska"),
("3","nauczyciel","3800","dorian","haras"),
("4","sekretariat","3600","brajan","chwast"),
("5","konserwator","4000","zygmunt","krol");

#employees_actions
INSERT into employee_actions(id,id_klienta,id_pracownika,id_products,typ_akcji) values 
("1","2","4","5","usuniecie_produktu"),
("2","4","1","4","edycja_produktu"),
("3","5","5","3","dodanie_produktu"),
("4","3","2","2","edycja_produktu"),
("5","1","3","1","usuniecie_produktu");

#Orders
INSERT into orders(id,data_zamowienia,klient,produkt,zamowienie) values 
("1","2007-04-01","4","5","5"),
("2","2021-06-11","1","4","14"),
("3","2022-02-21","5","3","544"),
("4","2004-03-31","2","2","2"),
("5","2000-12-04","3","1","787");

#products
INSERT into products(id,cena,dostepnosc,nazwa,opis) values ("1","13","0","kabel","hdmi"), 
("2","2331","0","monitor","msi"), 
("3","222","1","klawiatura","madog"), 
("4","204","1","myszka","logitech"), 
("5","20","0","przejsciowka","vga-hdmi");

#uzytkownicy
INSERT into uzytkownicy(login,haslo) values 
("qwerty","123"),
("test","1234"),
("pracownik","12345"),
("admini","admin"),
("klient","123456");













