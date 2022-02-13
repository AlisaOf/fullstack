<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$errors =[];

$file = $_FILES['file'];
if (!$file['name']) {
    $errors[] = 'Вы не загрузили изображение';
} else {
    $type = $file['type'];
    $type = explode('/', $types);

     if ($type[0] != 'image') {
    $errors[] = 'Файл должен быть изображением';
    }
}

$name = $_POST['name'];
$discription = $_POST['discription'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];

if (!$name) {
    $errors[] = 'Наименование не может быть пустым';

}
if (!$description) {
    $errors[] = 'Описание не может быть пустым';

}
if (!$price) {
    $errors[] = 'Необходимо указать цену';

}
if (!$category_id) {
    $errors[] = 'Вы не выбрали категорию';

}



if (count ($errors)) {
    
    $_SESSION['lastProductCreate'] = [
        'name' => $name,
        'description' => $discription,
        'price' => $price,
        'category_id' => $category_id
    ];

    $_SESSION['createProductErrors'] = $errors;
    header ("Location: /pages/admin/products.php");
    exit();
}

$temp = explode('.', $file['name']);
$ext = $temp[count($temp) - 1];
$fileName = time() . rand(10000,99999) . '.' . $ext;


move_uploaded_file($file['tmp_name'], "$document_root/images/products/$fyleName");
$query = "INSERT INTO products (name, discription, price, category_id, picture)
          VALUES(:name, :discription, :price, :category_id, :picture)";

$res = $pdo->prepare($query);
$res->execute([
    ':name' => $name,
    ':discription' => $discription,
    ':price' => $price,
    ':category_id' => $category_id,
    ':picture' => $fileName
]);        

header ("Location: /pages/admin/products.php");
//require_once '../templates/footer.php'; 
