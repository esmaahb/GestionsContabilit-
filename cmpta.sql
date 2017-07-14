drop database cmpta;
create database cmpta;

	use cmpta;

	create table admins (
	 	
	    NomComplet varchar(75) NOT NULL,
		MotDepasse text  NOT NULL
		
		);
	
	 describe admins;


	  insert into admins(
	  	
	  	NomComplet,
	  	MotDepasse)
	   values ('aliyoun cisse','123456789');

	    select * from admins; 

	    create table compte (
	    id int(11)  primary key NOT NULL ,
	    NumeroDuCompte int(11)  NOT NULL,
	    Libelle varchar(75)  NOT NULL,
	    Debit decimal (9,2) ,
	    credit decimal (9,2) ,
	    Debiteur decimal (9,2) ,
	    Crediteur decimal (9,2) 

	            	);

           describe compte;

           
	       
           select * from compte;
 
	    	
	   	