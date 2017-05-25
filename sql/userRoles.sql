SELECT 
-- *
U.name, U.email, R.name AS role 
FROM `laravel.masphere`.users AS U 
	INNER JOIN role_users AS Ru ON U.id = Ru.user_id
    INNER JOIN roles AS R ON R.id = Ru.role_id;