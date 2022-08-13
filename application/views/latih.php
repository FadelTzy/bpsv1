<!DOCTYPE html>
<html>
<head>
  <script src="<?php echo base_url() ?>aset/jquery/jquery-3.4.1.min.js" ></script>
 </head>
<body>
<div class="c">
		<h1>NORMAL sorting Guys....</h1>
<?php 			foreach ($norm->result() as $row)
			{
			        echo $row->kabkot ."<span>&nbsp;&nbsp;&nbsp;</span>" . $row->wilad . "<br>";
			        
			}
?>
</div>	
<div class="b" style="display: none;">	
	<h1>DESC sorting Guys....</h1>
<?php 			foreach ($desc->result() as $row)
			{
			        echo $row->kabkot ."<span>&nbsp;&nbsp;&nbsp;</span>" . $row->wilad . "<br>";
			        
			}
?>
</div>
<div class="a" style="display: none">
	<h1>ASC sorting Guys....</h1>
<?php 			foreach ($asc->result() as $row)
			{
			        echo $row->kabkot ."<span>&nbsp;&nbsp;&nbsp;</span>" . $row->wilad . "<br>";
			        
			}
?>
</div>
<button class="desc">SORT DESC</button>
<button class="asc">SORT ASC</button>
<button class="norm">NORMAL SORT</button>

</body>
<script type="text/javascript">
	$(document).ready(function () {
		$("button.desc").click(function () {
			$("div.b").show();

		});
		$("button.asc").click(function () {
			$("div.a").show();
		});	
		$("button.norm").click(function () {

			$("div.c").show();
		});		
	})
</script>
</html>