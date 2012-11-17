
function calculate() {
	// get input from user
	//assign value to var using call to DOM	using chaining
	var listPrice = document.getElementById('list_price').valueAsNumber;										//declare variable

	//repeat the above for the discout percent
	var discountPercent = document.getElementById('discount_percent').valueAsNumber;

	// calculate discount amount and discount price
	var discount = listPrice * (discountPercent * 0.01);
	
	var discountPrice = listPrice - discount;
	
	// set output in currency format (sort of)
	discount = '$' + discount.toFixed(2);		//set var to string with 2 decimal place format and add $
	
	var tempVar = document.getElementById('discount');	//declare var for output
	tempVar.value = discount;								//assign value to output variable
	
	discountPrice = '$' + discountPrice.toFixed(2);
	document.getElementById('discount_price').value = discountPrice;
	
} //end calculate