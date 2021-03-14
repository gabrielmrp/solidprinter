<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Solid Printer</title>
</head>
<body>	
	<?php
	require 'models/MultipleCollection.php' ;
	require 'models/Printer.php' ;

	use PHPUnit\Framework\TestCase;

#create an object that contains two objects of type "Multiple" 
	$printer_collection  =  new MultipleCollection([
		[3,"Three"],
		[5,"Five"]
	]);

#extract the multiple objects from its collection
	$array_multiples = $printer_collection->get_multiples();

	for ($i=1;$i<=100;$i++)
	{
	#main loop  
		$printer = new Printer($array_multiples,$i);
		$printer->print(); 
	}

	?>

</body>
</html>