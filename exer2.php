<?php
$n = $_POST['n'];

for($i=1; $i<=$n;$i++){
if($i % 2 == 0){
    echo "<p style='color:blue;'> Valor: ".$i."</p>" ;
}else{
    echo "<p style='color:orange;'> Valor: ".$i."</p>" ;
}
}

?>