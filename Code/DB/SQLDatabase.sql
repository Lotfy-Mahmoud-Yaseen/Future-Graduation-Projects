--Each section represent a table:
--If you want to ask any question i am here.
Create database FutureProjects
use FutureProjects;
-------------------------------------------------------------------
create table Specialties(
	Spe_id int identity(1,1) primary key,
	Spe_name varchar(20) check (Spe_name in ('CS','MIS'))
);
-------------------------------------------------------------------
create table Accounts(
	Acc_id int primary key,
	Usernaem varchar(30),
	Pass varchar(30),
);
-------------------------------------------------------------------
create table Students(
	Stu_id int,
	f_name varchar(20) not null,
	m_name varchar(20) not null,
	l_name varchar(20) not null,
	phone varchar(15) Unique,
	GPA decimal(3,2),
	Gander varchar(6) check(Gander in ('Male','Female')),
	Mail varchar(30) not null Unique,
	Edu_System varchar(10) check. (Edu_System in ('Cradit','2 semester')) not null,
	Spe_id int not null,
	Dr_id int,
	TL_id int,
	Pro_id int,
	ProMa_id int,
	
	constraint Stu_pk primary key (Stu_id)
);

Alter Table Students
add constraint Stu_spa_fk foreign key (Spe_id)
references  Specialties (Spe_id);

Alter Table Students
add constraint Stu_dr_fk foreign key (Dr_id)
references Doctors (Dr_id);

Alter Table Students
add constraint Stu_stu_fk foreign key (TL_id)
references Students (Stu_id);

Alter Table Students
add constraint Stu_pro_fk foreign key (Pro_id)
references Projects (Pro_id);

Alter Table Students
add constraint Stu_proma_fk foreign key (ProMa_id)
references ProManager (ProMa_id);

-----------------------------------------------------------------
create table Doctors(
	Dr_id int identity(1,1) primary key,
	f_name varchar(20) not null,
	m_name varchar(20) not null,
	l_name varchar(20) not null,
	Email varchar(30) not null Unique,
	Intarnal_Dr varchar(5) not null,
	Extarnal_Dr varchar(5) not null,
	Spe_id int not null,
	Acc_id int not null,

);

Alter Table Doctors
add constraint Dr_Spe_fk foreign key (Spe_id)
references Specialties (Spe_id);

Alter Table Doctors
add constraint Dr_Acc_fk foreign key (Acc_id)
references Accounts (Acc_id);

-------------------------------------------------------------------
create table Projects(
	Pro_id int primary key,
	Pro_name varchar(20) not null,
	Rating Varchar(10),
	Tools varchar(5) check(Tools in ('C','C++','C#')),
	Pro_Type varchar(15) check(Pro_Type in ('Writing','Implimanting','Projramming')),
	
	S_date date,
	Secound_date date,
	Last_date date,
	Proposal varbinary,
	Presentation varbinary,
	Project varbinary,

	Spe_id int not null,
	Dr_id int,
	ProMa_id int,
);

Alter Table Projects
add constraint Pro_dr_fk foreign key (Dr_id)
references Doctors (Dr_id);

Alter Table Projects
add constraint Pro_spe_fk foreign key (Spe_id)
references Specialties (Spe_id);

Alter Table Projects
add constraint Pro_proma_fk foreign key (ProMa_id)
references ProManager (ProMa_id);

-------------------------------------------------------------------
create table ProManager(
	ProMa_id int primary key,
	f_name varchar(20) not null,
	m_name varchar(20) not null,
	l_name varchar(20) not null,
	phone varchar(15) Unique,
	Email varchar(30) not null Unique,
	Acc_id int,
);

Alter Table ProManager
add constraint ProMa_Acc_fk foreign key (Acc_id)
references Accounts (Acc_id);

-------------------------------------------------------------------
Drop Database FutureProjects
-------------------------------------------------------------------
Drop Table Doctors
-------------------------------------------------------------------
