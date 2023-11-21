<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題016</title>
</head>
<body>
    <?php
    class Food {
        private $name;
        private $price;
        public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
        }
    }
    $food = new Food('potato', 250)
    ?>
</body>
</html>