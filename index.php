<?php
//2. Веб-разработка
//На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.
//Обратите внимание на размер и пропорции, и подумайте о времени загрузки.
//Пришлите ссылку на репозиторий с решением
//Важно: решение требует использования PHP, сжатие картинки средствами HTML/CSS является некорректным решением.

$image = imagecreatefrompng("destoryer.png");
$image2 = imagescale($image, 200, 100);
imagepng($image2, "image.png");
echo "<img  src='image.png'/>";