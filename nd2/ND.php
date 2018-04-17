<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-12
 * Time: 14:23
 */




function headingOrNot($a, bool$b){
    if ($b === true){
        echo "<h2 style='display:inline'>$a </h2>";
    }
    else if ($b === false){
        echo "$a";
    }
    else if (empty($a)){
        return false; // ?? kas false
    }

}


function happyOrNot($a){

    if ($a === 'happy'){
        echo 'is :-) today';
    }
    else if($a === 'sad'){
        echo 'is :-( today';
    }
    else {
        echo 'is :-| today';
    }

}
function all(){
    headingOrNot('Julius',true);
    happyOrNot('happy');
}

all();

?>


