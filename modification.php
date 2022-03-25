<?php
if(isset($_POST['newtheme'])){
    $err=0;
  
    if(empty($_POST['newtheme'])){
        $err=1;
    }else{
        $theme=htmlspecialchars($_POST['newtheme']);
        
        // vérifier les valeurs du theme
    }

    

    if($err==0){
        setcookie("theme",$theme,time()+(365*24*3600),null,null,false,true);
        header("LOCATION:index.php?success=newtheme"); 
    }else{
        header("LOCATION:index.php?error=".$err);
    }

}else{
    header("LOCATION:index.php");
}

