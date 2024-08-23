<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラス課題</title>
</head>

<body>
  <p>
    <?php
      // クラスを定義する
      class Food {
        
        // プロパティを定義する
        private $name;
        private $price;
        
        // プロパティの値を出力するメソッドを作成
        public function show_price() {
          echo $this->price. '<br>';
        }

        // コンストラクタの定義
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
      }

      $potato = new Food('potato', 250);

      // クラスを定義する
      class Animal {

        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // プロパティの値を出力するメソッドを作成
        public function show_height() {
          echo $this->height;
        }

        // コンストラクタの定義
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }

      $dog = new Animal('dog', 60, 5000);

      print_r($potato);
      echo '<br>';

      print_r($dog);
      echo '<br>';

      $potato->show_price();
      $dog->show_height();
    ?>
  </p>
</body>
</html>