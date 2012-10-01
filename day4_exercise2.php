<?php
	/* Day 4 														*/	
	/* Excercise 2 													*/
	/* Submitted by Scott Pardo 									*/
	/* 10/1/2012													*/
	/* 																*/
	/* Perform the following calucations using the variables: 		*/
	/* 		$DaysPerWeek 											*/
	/* 		$HoursPerDay 											*/
	/* 		$MinutesPerHour 										*/
	/*	1. Calculate the number of minutes in a week,  on Earth		*/
	/*	2. Calculate the number of minutes in a week,  in the 		*/
	/*     Bilky Way, a near parallel galaxy, if there are 26,		*/ 
	/*     hours in a day there?									*/ 

	/* Define variables */
	$DaysPerWeek = 7;
	$HoursPerDay = 24;
	$MinutesPerHour = 60;
	
	/* Calculate minutes per week for earth*/
	$MinutesPerWeek = $DaysPerWeek * ($HoursPerDay * $MinutesPerHour);
		
	/* Output calculation */
	print "There are $MinutesPerWeek minutes in one Earth week.";
	Print '<br>';
	
	/* redefine hours per day for Bilky Way */
	$HoursPerDay = 26;
	
	/* Calculate minutes per week for Bilky Way*/
	$MinutesPerWeek = $DaysPerWeek * ($HoursPerDay * $MinutesPerHour);

	/* Output calculation */
	print "There are $MinutesPerWeek minutes in one week in the Bilky Way.";
	Print '<br>';
?>