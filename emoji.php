 <script>
	
</script>
<?php 
//echo json_decode('"\ud83d\ude00"');
//ud83dude02
$string = 'ud83dude02ud83dude02';
$replacement = '\\';
$string = substr_replace(substr_replace($string, $replacement,5, 0),$replacement,0,0);
var_dump($string);
echo json_decode('"'.$string.'"');



?>