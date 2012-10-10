<!-- Day 5 														
	 Excercise 4 													
	 Submitted by Scott Pardo 									
	 10/7/2012													
	 															
	 Produce a multiplication table from 1 to 10 using loops 	
	 This version uses table tags and produces a single large 
	 multiplication grid for the numbers from 1 to 10.	
	 Variables:
	 		$Result - calculation result						
	 		$i / $j - loop iterators 									
	     
-->
<! DOCTYPE html>
<html lang="en">
	<head>
		<meta>
		<title>Multiplication Table from 0 to 10</title>
		<style type="text/css">
			/* global text font style */
			body {
				font-family: Verdana, Arial, Helvetica, sans-serif;
			}			
			/* global table style */
			table{
				border-spacing: 0px;
			}
			
			/* style for table cells */
			td {
				border: 1px solid black;
				text-align: right;
				width: 30px;
				height: 30px;
			}
			.rowhead, .colhead {
				background-color: black;
				color: white;
				text-align: center;
				border: 1px solid white;
				font-weight: bold;
			}
			.square {
				background-color: lightgray;
				
				font-weight: bold;
			}		
		</style>
	
	</head>
	<body>
		<h1>Multiplication Tables from Zero to Ten</h1>
		<h4>-Gray shaded cells denote squares</h4>
	
		<table>
			<!-- PHP code to follow that outouts the 'guts' of the table -->
			<?php
				//instanciate variable to hold multiplication result
				$Result = 0;
				
				//print out the header row tag
				print '<tr>';
				
				//print out the cell at origin of table
				print '<td class="colhead">X</td>';
				
				//loop to print out the column header row
				For ($i = 0; $i <= 10; $i++){
					print '<td class="colhead">' . $i . '</td>';
				}
				
				//close the column header row
				print "</tr>";
				
				//loop that prints out the muliplication table
				For ($i = 0; $i <= 10; $i++){
					
					//print out the row header cell for each row
					print '<tr><td class="rowhead">' . $i . '</td>';
					
					//loop that prints out the multiplication table data
					For ($j = 0; $j <= 10; $j++){
						
						//perform the arithmetic
						$Result = $i * $j;
						
						if ($i == $j) {
							//this is a square, change the cell style
							//print the result within the table cell tags
							print '<td class="square">' . $Result . '</td>';							
						}else 
							//print the result within the table cell tags
							print "<td>$Result</td>";
					}		
					
					//print out the close row tag
					print "</tr>";
				}
			?>
		</table>
		<div id="footer">Scott Pardo: Day5 Exercise 4. Single grid using tables.</div>
	</body>
</html>