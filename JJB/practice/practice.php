<?php
    // $stringOne = 'my email is ';
    // $stringTwo = 'jsjoy7890@gmail.com';
    // $name = 'joy';

    // $raidus = 25;
    // $pi = 3.14;

    // $ninjas = ['joy','rasel','rana'];
    // // for($i = 0; $i <count($ninjas); $i++){
    // //     echo $ninjas[$i]. '<br>';
    // // }
    // foreach($ninjas as $ninja){
    //     echo $ninja . '<br>';
    // }

    // $products = [
    //     ['name' => 'siny star', 'price' => 20],
    //     ['name' => 'greeen star', 'price' => 40],
    //     ['name' => 'gold star', 'price' => 50],
    //     ['name' => 'red star', 'price' => 60],
    //     ['name' => 'banana', 'price' => 500],
    //     ['name' => 'mango', 'price' => 80],

    // ];
    // foreach($products as $product) {
    //     echo $product['name'] . ' - ' . $product['price'];
    //     echo '<br>';
    // }
    //$i = 0;

    // while($i < count($products)){
    //     echo $products[$i]['name'];
    //     echo '<br>';
    //     $i++;
    // }

    # Boolene function 
    // echo 'joy'> 'jahirul';
    // echo 5 ==='5';

    # Conditaion Function 

    // $price = 30;

    // if ($price < 50){
    //     echo 'The codintoin is met !';
    // }
    // elseif ($price > 49 ){
    //     echo 'also met';
    // }
    // else{
    //     echo 'doesnt met';
    // }

    $products = [
        ['name' => 'siny star', 'price' => 20],
        ['name' => 'greeen star', 'price' => 40],
        ['name' => 'gold star', 'price' => 50],
        ['name' => 'red star', 'price' => 60],
        ['name' => 'banana', 'price' => 500],
        ['name' => 'mango', 'price' => 80],

    ];

    // foreach($products as $product)
    // {
    //     if($product['price'] < 60){
    //         echo $product['name']. '<br>';
    //     }
    // }

    # functions 

    // function formatProduct($product){
    //     // echo " {$product['name']} costs  $ {$product['price']} to buy <br>";
    //     return " {$product['name']} costs  $ {$product['price']} to buy <br>";
    // }
    // $formatted = formatProduct(['name' => 'gold star ' , 'price' => 60 ]);
    // echo $formatted; 

    // function hello($name = 'joy', $time = 'mornig'){
    //     echo "Good  $time $name";
    // }
    // hello();

    # Local variable and global variable 

    // function myfunc($age){
    //     echo $age;
    // }
    // myfunc(25);

    // $name = 'mario';

    // function hello(){
    //     global $name;
    //     $name = 'joy'; # it also change the value cause now it is golbal variable.
    //     echo "hello $name <br>" ;
    // }
    // hello();
    // echo $name;

    // $name = 'mario';
    // function saybye(&$name){
    //     $name = 'wario';
    //     echo "bye $name <br>";

    // }
    // saybye($name);
    // echo $name;

    # For using the othe file have to use the include or require fuuction and aslo the file name inside the function. 
    


    // # Ternary oparation
    // $score = 50;

    // echo $score > 40 ? 'high score!' : 'low score';

    # Super global
    // echo $_SERVER['SERVER_NAME'].'<br>';
    // echo $_SERVER['REQUEST_METHOD'].'<br>';
    // echo $_SERVER['SCRIPT_FILENAME'].'<br>';
    // echo $_SERVER['PHP_SELF'].'<br>';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice </title>
</head>
<body>
    <?php
        // echo "$stringOne $stringTwo";
        //echo "$name[0]";
        // echo str_replace('j','v',$name);

        // echo floor($pi);
        // echo ceil($pi); 

    ?>

<!-- <h1>Products </h1>

<ul>
        <?php foreach($products as $product) { ?>

        <h3> <?php echo $product['name']; ?></h3>
        <p>$ <?php echo $product['price'];?></p>
        

        <?php } ?>
</ul> -->

<!-- <div>
            <ul>
                <?php foreach($products as $product) { ?> 
                
                    
                    <?php if ($product['price']<60) { ?>
                        <li> <?php echo $product['name']; ?></li>

                    <?php }?>

                    
                <?php } ?>
            </ul>
</div> -->


</body>
</html>