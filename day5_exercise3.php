<!-- Day 5 														
	 Excercise 3 													
	 Submitted by Scott Pardo 									
	 10/7/2012													
	 															
	 A store is having a sale.  They are giving the folloiwing discounts:
	 	10% off purchases of $10 or less.
	 	20% off purchases of greater than $10.
	 Write a program to display the discount percentage and final price.
	 	Use a variable for the item's cost and run multiple cases to test.	 	
	 
	 Variables:
	 		$ItemCost - cost of item.
	 		$FinalPrice - Final cost of item.
	 		$DiscountTotal - Total amount of discount.						
	 		$i / $j - loop iterators. 									
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
				border-spacing: 0px;
			}
			/* global style for table*/
			table {
				border: 1px solid black;
				border-spacing: 0px;
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
			}
			/* style for table cells */
			td {
				border: 1px solid black;
				width: 100px;
			
				text-align: right;
			}		
			/* style for footer */	
			#footer {
				border-spacing: 0px;
				float: left;
				width: 100%;
			}
		</style>
	
	</head>
	<body>
		<div id="container">
			<h1>Discount Calculator</h1>
			<!--  -->
			<?php
				//instanciate variables to hold multiplication result
	 			$ItemCost = 0;			//cost of item.
	 			$DiscountPercent = 0;	//percentage of discount		
	 			$DiscountTotal = 0;		//total discount amount.				
	 			$FinalCost = 0;			//final price of item including discount.

				//print out the opening div tag
				print '<table>';
					
				//print out the top row of table
				print '<tr>';
				print '<td class="colhead">Item Cost</td>';
				print '<td class="colhead">Discount %</td>';				
				print '<td class="colhead">Discount Amount</td>';
				print '<td class="colhead">Final Cost</td>';
				print '</tr>';
								
	 			//For test cases, lets go from .5 to 20 in .5 steps
				//main loop to iterate through the test cases				
				for ($i = .5; $i <= 20; $i = $i + .5) {
				
					if ($i <= 10){
						//this should be a 10% discount
						$DiscountPercent = .10;
					}else{
						//this should be a 20% discount	
						$DiscountPercent = .20;											
					}
					
					//perform the arithmetic and format the output to 2 decimal places
					$DiscountTotal = money_format('%.2n', $i * $DiscountPercent) ;
					$FinalCost = money_format('%.2n',$i - $DiscountTotal);
					
					//open the row for output
					print '<tr>';
					//print the result within the table cell tags
					print '<td> $' . money_format('%.2n',$i) . '</td>';
					print '<td> ' . ($DiscountPercent * 100) . '% </td>' ;
					print '<td> $' . $DiscountTotal . '</td>' ;
					print '<td> $' . $FinalCost . '&nbsp;</td>';
					
					//close the row
					print '</tr>';
				}
				//print out the closing div tag
				print '</table>';
			?>
		</div>
		<div id="footer">Scott Pardo: Day5 Exercise 3. Discount calculator.</div>
		
	</body>
</html>