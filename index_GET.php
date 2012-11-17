<!-- Day 6 														
	 Future Value app - index.php													
	 Submitted by Scott Pardo 									
	 10/25/2012													
	 															
	 Code a future value application.
	 The program should prompt the user for an initial investment amount, 
	 interest rate and number of years.	
 	
	 Use a form to capture the required entry items
-->
<?php
	//added to allow passing of data back to form from result page
	// get the data from the form
	if ($_GET['reuse_data'] == "True") {
		$investment = $_GET['investment'];
		$interest_rate = $_GET['interest_rate'];
		$years = $_GET['years'];
	}
	else{
	//if not we can initialzie the vars
		$investment = '';
		$interest_rate = '';
		$years = '';
	}
	//if error message is empty then intialize it.
	if (empty($error_message)) {
		$error_message = '';				
	}
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
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results_GET.php" method="get">

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo $investment; ?>"/><br />

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo $interest_rate; ?>"/><br />

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
    </div>
</body>
</html>