<?php
    if(isset($_POST['nom'])){
        $err=0;
        if(empty($_POST['nom'])){
            $err=1;
        }else{
            $nom=htmlspecialchars($_POST['nom']);
        }

        if(empty($_POST['theme'])){
            $err=1;
        }else{
            $theme=htmlspecialchars($_POST['theme']);
            
            // vérifier les valeurs du theme
        }

        

        if($err==0){
            setcookie("nom",$nom,time()+(365*24*3600),null,null,false,true);
            setcookie("theme",$theme,time()+(365*24*3600),null,null,false,true);
            header("LOCATION:index.php?success=ok");
        }else{
            header("LOCATION:index.php?error=".$err);
        }

    }else{
        header("LOCATION:index.php");
    }

 