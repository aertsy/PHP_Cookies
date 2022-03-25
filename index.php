<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
        if(isset($_COOKIE['theme'])){
            if($_COOKIE['theme']=="PINK"){
                echo '<link rel="stylesheet" href="style3.css">';
            }elseif($_COOKIE['theme']=="BLUE"){
                echo '<link rel="stylesheet" href="style2.css">';
            }else{
                echo '<link rel="stylesheet" href="style.css">';
            }
        }else{
            echo '<link rel="stylesheet" href="style.css">';
        }
    ?>
    
</head>
<body>
    <header>
        <h1>Conception Web</h1>
    </header>
    <section>
        <?php
            if(isset($_COOKIE['nom'])){
                echo "
                    <div>
                        <h2 class='text-center'>Hello ".$_COOKIE['nom']."</h2>
                    </div>";
                echo "<h3 class='text-center'>Tu veux changer de thème?</h3>";
                echo 
                "<div class='row text-center justify-content-center'>
                    <form action='modification.php' method='POST' class='form-group my-2 w-25 text-center'>
                        <select name='newtheme' id='newtheme' class='form-control'>
                            <option value='RED'>Rouge</option>;
                            <option value='BLUE'>Bleu</option>;
                            <option value='PINK'>Rose</option>;
                        </select>
                <div>
                    <input type='submit' value='Envoyer' class='form-control w-25 my-2'>
                </div>
                    </form>
                ";
            }else{
                ?>
            <div class="row">
        <form action="changement.php" method="POST" class='form-group  text-center justify-content-center'>
            <div>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" placeholder="Ex: Mon nom" class='form-control'>
            </div>
            <div>
                <label for="theme">Choisis ton thème</label>
                <select name="theme" id="theme" class='form-control'>
                    <option value="RED">Rouge</option>
                    <option value="BLUE">Bleu</option>
                    <option value="PINK">Rose</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Envoyer" class='form-group my-4'>
            </div>
        </form>
        </div>
        <?php
            } 
        ?>
    </section>
    <footer>
        Site réalisé par la classe de BI2 Option Web &copyEPSE
    </footer>
</body>
</html>