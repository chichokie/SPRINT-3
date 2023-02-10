
<body>
<form action="main.php" method="post">

<input type="text" name="single">
<input type="submit" value="Enviar">
</form>
<?php
require_once("singleton.php");
include "tigger.php";

echo "Años <br>\n";

//$counter = 0;

$rtigger = new Tigger($counter);
$rtigger -> Singleton->s();
$inst = Singleton::init()->s();


$rtigger = Tigger::roar($counter);
$rtigger = Tigger::roar($counter);
$rtigger = Tigger::roar($counter);
$rtigger = Tigger::roar($counter);
$rtigger = Tigger::roar($counter);

//$inst -> Singleton->s();

//$rtigger -> Singleton->s();

echo "contador=  ".Tigger::roar($counter).$counter;




//$rtigger ->roar();

//$resultado =;

/*
function ca($inicio,$fin){

    for ($ini=$inicio-4; $ini<$fin; ){
        $ini = $ini+4;
        print ($ini);
        echo "<br>";
        
    }
}*/

?>
</body>
</html>