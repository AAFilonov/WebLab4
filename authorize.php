<?php 
    // данные были отправлены формой? 
    if($_POST["Submit"]){ 
    // проверяем данные на правильность и при совпадении дать доступ пользователю... 
        if(($_POST["user_name"]=="admin")&&($_POST["user_pass"]=="admin")){ 
            $_SESSION["logged_user"] =1; 	// Устанавливаем флаг авторизации и переправляем пользователя на <секретную> страницу... 
            header("Location: secretplace.php"); 
            exit; 
        } 
    }    // если что-то было не так, то пользователь  получит сообщение об ошибке. 
?> 

<html>
<body> 
	Вы ввели неверный пароль! 
</body> 
</html> 
