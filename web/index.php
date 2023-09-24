<?php
declare(strict_types=1);

echo 'I\'m alive!';
echo '<br>';
echo 'Автор: Пронин В.В.';

?>

<form action="post.php" enctype="multipart/form-data" method="POST">
    <label for="userName">Введите ФИО</label>
    <input name="userName" id="userName" type="text" />
    <input type="submit" name="submit" value="Отправить" />
</form>