$(document).ready(function() {
	
	//bind to event listener
	$('#calculate').click(function(){
		//get input from user
		var listPrice = $('#list_price').val();
		
		var discountPercent = $('#discount_percent').val();
 
		//calculate discount and discount price - NOT NO DIFFERENCE BETWEEN JQUERY AND JAVASCRIPT!!!!
		var discount = listPrice * (discountPercent * 0.01);

		var discountPrice = listPrice - discount;		

		//set output in currency format, use JQuery library
		$('#discount').val(discount).formatCurrency();
		$('#discount_price').val(discountPrice).formatCurrency();
	
	});//end bind to event listener
	
}); //end page load






/*
//create helper function
var $ = function (id) {
	return document.getElementById(id);
}

function calculate() {
	// get input from user
	//assign value to var using call to DOM	using helper function
	var listPrice = $('list_price').valueAsNumber;										
	var customerType = $('type').value;
	
	
	//repeat the above for the discout percent
	//removed as we will now calculate discount rather than grab user input
	//var discountPercent = document.getElementById('discount_percent').valueAsNumber;

	// call calculate discount percent function
	var discountPercent = discPercCalc(listPrice, customerType);
	
	// call calculate discount amount function
	var discount = discAmountCalc(listPrice, discountPercent);
	
	// call calculate discount price function
	var discountPrice = discPriceCalc(listPrice, discount);	

/*	
 	//calculate discount percentage
	if (customerType == 'R') {
		if (listPrice < 100){
			discountPercent = 0;
		}else if (listPrice >= 100 && listPrice < 250) {
				discountPercent = 10;
		}	else if (listPrice >= 250) { 
				discountPercent = 25;			
		}
	} else if (customerType == 'C') {
		if (listPrice < 250){
			discountPercent = 20;
		}else {
			discountPercent = 30;
		}	
	}

	// calculate discount amount and discount price
	var discount = listPrice * (discountPercent * 0.01);
	var discountPrice = listPrice - discount;	
*/	
/*
	// set output in currency format (sort of)
	$('discount_percent').valueAsNumber = discountPercent;
	discount = discount.toFixed(2);						//set var to string with 2 decimal place format
	discount = '$' + discount;							//concatenate the dollar sign to the var

	$('discount').value = discount;							//grab the discount element and bind to var
	
	discountPrice = '$' + discountPrice.toFixed(2);
	
	$('discount_price').value = discountPrice;

} //end calculate

// calculate discount percent function
	function discPercCalc(listPrice, customerType) {
	 
		var discPercent;
		
		if (customerType == 'R') {
			if (listPrice < 100){
				discPercent = 0;
			}else if (listPrice >= 100 && listPrice < 250) {
					discPercent = 10;
			}	else if (listPrice >= 250) { 
					discPercent = 25;			
			}
		} else if (customerType == 'C') {
			if (listPrice < 250){
				discPercent = 20;
			}else {
				discPercent = 30;
			}	
		}
		discPercent = parseFloat(discPercent);
		return discPercent;
	} //end discPercCalc

	// calculate discount amount function
	function discAmountCalc(listPrice, discountPercent) {
		var discAmount = listPrice * (discountPercent * 0.01);
		return discAmount;			
	} //end discAmountCalc

	// calculate discount price function
	function discPriceCalc(listPrice, discount) {
		var discPrice = listPrice - discount;
		return discPrice;
	} // end discPriceCalc

	//date function
	function getToday() {
	
		//Create New Date
		var currentDate = new Date();
		
		//Get Current Month, Day and Year Values
		var month = currentDate.getMonth() + 1;
		var day = currentDate.getDate();
		var year = currentDate.getFullYear();

		//Set Date Formats
		month = (month < 10) ? "0" + month : month;
		day = (day < 10) ? "0" + day : day;
				
		//Return Date Output
		var dateString = "Today is " + month + "/" + day + "/" + year;
		document.writeln(dateString);
		
		
	}// end getToday function	*/

//Create helper function
/*
var $ = function (id) {

   return document.getElementById(id);

}



function calculate() {



   // Get input from user

   var listPrice = $('list_price').valueAsNumber;

     var customerType = $("type").value;



     // call calcuate discount percent function

      var discountPercent = discPercCalc (listPrice, customerType);



   // call calculate discount amount function

   var discount = discAmountCalc (listPrice, discountPercent);



   // call calculate discount price function

   var discountPrice = discPriceCalc (listPrice, discount);



   // Set output in currency format sort of

   $('discount_percent').valueAsNumber = discountPercent;



   discount = '$'+discount.toFixed(2);

   $('discount').value = discount;



   discountPrice = '$'+discountPrice.toFixed(2);

   $('discount_price').value = discountPrice;

}



// calculate discount percent

function discPercCalc (listPrice, customerType) {

      if (customerType == "R")         {

              if (listPrice < 100)

               discountPercent = 0;

           else if (listPrice >= 100 && listPrice < 250)

               discountPercent = 10;

           else if (listPrice >= 250)

               discountPercent = 25;

       } else if (customerType == "C") {

               if (listPrice < 250)

               discountPercent = 20;

           else

               discountPercent = 30;

           };

     discountPercent = parseFloat(discountPercent);

   return discountPercent;

}

// calculate discount amount

function discAmountCalc (listPrice, discountPercent) {

      var discAmount = listPrice * discountPercent * .01;

      return discAmount;

}

// calcuate discount price

function discPriceCalc (listPrice, discount) {

      var discPrice = listPrice - discount;

      return discPrice;

}



function getToday () {

// Create new date

var currentDate = new Date();



   // Get today month, day, year values

   var month = currentDate.getMonth() + 1;

   var day = currentDate.getDate();

   var year = currentDate.getFullYear();



   // Set date formats

   month = (month < 10) ? "0" + month : month;

   day = (day < 10) ? "0" + day : day;



   // return date output

   var dateString = "Today is " + month + "/" + day + "/" + year;

   document.writeln(dateString);

}

// date function

function getToday () {

    var currentDate = new Date();

    var month = currentDate.getMonth() + 1;

        month = (month < 10) ? "0" + month : month;

    var day = currentDate.getDate();

        day = (day < 10) ? "0" + day : day;

    var year = currentDate.getFullYear();

    var dateString = "Today is " + month + "/" + day + "/" + year;

    document.writeln(dateString);

}*/