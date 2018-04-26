<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Php Group Practice 1</title>
	<link rel="stylesheet" href="bootstrap.mim.css">
</head>
<body>
	<div class="container">

		<h3>Php Syntax</h3>

		<?php  ?>

		<h3>php echo</h3>
		<?php  
				// php echo...
			echo "Hi i am Monjurul Hasan";
			echo "<br>";
		?>

		<h3>Php variable</h3>
		<?php 
				// php variable...
			$name = 'Monjurul Hasan';
			echo $name;
			echo "<br>";
		 ?>
		
		<h3>php cancatination</h3>
		<?php 
				// php canctination...
			$firstName = 'Monjurul';
			$lastName = 'Hasan';
			echo $firstName . ' ' . $lastName;
			echo "<br>";
		 ?>

		 <h3>There are 4 kind of Datatype:</h3>
		 	<h2>Scalar</h2>
		 	<ul>
		 		<li>Number:</li>
		 		<p>Integer</p>
		 			<?php 
		 			 	// php intager...
		 				echo 10;
		 				echo "<br>";
		 			 ?>
		 		<p>Float/Double:</p>
					<?php 
						// php floating or double number....
						echo 10.5;
						echo "<br>";
						echo "<br>";
					 ?>

		 		<li>Boolean:</li>
					<p>True</p>
						<?php 
							// this is true statement example...
							$fileUpload = 'true';
							if ($fileUpload) {
								echo 'This file was uploaded';
							}
							else{
								echo "this file was not uploaded";
								echo "<br>";
							}
						 ?>
					<p>False</p>
					<?php 
						// this is false statement example...
						$fileUpload = 'false';
						if ($fileUpload) {
							echo "This file was not upload";
						}
						else{
							echo "this file was uploaded";
						}
						echo "<br>";
						echo "<br>";
					 ?>

		 		<li>String:</li>
		 		<?php 
		 			// this is string example...
		 			echo "This is an string example";
		 		 ?>
		 	</ul>
		 	<h2>Composit:</h2>
		 	<h3>There are 3 types of array</h3>
		 	<ol>
				<li>Index array</li>
					 <?php 
						 	// index array....
						 $fruits = ['Apple', 'Banana', 'Orange', 'Lychee', 'Mango'];
						 	var_dump($fruits);
						 	echo "<br>";
						 	print_r($fruits);
						 	echo "<br>";
						 	echo "<br>";
					  ?>
			
			<li>Associative array</li>
				 <?php 
					 	// Associative Array...
					 $father = ['monjur => 30', 'hasan => 40', 'mamun =>50'];
					 var_dump($father);
					 echo "<br>";
					 echo "<br>";
				  ?>

		  <li>Multidimantional Array</li>

			  <?php 
				  	// Multidimantional Array...

				 	$users =[
				 		[
				 			'$name' => 'Monjur',
				 			'$email' => 'monjur@gmail.com',
				 			'$hobby' => 'listning song'
				 		],

				 		[
				 			'$name' => 'Hasan',
				 			'$email' => 'hasan@gmail.com',
				 			'$hobby' => 'facebooking'
				 		]
				 	];
	 
				 	var_dump($users);
			   ?>
		 	 </ol>


		 	<h3>Object:</h3>
		 	<?php 
		 			// php object...
		 		echo "Objet is a large things";  
		 		echo "<br>";
		 	?>
		 	

		 	<h2>Null</h2>
				<?php 
					//php null...
					echo "Null is empty variable";
					echo "<br>";
				 ?>

		 	<h2>Resource</h2>
		 	<?php 
		 		// php Resources...
		 		echo "It is select an external function";
		 	 ?>

		<h3>There are many types of Oparator:</h3>
		<ol>
			<li>Arithmatic Oparator:</li>
			<?php 
					// php Arithmatic Orarator.... (+, -, *, /, %)
				$shamima = 25;
				$farhana = 26;
					// + or - or * or / or %
				echo $shamima + $farhana;
				echo "<br>";
				echo "<br>";
			 ?>

			 <li>Assignment Oparator:</li>
			 <?php 
			 	// Assignment oparator... (+=, -=, *=, /=, %=)
			 	$farhana = 25;
			 	 // += or -= or *= or /= or %= 
			 	$farhana += 5;
			 	echo $farhana;
			 	echo "<br>";
			 	echo "<br>";
			  ?>

			  <li>Logocal Oparator:</li>
			  <?php 
				  	// Logical Oparator... (&&, ||, !)
				  $userName = 'MonjurulHasan';
				  $email = 'monjur@gmail.com';
				  	// && or || or !
				  if ($userName == 'MonjurulHasan' && $email == 'monjur@gmail.com') {
				  	echo 'You are wellcome';
				  	echo "<br>";
				  	echo "<br>";
				  }
				  else{
				  	echo "Your UserName or email is wrong";
				  	
				  }
			  ?>

			   <li>Compharisiom Oparator:</li>
			   <?php 
				   	// Compharisiom Oparator.. (==, !=, >, >=, <, <=)
				   $monjur = 21;
				   $shamima = 25;
				   	// == or != or > or >= or < or <=
				   if ($monjur == $shamima) {
				   	echo "they are not same";
				   }
				   else{
				   	echo "they are same";
				   	echo "<br>";
				   }
			    ?>
		 </ol>
	</div>
</body>
</html>