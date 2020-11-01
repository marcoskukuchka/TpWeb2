
<?php
$id_prod = 1;
$imagen = 'productos\\'.$id_prod.' \\ '.$id_prod.'_mini.jpg'; 
echo '<pre>';
printr($imagen);
echo '</pre>';
?>

<img class="card-img-top"  src="<?php echo $imagen;?>"
