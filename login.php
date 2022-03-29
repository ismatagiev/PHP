<?php 
    session_start();
    if ($_GET['act'] === 'logout') {
    	unset($_SESSION['user_login']);
    }
    if (!empty($_POST['name']) && !empty($_POST['pas'])) {
        $name = $_POST['name'];
        $password = $_POST['pas'];
      //авторизация успешна
        if ($name === 'ismail' && $password === '1106') {
        	$_SESSION['user_login'] = $name;
        	header('Location: index.php');
        }
        else{
        	echo "Error, please write again";
        } 
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="content">
		<form action="" method="post">
		 <h3>Авторизация</h3>
		 	<input type="text" name="name" placeholder="Логин"><br>
		 	<input type="text" name="pas" placeholder="Пароль"><br>
		 	<input type="text" name="age" placeholder="Возраст"><br>
		 	<input type="text" name="surname" placeholder="Фамилия"><br>
		 	<input type="submit" name="">
		</form>
	</div>
</body>
</html>