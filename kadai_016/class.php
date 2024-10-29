<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題16</title>
 </head>
 
 <body>
     <p>
     <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;

             
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
                }

             //  メソッドを定義する
             public function set_price(int $price) {
             $this->price = $price;
             }

             public function show_price() {
                echo $this->price . '<br>';
             }
         }
 
         // インスタンス化する
         $food = new Food ('ラーメン', 1300);
 
         // インスタンス$foodの各プロパティの値を出力する
         print_r($food);

         echo "<br>";

         // クラスを定義する
         class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;
            
           //  メソッドを定義する
            public function set_height (int $height) {
               $this->height = $height;
           }
           public function show_height() {
               echo $this->height . '<br>';
           }

            // コンストラクタを定義する
            public function __construct(string $name, int $height , int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $animal = new Animal ('くま', 2000 , 300);

        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);

        echo "<br>";

        $food -> show_price();
        $animal -> show_height();

         ?>
     </p>
 </body>
 
 </html>