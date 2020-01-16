
<html>
<body>

<?php
$a = array (
"key1" => 1,
"key2" => array (
"key3" => 1,
"key4" => array (
"key5" => 4
),
),
);

function printDepth($data) {
    static  $depth=1;
    foreach($data as $key => $value){
        echo $key." ".$depth."<br/>";
        if(is_array($value) || is_object($value))
        {
            $depth++;
            printDepth($value);
        }
    }
}
function add($a, $b)
{
  return $a + $b;
}
printDepth($a);
?>


</body>
</html>
