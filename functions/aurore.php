<?php

// namespace firstname;

function checkPassword($password) {
    echo '<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary">Test du mot de passe</button> </div>';
    echo '<h1 class="text-center">Aurore</h1>';
    echo 'Mot de passe : <br>';
    echo '<div class="text-end">Force du mot de passe </div>';
    echo '<div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div> 
  </div> <br>';

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 12) {
   
  echo ' <div class =row> 
            <div class="col-4 mx-auto">   
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Le mot de passe doit contenir au moins : </li>
                    <li class="list-group-item">1 chiffre </li>
                    <li class="list-group-item">1 minuscule </li>
                    <li class="list-group-item">1 majuscule </li>
                    <li class="list-group-item">1 caractère spécial </li>
                    <li class="list-group-item">12 caractères </li>
                </ul>
            </div>
        </div>';

} else {

    echo 'Mot de passe valide. <br>
     <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>';
}
    


}
?>
