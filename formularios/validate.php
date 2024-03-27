<?php 
// if($_SERVER['REQUEST_METHOD']=='GET'){
//     echo'por get';
// }
// else{
//     echo'por post';
// }


if (isset($_POST['submit'])) {
    echo 'foi por post';
} 
else{    
    echo 'foi por get';
}


?>