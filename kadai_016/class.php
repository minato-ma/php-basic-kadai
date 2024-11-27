<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>課題16</title>
    </head>
    <body>
        <p>
            <?php
            class Food{
                private $name;
                private $price;
                public function __construct(string $name,int $price){
                    $this->name=$name;
                    $this->price=$price;
                }
                public function show_price(){
                    return $this->price.'<br>';
                }
            }
        $food=new Food('potato',250);
        print_r($food);
        echo '<br>';
       
        
            class Animal{
                private $name;
                private $height;
                private $weight;
                public function __construct(string $name,int $height,int $weight){
                    $this->name=$name;
                    $this->height=$height;
                    $this->weight=$weight;
                } 
                public function show_height(){
                    return $this->height.'<br>';
                }
            }
        $animal=new Animal('dog',60,5000);
        print_r($animal); 
        echo '<br>';    

         $price=250;
        print_r($price);
        echo '<br>'; 

        $height=60;
        print_r($height);
        echo '<br>';
        
            ?>
         </p>
    </body>
</html>