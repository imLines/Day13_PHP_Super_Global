<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass2'])){
            
    if(strlen($_POST['name']) < 3 || strlen($_POST['name']) > 10){
        echo "Nom invalide".PHP_EOL;
    }else{
        $cond1 = true;
    }
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $cond2 = true;
    }else{
        echo "Invalid email".PHP_EOL;
    }
    if($_POST['pass'] == $_POST['pass2']){
        password_hash($_POST['pass'], PASSWORD_DEFAULT)."\n";
    }else{
        echo "Passeword incorrect";
    }
  
    if($cond == true)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            function get_data() {
                $datae = array();
                $datae[] = array(
                    'Name' => $_POST['name'],
                    'Email' => $_POST['email'],
                    'MDP' => $_POST['pass'],
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
?>