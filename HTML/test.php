<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:06
 */
$n = $_POST['n'];
$m = $_POST['m'];
$r = $_POST['r'];
$g = $_POST['g'];
$b = $_POST['b'];
?>
<table border="1">
<?php
for($x = 1 ; $x <= $n ; $x ++){
    for($y = 1 ; $y <= $m ; $y ++){
        echo "<td>".$x * $y."</td>";
    }
    echo "<tr/>";
}
echo "<span style=\"color:$r,$g,$b\">OAO</span>";
?>
</table>