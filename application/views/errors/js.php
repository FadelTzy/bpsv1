<!DOCTYPE html>
<html>
<head>
				<script type="text/javascript" src="<?php echo base_url()?>aset/jquery/jquery-3.4.1.js"></script>

	<title></title>
	<script type="text/javascript"></script>
	<script type="text/javascript">
		$(function (argument) {
			$(".tombol").click(function (argument) {
				$("li").toggleClass("bigger");
			})
		});
	</script>
	<style type="text/css">
		.bigger{
			font-size: 20px;
		} 
	</style>
</head>
<body>
	<h1>Latihan JS</h1>

		<ul>
			<li>mobil</li>
			<li>motor</li>
			<li>kereta</li>

		</ul>
		<button class="tombol"> tombol </button>
</body>
</html>