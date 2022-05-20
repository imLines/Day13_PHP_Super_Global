<?php

$mdpS = null;

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass2'])){
            
    if(strlen($_POST['name']) < 3 || strlen($_POST['name']) > 10){
        echo "Nom invalide".PHP_EOL;
        $cond1 = false;
    }else{
        $cond1 = true;
    }
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $cond2 = true;
    }else{
        echo "Invalid email".PHP_EOL;
        $cond2 = false;

    }
    if($_POST['pass'] == $_POST['pass2']){
        $GLOBALS["mdpS"] = password_hash($_POST['pass'], PASSWORD_BCRYPT)."\n";
        $cond3 = true;
    }else{
        echo "Passeword incorrect";
        $cond3 = false;

    }
    echo "testing var_dump\n";
    var_dump($cond1, $cond2, $cond3);
    echo "\n";
    var_dump($_SERVER['REQUEST_METHOD']);

    if($cond1 && $cond2 && $cond3)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            function get_data() {
                $datae = array();
                $datae[] = array(
                    'Name' => $_POST['name'],
                    'Email' => $_POST['email'],
                    'MDP' => $GLOBALS['mdpS'],
                );
                return json_encode($datae);
            }
            
            $name = "data";
            $file_name = $name . '.json';
        
            if(file_put_contents(
                "$file_name", get_data())) {
                    echo $file_name .' file created';
                }
            else {
                echo 'There is some error';
            }
        }
    }
}