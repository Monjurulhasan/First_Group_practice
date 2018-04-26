<?php 
	$fruits =['Apple', 'Banana', 'Orange', 'Lychee', 'Mango', 'Balckberry'];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Loop in php</title>
 	<link rel="stylesheet" href="bootstrap.min.css">
 </head>
 <body>
 	<div class="container">
 		<h3>There are 4 kinds of loop in php:</h3>
 		<h4>for loop</h4>
 		<ul>
 			<?php //for loop in php.... ?>
 			<?php for ($i=0; $i < count($fruits) ; $i++) : ?>
				<li><?php echo $fruits[$i]; ?></li>
 			<?php endfor ?>
 		</ul>
			
		<h4>foreach loop</h4>
		<ul>
			<?php //foreach loop in php.... ?>
			<?php foreach ($fruits as $fruit) : ?>
				<li><?php echo $fruit; ?></li>
			<?php endforeach ?>
		</ul>
		
		<h4>While loop</h4>
		<ul>
			<?php $i = 0; ?>
			<?php while ( $i <= count($fruits)) : ?>
				<li><?php echo $fruits[$i]; ?></li>
			<?php $i++; endwhile ?>
		</ul>
 	</div>
 </body>
 </html>