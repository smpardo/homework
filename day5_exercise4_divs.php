<!-- Day 5 														
	 Excercise 4 													
	 Submitted by Scott Pardo 									
	 10/7/2012													
	 															
	 Produce a multiplication table from 1 to 10 using loops.
	 This version uses div tags and produces seperate multiplication 
	 tables for each number from 1 to 10.	
	 Variables:
	 		$Result - calculation result						
	 		$i / $j - loop iterators 									
-->
<! DOCTYPE html>
<html lang="en">
	<head>
		<meta>
		<title>Multiplication Tables from 0 to 10</title>
		<style type="text/css">
			/* global text font style */
			body {
				font-family: Verdana, Arial, Helvetica, sans-serif;
			}
			/* global table style */
			#container {
				width: 800px;
				border-spacing: 0px;
			}
			/* style for table cells*/
			.table {
				width: 110px;
				border: 1px solid black;
				float: left;
				margin: 5px;
				overflow: hidden;
			}				
			/* style for column header cells */
			.colhead {
				background-color: black;
				color: white;
				height: 40px;				
				border: 1px solid black;
				text-align: center;
				font-weight: bold;
			}
			/* style for column header cells */			
			.row {
				height: 20px;
				border: 1px solid black;
				
				text-align: right;
			}	
			/* style for footer */		
			#footer {
				width: 800px;
				border-spacing: 0px;
				float: left;
			}			</style>
	</head>
	<body>
		<div id="container">
			<h1>Multiplication Tables from Zero to Ten</h1>
			<!-- PHP code to follow that outouts the 'guts' of the tables 
					one table printed per number 1 through 10 -->
			<?php
				//instanciate variable to hold multiplication result
				$Result = 0;
				
				//main loop to iterate through numbers 1 through 10				
				for ($i = 0; $i <= 10; $i++) {
					//print out the opening div tag
					print '<div class="table">';
					
					//print out the table heading
					print '<div class="colhead">Multiplication Table for ' . $i . ': </div>';				
						
					//loop that prints out the multiplication table data
					for ($j = 0; $j <= 10; $j++){
					
						//perform the arithmetic
						$Result = $i * $j;
						
						//print the result for each calculation
						print '<div class="row">' . $i . ' X ' . $j . ' = ' . $Result . '&nbsp;</div>';
					}
					
					//print out the close div tag
					print "</div>";
				}
			?>
		</div>
		<div id="footer">Scott Pardo: Day5 Exercise 4. Seperate tables using divs.</div>
	</body>
</html>