TYPE=VIEW
query=select `agregat`.`users_data`.`Name` AS `Name`,`agregat`.`users_data`.`Surname` AS `Surname`,`agregat`.`users_data`.`Date_of_birth` AS `Date_of_birth`,`agregat`.`users_data`.`Adress` AS `Adress`,`agregat`.`users`.`Username` AS `Username`,`agregat`.`users`.`E-mail` AS `E-mail`,`agregat`.`users`.`Description` AS `Description` from (`agregat`.`users` join `agregat`.`users_data`) where (`agregat`.`users`.`ID_user` = `agregat`.`users_data`.`ID_user_data`)
md5=d9b6fdf883086114c4c20c68a171f5bb
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-01-19 16:45:01
create-version=1
source=select `users_data`.`Name` AS `Name`,`users_data`.`Surname` AS `Surname`,`users_data`.`Date_of_birth` AS `Date_of_birth`,`users_data`.`Adress` AS `Adress`, `users`.`Username` AS `Username`, `users`.`E-mail` AS `E-mail`, `users`.`Description` AS `Description`from (`users` join `users_data`) where (`users`.`ID_user` = `users_data`.`ID_user_data`)
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `agregat`.`users_data`.`Name` AS `Name`,`agregat`.`users_data`.`Surname` AS `Surname`,`agregat`.`users_data`.`Date_of_birth` AS `Date_of_birth`,`agregat`.`users_data`.`Adress` AS `Adress`,`agregat`.`users`.`Username` AS `Username`,`agregat`.`users`.`E-mail` AS `E-mail`,`agregat`.`users`.`Description` AS `Description` from (`agregat`.`users` join `agregat`.`users_data`) where (`agregat`.`users`.`ID_user` = `agregat`.`users_data`.`ID_user_data`)
