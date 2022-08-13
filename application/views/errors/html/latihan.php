<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var data = [];
		var i;
	</script>
	<?php $i = "<script>document.write(i)</script>" ?>
	<title></title>
</head>
<body>
<?php 
$datar = array();
foreach ($data as $key) {
	$datar[] = $key['kabkot'];
}
 var_dump($datar);
 echo $datar[0];
 ?>
 <script type="text/javascript">
 	var coba = new Array();
 	console.log(coba);
 	console.log(data);
 	for ( var i = 0; i < 10; i++) {
 		coba[i] = '<?php echo $datar['i']; ?>';
 	}
 </script>

</body>
</html>