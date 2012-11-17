<!-- Day 6 														
	 Excercise 1 													
	 Submitted by Scott Pardo 									
	 10/25/2012													
	 															
	 A store is having a sale.  They are giving the folloiwing discounts:
	 	10% off purchases of $10 or less.
	 	20% off purchases of greater than $10.
	 Write a program to display the discount percentage and final price.
	 	Use a variable for the item's cost and run multiple cases to test.	 	
	 Use a form to capture the item's cost, output the discount and the discounted price
	 and any other information you want.
	 Form Fields Input:
	 		list_price - User entered cost of item input object
	 
	 Variables:
	 		$ItemCost - cost of item.
	 		$FinalPrice - Final cost of item.
	 		$DiscountTotal - Total amount of discount.
	 		$DiscountPercent - percentage of discount						
-->
<! DOCTYPE html>
<html lang="en">
	<head>
		<meta>
		<title>Discount Calculator</title>
		<style type="text/css">
			/* global text font style */
			body {
				font-family: Verdana, Arial, Helvetica, sans-serif;
			}
			/* global page style */
			#container {
				border-radius: 15px;
				border: 1px solid black;
				width: 350px;	
				padding: 10px;	
				margin: 0px auto 0px auto;
			}
			/* global style for table*/
			table {
				border: 0px;
				border: collapse;
			}				
			/* style for column header cells */
			.colhead {
				background-color: black;
				color: white;
				height: 40px;				
				text-align: center;
				font-weight: bold;
				border-right: 1px solid white;
				border-left: 1px solid white;
				border-radius: 15px 15px 0px 0px;	
				padding: 0px;	
				margin: 0px;	
				border: collapse;	
			}
			/* style for table cells */
			td {
				border: 1px solid black;
				width: 100px;
				border-radius: 0px 0px 15px 15px;			
				text-align: right;
				padding: 5px;
				margin: 0px;
				border: collapse;
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
				<h1>Discount Calculator</h1>
			</header>
			<!--  -->
			<?php
				//instanciate variables to hold multiplication result
	 			$ItemCost = $_POST["list_price"];	//cost of item from form.
	 			$DiscountPercent = 0;	//percentage of discount		
	 			$DiscountTotal = 0;		//total discount amount.				
	 			$FinalCost = 0;			//final price of item including discount.
	 			
	 			//first validate the entry and give a good value
	 			if ($ItemCost < 0 || is_numeric($ItemCost) == False){
	 				$ItemCost = 10.50;
	 				print 'Invalid Entry.  Item Cost must be a number and be positive.  Default value of $10.50 substituted for kicks.';
	 			}
				
	 			//print out the opening div tag
				print '<table>';
					
				//print out the top row of table
				print '<tr>';
				print '<td class="colhead">Item Cost</td>';
				print '<td class="colhead">Discount %</td>';				
				print '<td class="colhead">Discount Amount</td>';
				print '<td class="colhead">Final Cost</td>';
				print '</tr>';

		
				//check the item cost to see if it is above or below the threshold value
				if ($ItemCost <= 10){
					//this should be a 10% discount
					$DiscountPercent = .10;
				}else{
					//this should be a 20% discount	
					$DiscountPercent = .20;											
				}
					
				//perform the arithmetic and format the output to 2 decimal places
				$DiscountTotal = money_format('%.2n', $ItemCost * $DiscountPercent) ;
				$FinalCost = money_format('%.2n',$ItemCost - $DiscountTotal);
					
				//open the row for output
				print '<tr>';
				//print the result within the table cell tags
				print '<td> $' . money_format('%.2n',$ItemCost) . '</td>';
				print '<td> ' . ($DiscountPercent * 100) . '% </td>' ;
				print '<td> $' . $DiscountTotal . '</td>' ;
				print '<td> $' . $FinalCost . '&nbsp;</td>';
					
				//close the row
				print '</tr>';
				//print out the closing div tag
				print '</table>';
				
				//print a space
				print '<br>';
				
				//give the user a link to go back and try again
				print '<div class="back">';
				print '<a  href="day6_exercise1.html">Return to Entry Form </a>';
				print '</div>';
				
			?>
		
			<footer>
				<p>Scott Pardo: Day6 Exercise 1. Discount Calculator with Form Entry.</p>
			</footer>
		</section>
	</body>
</html>
