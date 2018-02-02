<?php 
	  setcookie("cknnnn", "ckvvv", (time() + 3600)  ); // если нет значения null

	session_start(); // начало сессии
	echo "SESSIONS";

	var_dump( $_SESSION ); 

	$_SESSION["login"] = "ivan"; 

	// unset($_SESSION["name"]);
	// isset проверка на сущ-ние сессиии
    // session_destroy уничт данных при закр-тии

    echo session_id() . "<br>"; // id сессии
    echo session_name(); // имя сессии
    echo session_save_path(); //где храняться на сервере

    //время жизни сессии и куков 1440 сек по ум-ю
    // в конфиге php ini - разд seesion

    var_dump( $_COOKIE );

    // установка куков

    // ссессия пол часа норма если что далее инфа в куки

   // setcookie("cknnnn", "ckvvv", (time() + 3600), "goo.ru", true, true); // если нет значения null
   //setcookie("cknnnn", "ckvvv", (time() + 3600)  ); // если нет значения null



// Пароли храним в зашиф-ом виде -- md5(); sha1() не испоьзуем

password_hash(); // хэщирование паролей
password_verify(); // проверка пароля


var_dump( password_hash("1234", PASSWORD_DEFAULT) );

if (password_verify($pwd, $pwd_form));





	



?>