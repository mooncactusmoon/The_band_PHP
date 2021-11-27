<?php
//上下頁判斷
    if (isset($_GET['i'])) {
        $i = $_GET['i'];
    }else{
        $i = 1;
    }
    $next=$i+1;
    $last=$i-1;
    if($next==7){
        $next=1;
    }
    if($last==0){
        $last=6;
    }
//上下頁切換完畢

//中英文切換
    if(isset($_GET['lan'])){
        $lan = $_GET['lan'];
    }else{
        $lan='c';
    }
    if($lan=='c'){
        $chioce_name = "name_c";
        $chioce_text = "text_c";
    }else if($lan=='e'){
        $chioce_name = "name_e";
        $chioce_text = "text_e";
    }
//中英文切換完畢

$dsn="mysql:host=localhost;charset=utf8;dbname=front_end";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `front_hw01` WHERE `id`='$i'";

$page=$pdo->query($sql)->fetch();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE BAND</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body{
            width: 90%;
            margin:auto;
            background-color: rgba(0, 0, 0, .8);
            background-blend-mode: multiply;
            background-image: url('./img/bg.jpg');
        }
        i{
            font-size: 50px;
        }
        section{
            filter: drop-shadow(0px 0px 10px green) invert(90%);
        }
        p{
            font-size: 20px;
        }

    </style>
    <script>
        
        function c(){
            location.href='index.php?i=<?= $i;?>&lan=c';
        }
        
        function e(){
            location.href='index.php?i=<?= $i;?>&lan=e';
        }

    </script>
</head>

<body>
    <div class="contain mt-3 ">
        <main class="text-center">
            <div class="d-flex justify-content-end mr-5">
            <button type="button" class="btn btn-light" onclick="c()" id="btn_c">中文</button>
            <button type="button" class="btn btn-light ml-2" onclick="e()" id="btn_e">English</button>
            </div>
            <div class="justify-content-center mt-3">
                <img src="./img/<?= $page['img'];?>" alt="band" width="640" height="427" class="rounded img-thumbnail">
            </div>
            <div class="row mt-3">
                <!-- 切換上頁 -->
                <div class="col-sm-2"><a href="index.php?i=<?= $last;?>&lan=<?= $lan;?>"><i class="fas fa-angle-double-left text-light"></i></a></div>
                
                <!-- 圖片及文字 -->
                <section class="col-sm-8 box border rounded bg-light mt-5">
                    <header class="text-center mt-3 h3" id="h"><?= $page[$chioce_name];?></header>
                    <p class="div text-center mt-5" id="p">
                        <?= $page[$chioce_text]; ?>
                    </p>
                </section>
                
                <!-- 切換下頁 -->
                <div class="col-sm-2"><a href='index.php?i=<?= $next;?>&lan=<?= $lan;?>'><i class="fas fa-angle-double-right text-light "></i></a></div>
            </div>
            
        </main>
        <footer class="text-center mt-3 text-black">&copy;Cacuts月</footer>
    </div>
    <!-- bootstrap4.6 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>