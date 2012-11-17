<!-- Day 6 														
	 Future Value app - display_results.php													
	 Submitted by Scott Pardo 									
	 10/25/2012													
	 															
	 Code a future value application.
	 The program should prompt the user for an initial investment amount, 
	 interest rate and number of years.	
 	
	 Use a form to capture the required entry items
-->
<?php
    // get the data from the form
    $investment = $_GET['investment'];
    $interest_rate = $_GET['interest_rate'];
    $years = $_GET['years'];

    // validate investment entry
    if ( empty($investment) ) {
        $error_message = 'Investment is a required field.'; }
    else if ( !is_numeric($investment) )  {
        $error_message = 'Investment must be a valid number.'; }
    else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; }

    // validate interest rate entry
    else if ( empty($interest_rate) ) {
        $error_message = 'Interest rate is a required field.'; }
    else if ( !is_numeric($interest_rate) )  {
        $error_message = 'Interest rate must be a valid number.'; }
    else if ( $interest_rate <= 0 || $interest_rate > 15 ) {
        $error_message = 'Rate must be greater than zero and less than or equal to 15.'; }
    // set error message to empty string if no invalid entries
    
    // validate number of years entry
    else if ( empty($years) ) {
       	$error_message = 'Years is a required field.';}
    else if ( !is_numeric($years) )  {
        $error_message = 'Years must be a valid number.';}
    else if ( $years <= 0 || $years > 50 ) {
       	$error_message = 'Years must be greater than zero and less than or equal to 50.';}   
    
    else {
        $error_message = ''; }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

    // calculate the future value
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01));
    }
    // apply currency and percent formatting
    $investment_f = '$'.number_format($investment, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <output><?php echo $investment_f; ?></output><br />

        <label>Yearly Interest Rate:</label>
        <output><?php echo $yearly_rate_f; ?></output><br />

        <label>Number of Years:</label>
        <output><?php echo $years; ?></output><br />

        <label>Future Value:</label>
        <output><?php echo $future_value_f; ?></output><br />
     	
     	<!-- Form added to give return to entry page functionality -->
     	<form action="index_GET.php" method="get">
			<!-- Hidden form elements to facilitate passing back of data to entry page -->
			<input type="hidden" name="investment" value="<?php echo $investment;  ?>"> 
     		<input type="hidden" name="interest_rate" value="<?php echo $interest_rate; ?>"> 
     		<input type="hidden" name="years" value="<?php echo $years; ?>"> 
     		<br>
			<p>Would you like to Try Again? </p>
			
			<!-- Radio form elements to determine if passing back of data to entry page -->     		
     		<div id="radio">
     			<input type="radio" name="reuse_data" value="True"> Re-Use Entered Data? 
				<input type="radio" name="reuse_data" value="False" checked="true"> Clear Data 
			</div>
			
			<!-- Button form element to return to entry page --> 	    	
	    	<div id="buttons">
	            <label>&nbsp;</label>
	            <input type="submit" value="Try Again"/><br />
	        </div>
	
	    </form>   
	    <br>    
	    <footer>This calculation was done on <?php echo date('m/d/Y');?>.</footer>
    </div>
</body>
</html>