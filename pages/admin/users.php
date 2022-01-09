<?php
$title = 'Список пользователей';
require '../../templates/header.php';

$query = "SELECT * FROM users";
$res = $pdo->query($query);
$users = $res->fetchAll();

$query = "SELECT * FROM cities";
$res = $pdo->query($query);
$cities = $res->fetchAll();

echo "
<table class='table table-bordered'>
    <thead>
       <tr>
         <th>id</th>
         <th>логин</th>
         <th>имя</th>
         <th>id города</th>
       </tr>
    </thead>
    <tbody>   
";

foreach ($users as $user) {
 $city = $user['city_id'] ? $user['city_id'] : '-';


    echo "
        <tr>
            <td>{$user['id']}</td>
            <td>{$user['login']}</td>
            <td>  
              <a href='pages/user.php?id={$user['id']}'>
                 {$user['name']}
              </a>
            </td>     
            <td>{$city}</td>
            <td class='text-center'>
              <form method='post' action='actions/del.user.php'>
                <input type='hidden' name='id' value='{$user['id']}'>
                  <button type='submite' class='btn btn-danger'>x</button>
              </form>
              </td>
        </tr>
    ";
}

echo "</tbody>
</table>";