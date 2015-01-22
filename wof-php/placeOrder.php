<!DOCTYPE html>
<html>
	<head>
		<title>Thank You!</title>
		<link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
		<link rel="stylesheet" type="text/css" href="../wof-css/960gs.css">
		<link rel="stylesheet" type="text/css" href="../wof-css/wOF.css">
	</head>
	<body>
		<div class="container_12">
			<div class="prefix_3 grid_6 suffix_3" id="thankYou">
				<?php
				/*===declare variables===*/
					$name = strip_tags($_REQUEST['name']);
					
					$q1 = strip_tags($_REQUEST['q1']);
					$q1wrap = strip_tags($_REQUEST['q1wrap']);
					$q1fill = strip_tags($_REQUEST['q1fill']);
					$q2 = strip_tags($_REQUEST['q2']);
					$q2wrap = strip_tags($_REQUEST['q2wrap']);
					$q2fill = strip_tags($_REQUEST['q2fill']);
					$q3 = strip_tags($_REQUEST['q3']);
					$q3wrap = strip_tags($_REQUEST['q3wrap']);
					$q3fill = strip_tags($_REQUEST['q3fill']);
					
					$drinkName = strip_tags($_REQUEST['drink']);
					$custom = strip_tags($_REQUEST['custom']);
					$paperPlastic = strip_tags($_REQUEST['paperPlastic']);
					$contact = strip_tags($_REQUEST['contact']);
				/*===do math===*/
					/* set cost of wrap */
					if ($q1 <= 0) {
							$q1balance = 0;
						} else {
							if ($q1fill=="Garden Vegetable") {
								$q1balance = (3.50*$q1);
							} elseif ($q1fill=="California Veggie") {
								$q1balance = (3.50*$q1);
							} elseif ($q1fill=="Tuna") {
								$q1balance = (4.50*$q1);
							} else {
								$q1balance = (5.00*$q1);
							}
						}
					if ($q2 <= 0) {
							$q2balance = 0;
						} else {
							if ($q2fill=="Garden Vegetable") {
								$q2balance = (3.50*$q2);
							} elseif ($q2fill=="California Veggie") {
								$q2balance = (3.50*$q2);
							} elseif ($q2fill=="Tuna") {
								$q2balance = (4.50*$q2);
							} else {
								$q2balance = (5.00*$q2);
							}
						}
					if ($q3 <= 0) {
							$q3balance = 0;
						} else {
							if ($q3fill=="Garden Vegetable") {
								$q3balance = (3.50*$q3);
							} elseif ($q3fill=="California Veggie") {
								$q3balance = (3.50*$q3);
							} elseif ($q3fill=="Tuna") {
								$q3balance = (4.50*$q3);
							} else {
								$q3balance = (5.00*$q3);
							}
						}
					/* set wrap quantity */
					if ($q1== 0) {
							$wrap1 = "nothing";
						} else {
							$wrap1 = $q1." ".$q1fill." with ".$q1wrap." wrap.";
						}
					if ($q2 == 0) {
							$wrap2 = "nothing";
						} else {
							$wrap2 = $q2." ".$q2fill." with ".$q2wrap." wrap.";
						}
					if ($q3 == 0) {
							$wrap3 = "nothing";
						} else {
							$wrap3 = $q3." ".$q3fill." with ".$q3wrap." wrap.";
						}
					/* set drink cost */
					if ($drinkName=="Water Bottle") {
							$drinkCost = 0.75;
						} elseif ($drinkName=="Snapple") {
							$drinkCost = 1.00;
						} else {
							$drinkCost = 0.00;
						}
					/* calculate final cost */
					$subTotal = ($q1balance + $q2balance + $q3balance);
					$total = ($subTotal + $drinkCost);
					$total = number_format($total, 2);
				/*===send email===*/
					$to = 'hpcatering613@gmail.com';

					$subject = 'Weekly Wrap Order Form';

					$headers = "From: " . $contact . "\r\n";
					$headers .= "Reply-To: ". $contact . "\r\n";
					$headers .= "CC: andrew.tapp@gmail.com\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

					$message = '<html><body><h1>'.$name.'</h1><ul><li>The first order is: '.$wrap1.'</li><li>The second order is: '.$wrap2.'</li><li>The third order is: '.$wrap3.'</li><li>Special Instructions: '.$custom.'</li><li>Beverage of choice is: '.$drinkName.'</li><li>'.$name.' will be paying by: '.$paperPlastic.'</li><li>'.$name.' can be emailed at: '.$contact.'</li><li>Amount Due is: $'.$total.'</ul></body></html>';

					mail($to, $subject, $message, $headers);
				/*===print confirmation===*/
					$thankYou = "Your total balance is \$$total. Thank you for placing your order. It will be available at Ohr Temimim School on Wednesday morning.";
					print $thankYou;
				?>
			<a href="../wrapOrderForm.html" class="button">Place a new order</a><br><br>
			<h6>Like this order form? Check out the author's website @ <a href="http://www.andrewtapp.com">AndrewTapp[dot]com</a></h6>
			</div>
		</div>
	</body>
</html>