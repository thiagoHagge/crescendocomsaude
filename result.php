<?php
require_once('db.php');

$score_list = Array(
    "noned" => [0, ''],
    "nonef" => [-2, ''],
    "biscoito" => [-1, 'm'],
    "cereal" => [-1, 'm'],
    "fruta" => [2, 'v'],
    "pao" => [1, 'm'],
    "queijo" => [1, 'l'],
    "presunto" => [-1, 'p'],
    "toddy" => [-2, 'g'],
    "paodequeijo" => [1, 'm'],
    "ovo" => [2, 'c'],
    "manteiga" => [-1, 'g'],
    "salgadinho" => [-2, 'g'],
    "salgado" => [-2, 'g'],
    "granola" => [2, 'm'],
    "salame" => [-2, 'g'],
    "refri" => [-2, 'g'],
    "sucoF" => [1, 'v'],
    "agua" => [1, ''],
    "sucoC" => [-2, 'g'],
    "iogurte" => [1, 'l'],
    "vitamina" => [2, 'v'],
    "cafe" => [-1, ''],
    "leite" => [1, 'l'],
    "feijao" => [1, 'le'],
    "arroz" => [1, 'm'],
    "macarrao" => [1, 'm'],
    "batataF" => [-1, 'g'],
    "hamburger" => [-1, 'g'],
    "nugget" => [-2, 'g'],
    "bife" => [1, 'p'],
    "batataF" => [-2, 'g'],
    "carne" => [1, 'p'],
    "bolo" => [-1, 'm'],
    "frango" => [1, 'p'],
    "salada" => [2, 'v'],
    "omelete" => [2, 'p'],
    "pizza" => [-2, 'g'],
    "verdura" => [2, 'v'],  
    "strogonoff" => [1, 'p'],  
    "farofa" => [0, 'm'],
    "boloP" => [-2, 'g'],
    "cerealN" => [1, 'm'],
    "sopa" => [1, 'v'],
);

$meal = $_POST['meal'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$food_array = $_POST['food'];
$drink_array = $_POST['drink'];
$food = '';
$drink = '';
$score = 0;
$carb = 0;
$protein = 0;
$fat = 0;
$goodmeat = 0;

for($i = 0; $i < count($food_array); $i++)  {
    $score = $score + $score_list[$food_array[$i]][0];
    if ($score_list[$food_array[$i]][1] == 'c') {
        $carb = 1;
    }
    if ($score_list[$food_array[$i]][1] == 'p') {
        $protein = 1;
    }
    if ($score_list[$food_array[$i]][1] == 'g') {
        $fat = 1;
    }
    if($i < count($food_array) - 1) {
        $food = $food.$food_array[$i].', ';
    } else {
        $food = $food.$food_array[$i];
    }
    
};
$goodmeat = $carb + $protein + $fat;
for($i = 0; $i < count($drink_array); $i++)  {
    $score = $score + $score_list[$drink_array[$i]][0];
    if($i < count($drink_array) - 1) {
        $drink = $drink.$drink_array[$i].', ';
    } else {
        $drink = $drink.$drink_array[$i];
    }
};



$objDb = new db();
$link = $objDb->connect_mysql();
$sql = " insert into alimentacao(refeicao, sexo, idade, comida, bebida, score) values ('$meal', '$gender', '$age', '$food', '$drink', '$score') ";

mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resultado - Crescendo com Saúde</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/quiz.css">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/result.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;531;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
    </head>

    <body>
        

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="menu-nav">
            
            <a class="navbar-brand mr-auto" href="index.html"><img id="logo" src="img/nav-logo.png" alt=""></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item active dropdown mr-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quiz
                        </a>
                        <div class="dropdown-menu" id="drop-quiz" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " id="drop-itens" href="letsbreakfast.html">Monte o seu café da manhã</a>
                            <a class="dropdown-item" id="drop-itens" href="letslunch.html">Monte o seu almoço</a>
                            <a class="dropdown-item" id="drop-itens" href="letsdinner.html">Monte o seu jantar</a>
                        </div>
                    </li>
                    <li class="nav-item active mr-5">
                        <a class="nav-link" href="feed.html">Alimentação <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-5 active">
                        <a class="nav-link" href="about_us.html">Quem somos <span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
                
            
        </nav>

        <div class="container first-content">
            <div class="row main-title">
                    <h1>Resultados</h1>
            </div>
            <div class="row">
                <h2 class="title-box mr-auto ml-auto">
                    <?php 
                        if($score > 0) {
                            echo "Parabéns! Sua alimentação está ótima";
                            echo "<audio src='audio/yes.m4a' autoplay></audio>";
                        } else {
                            echo "Podemos melhorar...";
                            echo "<audio src='audio/no.mp3' autoplay></audio>";
                        }
                    ?>
                </h2>

            </div>
            <div class="row">
                <h2>Você escolheu:</h2>
                <div class="card mb-3">
                    <div class="row">
                        
                        <div class="card-body">

                            
                            <div class="col-12">
                                
                                
                                
                                <h3>Comidas</h3>
                                
                            

                                <?php 
                                    for($i = 0; $i < count($food_array); $i++) {
                                        echo '<img class="self-food" src="img/food/'.$food_array[$i].'.png" alt="'.$food_array[$i].'">';
                                      
                                    };
                                ?>
                            
                            </div>
                            <div class="col-12 mt-2">
                                <h3>Bebidas</h3>

                                
                                    
                                <?php 
                                    for($i = 0; $i < count($drink_array); $i++) {
                                        if($drink_array[$i] == 'cafe') {
                                            echo '<a href="posts/post01.html"><img class="self-food" src="img/food/'.$drink_array[$i].'.png" alt="'.$drink_array[$i].'"></a>';

                                        } else {
                                            echo '<img class="self-food" src="img/food/'.$drink_array[$i].'.png" alt="'.$drink_array[$i].'">';
                                        
                                        };
                                    };
                                ?>
                                <br><strong>Clique nos alimentos</strong>
                            </div>
                        </div>

                    </div>
               
                    
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                            <img src="img/result-image.png" width="100%" alt="">
                </div>

            </div>
            <div class="row">
                <?php 
                    if($meal == 'B') {
                        echo "<a href='lunch.php' class='btn btn-success btn-quiz my-3 ml-auto'>Agora conte-nos sobre seu almoço</a>";
                    }   elseif ($meal == 'L') {
                        echo "<a href='dinner.php' class='btn btn-primary btn-quiz my-3 ml-auto'>Agora conte-nos sobre seu jantar</a>";
                    }   elseif ($meal == 'L') {
                        echo "<a href='breakfast.php' class='btn btn-danger btn-quiz my-3 ml-auto'>Agora conte-nos sobre seu café da manhã</a>";
                    }
                ?>
            </div>
    
        </div>
        
        



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="quiz.js"></script>
        <script src="default.js"></script>

    </body>
</html>