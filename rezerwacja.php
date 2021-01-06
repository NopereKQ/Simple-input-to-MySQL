<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="server.php" autocomplete="off">
      <div id="mobtextdiv">
        <input type="text" class="mobtextbox mobtextbox1" name="name" placeholder="Imie">
        <input type="text" class="mobtextbox mobtextbox2" name="lastname" placeholder="Nazwisko">
        <input type="text" class="mobtextbox mobtextbox1" name="telephone" placeholder="Numer Telefonu">
        <input type="text" class="mobtextbox mobtextbox2" name="tablenumber" placeholder="Numer stolika">
        <input type="text" class="mobtextbox mobtextbox1" name="numberofpeople" placeholder="Ilość osób">
        <input type="text" class="mobtextbox mobtextbox2" name="date" placeholder="Data">
      </div>
      <div class="mobloginbuttondiv">
        <button type="submit" class="mobloginbutton" name="reg_user" value="Log In">Zarezerwuj!</button>
      </div>
    </form>
</body>
</html>