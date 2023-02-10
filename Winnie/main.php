
<body>
<form action="main.php" method="post">
</form>
<?php
require_once("singleton.php");
include "tigger.php";

//$counter = 0;

$rtigger = new Tigger($counter);
$rtigger -> Singleton->s();
$inst = Singleton::init()->s();

for ($counter=1; $counter<5; $counter++){
    
    $rtigger = Tigger::roar($counter);
    echo "<br>";
}

echo "contador=  ".Tigger::roar($counter).$counter;
echo "<br>";
echo "contador=  ".Tigger::getCounter().$counter;


//$inst -> Singleton->s();
//$rtigger -> Singleton->s();
/*
$rtigger = Tigger::roar($counter);
$rtigger = Tigger::roar($counter);
$rtigger = Tigger::roar($counter);
$rtigger = Tigger::roar($counter);
$rtigger = Tigger::roar($counter);
*/

//$rtigger ->roar();
//$resultado =;

/*
function ca($inicio,$fin){
    for ($ini=$inicio-4; $ini<$fin; ){
        $ini = $ini+4;
        print ($ini);
        echo "<br>"
    }
}*/

?>
</body>
</html>