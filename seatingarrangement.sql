NOTE: room table will automatically be created. 
Other tables are here: 


create table users( users-id int PRIMARY KEY,
                    username char(25),
                    password char(25),
                    email char(25)
                  );
                     

      
create table student(  ROLL_NO int, 
                       ROOM_NO char(5),
                     );
                     
create table faculty( INVIGILATOR_NAME char(25),
                      ROOM_NO char(5),
                      TIMING  char(25),
                     );








