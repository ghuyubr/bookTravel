<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Book My Trip Flat Responsive Widget Template :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Book My Trip web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
<!-- stylesheet -->
<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i" rel="stylesheet">
<!-- //stylesheet -->
</head>
<body class="bg agileinfo">
   <h1 class="agile_head text-center">PREMIUM TRAVEL TEMPLETE $100</h1>
   <p class="text-center">Fusce turpis  nisi aliquam facilisis elit.</p>
     <div class="container w3">
		<form action="#" method="post" class="agile_form">
		   <h2 class="w3layouts text-center">Offers a quick and easy way to book tickets online</h2>
		   <ul class="agile_info_select">
				 <li><input type="radio" name="view" id="excellent"> 
				 	  <label for="excellent">flight</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" id="good" checked="checked"> 
					  <label for="good">train</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" id="neutral" class=" w3l"> 
					 <label for="neutral">bus</label>
				     <div class="check wthree"></div>
			     </li>
			</ul>
			<div class="clear"></div>
			<input type="text" placeholder="Your Name" name="name" class="name agileits" required=""/>
			<input placeholder="Date" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/>
			<div class="list_agileits_w3layouts">
				<div class="section_class_agileits sec-left">
				  <select>
					<option value="0">Destination City</option>
					<option value="1">city1</option>
					<option value="2">city2</option>
					<option value="3">city3</option>
					<option value="4">city4</option>
				  </select>
				</div>
				<div class="section_class_agileits sec-right">
				  <select>
					<option value="0">select class</option>
					<option value="1">Any</option>
					<option value="3">Economy Class</option>
					<option value="2"> Business Class</option>
					<option value="1">First Class</option>
				  </select>
				</div>	
				<div class="clear"></div>
			</div>	
			<div class="list_agileits_w3layouts">
				<div class="section_class_agileits sec-left">
				 <select>
					<option value="0">Adults</option>
					<option value="1">0</option>
					<option value="2">1</option>
					<option value="3"> 2</option>
					<option value="4">3 or 3+</option>
				 </select>
				</div>	
				<div class="section_class_agileits sec-right">
				  <select>
					<option value="0">Children</option>
					<option value="1">0</option>
					<option value="2">1</option>
					<option value="3"> 2</option>
					<option value="4">3 or 3+</option>
				 </select>
				</div>
				<div class="clear"></div>
            </div>				
			<div class="submit">
			  <input type="submit" value="submit">
			</div>  
		</form>	
	</div>	
	<div class="agileits_w3layouts_copyright text-center">
			<p>© 2017 Book My Trip. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
	</div>
<!--start-date-piker-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css') ?>" />
		<script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- /End-date-piker -->		
</body>
</html>