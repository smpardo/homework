/*<?php
    // get the data from the form
    $investment = $_POST['investment'];
    $interest_rate = $_POST['interest_rate'];
    $years = $_POST['years'];

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
    else if ( $interest_rate <= 0 OR $interest_rate > 15 ) {
        $error_message = 'Interest rate must be greater than zero and less than or equal to 15.'; }
        
    // validate years entry
    else if ( empty($years) ) {
        $error_message = 'Years is a required field.'; }
    else if ( !is_numeric($years) )  {
        $error_message = 'Years must be a valid number.'; }
    else if ( $years <= 0 OR $years > 50 ) {
        $error_message = 'Years be greater than zero and less than or equal to 50.'; }
        
    // set error message to empty string if no invalid entries
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
    
?>*/
function calculate() {
	// get input from user
	//assign value to var using call to DOM	using chaining to get investment amount
	var investment = document.getElementById('investment').valueAsNumber;										
	//repeat the above for the investment rate
	var interestRate = document.getElementById('interest_rate').valueAsNumber;
	//repeat the above for the number of years
	var years = document.getElementById('years').valueAsNumber;

	var errorMessage = "";
	//validate
    // validate investment entry
    if (isNaN(investment) ) {
        errorMessage = 'Investment is a required numeric field.'; }
    else if ( investment <= 0 ) {
        errorMessage = 'Investment must be greater than zero.'; }
        
    // validate interest rate entry
    else if ( isNaN(interestRate) ) {
    	errorMessage = 'Interest rate is a required numeric field.'; }
    else if ( interestRate <= 0 || interestRate > 15 ) {
    	errorMessage = 'Interest rate must be greater than zero and less than or equal to 15.'; }
        
    // validate years entry
    else if ( isNaN(years) ) {
    	errorMessage = 'Years is a required numeric field.'; }
    else if ( years <= 0 || years > 50 ) {
    	errorMessage = 'Years be greater than zero and less than or equal to 50.'; }
        
    // set error message to empty string if no invalid entries
    else {
    	errorMessage = ""; }

    // if an error message exists, go to the index page
    if (errorMessage != "") {
    	document.getElementById('error_message').value = errorMessage;

    } else {	
		// calculate the future value
		var futureValue = investment;
	    
		for (var i = 1; i <= years; i++) {
	        futureValue = (futureValue + (futureValue * interestRate *.01));
	    }	
		
		// set output in currency format (sort of)
		futureValue = '$' + futureValue.toFixed(2);		//set var to string with 2 decimal place format and add $
		
		//send to output
		document.getElementById('future_value').value = futureValue;	//declare var for output
		
		//get the current date/time
		var calcDate = new Date()
		//grab the day
		var currDay = calcDate.getDate();
		//grab the month
		var currMonth = calcDate.getMonth();
		//grab the year
		var currYear = calcDate.getFullYear();
		//format date for output
		var outputDate = currMonth + "/" + currDay + "/" + currYear;
	
		//send to output
		document.getElementById('calc_date').value = outputDate;
		
    	document.getElementById('error_message').value = errorMessage;
    }
} //end calculate