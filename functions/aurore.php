<?php

// namespace firstname;

function checkPassword($password) {
    echo '<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary">Test du mot de passe</button> </div>';
    echo '<h1 class="text-center">Aurore</h1>';
    echo 'Mot de passe : <br>';
    echo 'Force du mot de passe <br>';
    echo '<div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
  </div>';

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 12) {
    
  echo '<div class="row">
        <section class="card col-md-4 mx-auto my-1">    
        <div class="form-group"> Le mot de passe doit contenir au moins : <br> </div>
        1 chiffre <br>
        1 minuscule <br>
        1 majuscule <br>
        1 caractère spécial <br>
        12 caractères
        </section> </div>';

}else{
    echo 'Mot de passe valide.';
}
    


}
?>
