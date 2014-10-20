<?php 
	$car = array(1,2,3);
	echo(var_dump($car));

?>

<?php 
	class car{
		var $color;
		function car($color ="green"){
			$this->color = $color;
		}

		function what_color(){
			return $this->color;
		}
	}
	function print_vars($obj) {
	   foreach (get_object_vars($obj) as $prop => $val) {
	     echo "\t$prop = $val\n";
	   }
	}

	// instantiate one object
	$herbie = new Car("white");

	// show herbie properties
	echo "\herbie: Properties\n";
	print_vars($herbie);
?>