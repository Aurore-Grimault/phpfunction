<?php
   
    namespace aurore;

    function checkPassword($password) {
            // echo '<div class="btn-group" role="group" aria-label="Basic example">
            //     <button type="button" class="btn btn-primary">Test du mot de passe</button> </div>';

            echo '<h1 class="text-center">Aurore</h1>';

            //retranscription mot de passe
            echo 'Mot de passe :' .$password;
            echo '<br>';

           //expression rationnelle standard
            $number = preg_match('@[0-9]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $uppercase = preg_match('@[A-Z]@', $password);
            $specialChars = preg_match('@[-&(_)=+$^ù*:!;,?]@', $password);
            $strlen = preg_match('@[1-12]@', $password);

            //force du mot de passe
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 12) {
        
            echo '<div class ="row"> 
                    <div class="col-4 mx-auto">   
                        <ul class="list-group">
                            <li class="list-group-item active" aria-current="true"> Le mot de passe doit contenir au moins : </li>';
                            
                            $errors = 0;

                            if (!$number) {
                                echo '<li class="list-group-item"> 1 chiffre </li>';
                                $errors ++;
                            }
                            else {
                                echo '';
                                // echo '<li class="list-group-item"> 1 chiffre ok </li>';
                            }

                            if (!$lowercase) {
                                echo '<li class="list-group-item"> 1 minuscule </li>';
                                $errors ++;
                            }
                            else {
                                echo '';
                                // echo '<li class="list-group-item"> 1 minuscule ok </li>';
                            }

                            if (!$uppercase) {
                                echo '<li class="list-group-item"> 1 majuscule </li>';
                                $errors ++;
                                
                            }
                            else {
                                echo '';
                                // echo '<li class="list-group-item"> 1 majuscule ok </li>';
                            }
                            
                            if (!$specialChars) {
                                echo '<li class="list-group-item"> 1 caractère spécial </li>';
                                $errors ++;
                            }
                            else {
                                echo '';
                                // echo '<li class="list-group-item"> 1 caractère spécial ok </li>';
                            }

                            if (strlen($password) < 12) {
                                echo '<li class="list-group-item"> 12 caractères </li>';
                                $errors ++;
                            }
                            else {
                                echo '';
                                // echo '<li class="list-group-item"> 12 caractères ok </li>';
                            }

                        echo '</ul> <br>

                    </div> ';

                    echo '<div class="text-end"> Force du mot de passe </div>';

                    switch($errors) {
                                case 1 : $percent = 80;
                                $color = "primary" ;
                                break;
                                case 2 : $percent = 60;
                                $color = "info";
                                break;
                                case 3 : $percent = 40;
                                $color = "warning";
                                break;
                                case 4 : $percent = 20;
                                $color = "danger";
                                break;
                                case 5 : $percent = 0;
                                break;   
                    }   

                    echo '</div>';        
                    echo '<div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-' .$color. '" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:' .$percent. '%"> </div> 
                        </div> <br>';             
                                  
        } else {

            echo '<div> Mot de passe valide. </div> <br>';    
            echo '<div class="progress">
                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div> 
                    </div> <br>';
            echo '<div class =row>
                    <div class="col-1 mx-auto">  
                        <a class="btn btn-success me-3" role="button" href="./index.php/">  Ok </a>
                    </div>
                </div>'; 

        } 

    }  

 
?>