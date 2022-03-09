TYPE=VIEW
query=select `agregat`.`users`.`Username` AS `Username`,`agregat`.`users`.`Email` AS `Email`,`agregat`.`users`.`Description` AS `Description`,`agregat`.`users_data`.`Name` AS `Name`,`agregat`.`users_data`.`Surname` AS `Surname`,`agregat`.`users_data`.`Date_of_birth` AS `Date_of_birth`,`agregat`.`users_data`.`Adress` AS `Adress` from (`agregat`.`users` left join `agregat`.`users_data` on((`agregat`.`users`.`ID_user` = `agregat`.`users_data`.`ID_user_data`)))
md5=f1828cd6d5b3e7166b883179360f9a63
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-03-08 16:36:14
create-version=1
source=select `users`.`Username` AS `Username`,`users`.`Email` AS `Email`,`users`.`Description` AS `Description`,`users_data`.`Name` AS `Name`,`users_data`.`Surname` AS `Surname`,`users_data`.`Date_of_birth` AS `Date_of_birth`,`users_data`.`Adress` AS `Adress` from `users` LEFT JOIN `users_data` ON `users`.`ID_user` = `users_data`.`ID_user_data`
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `agregat`.`users`.`Username` AS `Username`,`agregat`.`users`.`Email` AS `Email`,`agregat`.`users`.`Description` AS `Description`,`agregat`.`users_data`.`Name` AS `Name`,`agregat`.`users_data`.`Surname` AS `Surname`,`agregat`.`users_data`.`Date_of_birth` AS `Date_of_birth`,`agregat`.`users_data`.`Adress` AS `Adress` from (`agregat`.`users` left join `agregat`.`users_data` on((`agregat`.`users`.`ID_user` = `agregat`.`users_data`.`ID_user_data`)))
