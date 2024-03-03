<?php

// Разрешим принимать и отправлять запросы на сервер
header('Access-Control-Allow-Origin: *');

// Установим типы запросов, которые следует разрешить (все неуказанные будут отклоняться)
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

// Разрешим передавать Cookie и Authorization заголовки для указанного в Origin домена
header('Access-Control-Allow-Credentials: true');

// Установим заголовки, которые можно будет обрабатывать
header('Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Accept, X-PINGOTHER, Content-Type');

// Получаем информацию из файла points.json
$pointsJson = file_get_contents('points.json');

// Выводим информацию из файла в поток
echo $pointsJson;
