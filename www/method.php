<?php ###"main"
	if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['L'] >= 2 && 
		$_POST['F'] != null && 
		($_POST['Fib'] || $_POST['Sim'] || $_POST['Mer'])) 
	{
		include 'class_Sequence.php';
		
		$type = $_POST['Fib'];
		$length = $_POST['L'];
		$way_file = $_POST['F'];
		
		$file = fopen($way_file, 'w+');
		fclose($file);
		
		if($_POST['Fib'])
		{
			require('class_Fib.php');
				
			$var = new Fibonacci($length, $way_file);
			$var->demonstration();			
		}
		if($_POST['Sim'])
		{
			require('class_Sim.php');
				
			$var = new Simple($length, $way_file);
			$var->demonstration();
		}	
		if($_POST['Mer'])
		{
			require('class_Mer.php');
				
			$var = new Mersen($length, $way_file);
			$var->demonstration();
		}	
		
	}
	else print "<h3> <b> check form... </b> </h3>";
?>

