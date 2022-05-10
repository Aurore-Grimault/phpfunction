<?php

// namespace firstname;

function checkPassword($password) {
    echo '<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary">Test du mot de passe</button> </div>';
    echo '<h1 class="text-center">Aurore</h1>';
    echo 'Mot de passe :' .$password;
    echo '<br>';
    echo '<div class="text-end">Force du mot de passe </div>';
    echo '<div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div> 
  </div> <br>';

    $number    = preg_match('@[0-9]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $specialChars = preg_match('@[$#.*]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 12) {
   
    echo ' <div class =row> 
            <div class="col-4 mx-auto">   
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"> Le mot de passe doit contenir au moins : </li>';

                    if (!$number) {
                        echo '<li class="list-group-item"> 1 chiffre </li>';
                    }
                    else {
                        echo '<li class="list-group-item"> 1 chiffre ok </li>';
                    }

                    if (!$lowercase) {
                        echo '<li class="list-group-item"> 1 minuscule </li>';
                    }
                    else {
                        echo '<li class="list-group-item"> 1 minuscule ok </li>';
                    }

                    if (!$uppercase) {
                        echo '<li class="list-group-item"> 1 majuscule </li>';
                    }
                    else {
                        echo '<li class="list-group-item"> 1 majuscule ok </li>';
                    }
                    
                    if (!$specialChars) {
                    echo '<li class="list-group-item"> 1 caractère spécial </li>';
                    }
                    else {
                        echo '<li class="list-group-item"> 1 caractère spécial ok </li>';
                    }

                    if (strlen($password) < 12) {
                        echo '<li class="list-group-item"> 12 caractères </li>';
                    }
                    else {
                        echo '<li class="list-group-item"> 12 caractères ok </li>';
                    }
        
                echo '</ul>
            </div>
        </div>';

} else {

    echo '<div> Mot de passe valide. </div> <br>';    
    echo '<div class =row>
            <div class="col-1 mx-auto">  
            <a class="btn btn-success me-3" role="button" href="./index.php/">  Ok </a>' ; 
            } 

}  


?>
