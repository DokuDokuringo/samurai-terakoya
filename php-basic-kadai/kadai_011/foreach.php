<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題011</title>
</head>
<body>
    <?php
    $data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    foreach($data as $key => $value) {
        echo "{$key}:{$value}<br>";  
    }
    ?>
</body>
</html>