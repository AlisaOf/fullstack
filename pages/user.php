<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class='container mt-5'>

<?php

//echo $_GET['id'];
//echo '<br>';
//echo $_GET['login']; как пример

#echo '<pre>';
#print_r($_SESSION); 
#unset ($_SESSION['test']); очищаем сессию


$user = $password = 'root';
$pdo = new Pdo ('mysql:dbname=fullstack;host=127.0.0.1', $user, $password);
$userId = $_GET['id'];

# попытаться найти пользователя в базе
# если есть, вывести его логин
# если нет, вывести сообщение "пользователь не найден"


$query = 'SELECT * FROM users WHERE id = :id';
$res = $pdo->prepare($query);
 $res->execute([
     ':id' => $userId,
    
 ]);

 $user = ($res->fetch());

 if ($user) {

$query = "SELECT * FROM cities";
$res = $pdo->query($query);
$cities = $res->fetchAll();

//if ($user) {
//    echo "Найден пользователь {$user['login']}";
//} else {
//  echo "Пользоаватель с id $userId не найден";
//}

if (isset ($_SESSION['error'])) {
  echo
  "
   <div class='alert alert-danger text-center' role='alert'>
       {$_SESSION['error']}
   </div>
  ";
  unset($_SESSION['error']);
} else if (isset ($_SESSION['success'])) {
  echo
  '
  <div class="alert alert-success text-center" role="alert">
      Обновления сохранены
  </div>
 ';
  unset($_SESSION['successr']);
}


?>
       <form method="post" action="../actoins/update_user.php">
        <label>Имя</label>
          <input name='id' hidden value='<?=$user['id']?>'>
          <input class="form control md-2" name='name' value='<?=$user['name']?>'>
        <label>Логин</label>
          <input class="form control md-2" name='login' value='<?=$user['login']?>'>
          <select class="form-control mb-2" name="city_id">
                <?php
                  if (!$user['city_id']) {
                   echo '<option selected disabled>-- Выберите город --</option>';
                  } else
                  foreach ($cities as $city) {
                      $selected = $city['id'] == $user['city_id'] ? 'selected' : '';
                      echo "<option $selected value='{$city['id']}'>{$city['name']}</option>";
                  }
              ?>
         </select>  
        <button type='submit' class="btn btn-success w-100">СОХРАНИТЬ</button>
       </form>

        <?php
        } else {
          echo 
          '
          <div class="alert alert-warning" role="alert">
              Пользователь не найден
          </div>
          ';
        }
        ?>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html> 

