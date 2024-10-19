<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$catagory=array("CPU"=>"Cori3","Ram"=>"DDR4 8GB","HDD"=>"500GB");
	?>
	<select name="" id="">
			<?php
			foreach($catagory as $element=>$value){?>
			<option value="<?=$value?>"><?=$value.'('.$element.')'?></option>
			<?php
				
			}
			?>
	</select>
</body>
</html>