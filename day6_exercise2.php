<!-- Day 6 														
	 Excercise 2 													
	 Submitted by Scott Pardo 									
	 10/25/2012													
	 															
	 Produce a multiplication table using loops.
	 Use a form to capture the number whose times table will be displayed.
	 Optional entry of lower an dupper bound for times table. 
	 Form object names:
	 		number_entered 	- User entered number for times table.
	 		lower_bound 	- User entered lower boundary for multiplication.
	 		upper_bound 	- User entered upper boundary for multiplication.	
	 Variables:
	 		$Result - calculation result
	 		$InputNumber
	 		$LowerBound
	 		$UpperBound						
	 		$i / $j - loop iterators 									
-->
<! DOCTYPE html>
<html lang="en">
	<head>
		<meta>
		<title>Multiplication Tables Creator</title>
		<style type="text/css">
			/* global text font style */
			body {
				font-family: Verdana, Arial, Helvetica, sans-serif;
			}
			/* global table style */
			#container {
				border-radius: 15px;
				border: 1px solid black;
				width: 400px;	
				padding: 10px;	
				margin: 0px auto 0px auto;
			}
			/* style for errors */		
			.error {
				font-size: 85%;
				color: red;
			}		
			/* style for back "button"  */
			.back {
				border: 1px solid black;
				width: 150px;
				/*height: 10px;*/
				border-radius: 5px 5px 5px 5px;			
				padding: 0px;
				margin: 0px;
				background-color: lightGray;
			}			
			.back a {
				padding: 10px;
				font-size: 85%;
				font-weight: normal;
				color: black;
				text-decoration: none;
				text-align: center;	
			}
			/* style for text */		
			div p {
				font-size: 110%;
				color: black;
				font-weight: bold;
			}			
			/* style for footer */		
			footer {
				border-spacing: 0px;
				float: left;
				width: 100%;
			}			
		</style>
	</head>
	<body>
		<section id="container">
			<header>
				<h1>Multiplication Table Creator</h1>
			</header>

			<?php 
				//grab the data from the form variables
				$InputNumber = $_POST["number_entered"];	//Number for Multiplication table from form.	
				$LowerBound = $_POST["lower_bound"];	//Number for Multiplication table from form.
				$UpperBound = $_POST["upper_bound"];	//Number for Multiplication table from form.

				//first validate the entry and give a good value if not logical
				if ($InputNumber < 0 || is_numeric($InputNumber) == False){
					$InputNumber = 5;
					print '<div class="error">';
					print 'Invalid value entrered for multiplier, 5 substituted.';
					print '</div>';
		 		}
				//Now check the lower bound.  If not a valid number subsitute  0
				if ($LowerBound < 0 || is_numeric($LowerBound) == False){
					$LowerBound = 0;
					print '<div class="error">';
					print 'Invalid value entrered for Lower Bound, 0 substituted.';
					print '</div>';
				}
				//Finally check the upper bound if not valid use 10.  If valid but less than
				//lower bound use lower bound + 10
				if ($UpperBound < 0 || is_numeric($UpperBound) == False){
					$UpperBound = 10;
					print '<div class="error">';
					print 'Invalid value entrered for Upper Bound, 10 substituted.';
					print '</div>';
				}elseif ($UpperBound < $LowerBound) {
					$UpperBound = $LowerBound + 10;
					print '<div class="error">';
					print 'Upper bound cannot be less than Lower Bound, ' . $UpperBound . ' substituted.';
					print '</div>';					
				}				
				
				print '<div>';
				print '<p>Multiplication Table for ' . $InputNumber . ', from ' . $LowerBound . ' to ' . $UpperBound . '. </p>';
				print '</div>';				
				
				//PHP code to follow that outouts the 'guts' of the table 
				//instanciate variable to hold multiplication result
				$Result = 0;
				
				//main loop to iterate through numbers 1 through 10				
				for ($i = $LowerBound; $i <= $UpperBound; $i++) {

					//perform the arithmetic
					$Result = $i * $InputNumber;
						
					//print the result for each calculation
					print $InputNumber . ' X ' . $i . ' = ' . $Result . '<br>';
				} 
				
				print '<br>';
				
				//give the user a link to go back and try again
				print '<div class="back">';
				print '<a  href="day6_exercise2.html">Return to Entry Form </a>';
				print '</div>';
				
			?>
			<footer>
				<p>Scott Pardo: Day6 Exercise 2. Multiplication Table Creator with Form Entry.</p>
			</footer>
		</section>
	</body>
</html>
