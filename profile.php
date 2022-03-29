<?php
   require_once 'user.php';
   session_start();
   header('Content-type: text/html; charset=utf-8');
    if (!isset($_SESSION['user_login'])) {
        header('Location: login.php');
    }

    $user = new User();

    if (!empty($_POST)) {
    	$user->load_from_form();
    	$user->save_to_session();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div id="content">
	    <form action="" method="post">
	      <h3>Данные</h3>
	        <input type="text" name="name" placeholder="Имя" value="<?php echo $user-> get_name();?>"><br>
	        <input type="text" name="surname" placeholder="Фамилия"><br>
	        <input type="text" name="age" placeholder="Возраст"><br>
	        <input type="submit" name="">
	    </form>
	</div>
</body>
</html>