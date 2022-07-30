<?php 

	// be careful when you change the email subject and content, do not change or remove the variables, just change the text content
	// inaccuracies in changing or removing variables can cause errors

	// email order notification for administrator
	$to = $admin_email;
	$subject = "[Salapak E-Katalog] Order Information From : ".$name. " - Purchase Code : ".$code. " ";
	$message = "Hello Admin, <br><br>This is an email notification that there is an order with the details below : 
					<br><br>Name : ".$name. "
					<br>Code : ".$code. "
					<br>Email : ".$email. "
					<br>Phone : ".$phone. "
					<br>Address : ".$address. "
					<br>Shipping : ".$shipping. "
					<br>Date : ".$date. "
					<br>Order List : <br>".str_replace(',', '<br>', $order_list). "
					
					<br><br>Please login to your admin panel to see and confirm the order :
					<br><a href=".$server_url.">click here</a>.

					<br><br>© 2019 E-Commerce Android App. All Rights Reserved. 
					";

	// email invoice detail for buyer
	$to2 = $email;
	$subject2 = "[Salapak E-Katalog] Rincian Faktur Anda: ".$name. "  Kode pesanan : ".$code. " ";
	$message2 = "Hallo ".$name.", <br><br>Ini adalah pemberitahuan bahwa faktur telah dibuat dari pesanan Anda dengan detail di bawah ini : 
					<br><br>Nama : ".$name. "
					<br>Code : ".$code. "
					<br>Email : ".$email. "
					<br>Telfon : ".$phone. "
					<br>Alamat : ".$address. "
					<br>Pengiriman : ".$shipping. "
					<br>Tangal : ".$date. "
					<br>Pesanan : <br>".str_replace(',', '<br>', $order_list). "
					
					<br><br>Mohon segera lakukan pembayaran agar pesanan Anda segera diproses.
					
					<br><br>Semua Pembayaran dapat dilakukan dengan transfer ke :
					<br>Bank BCA: 123456789
					<br>Bank BNI : 123456789
					<br>Bank BRI : 123456789
					<br>Bank MANDIRI : 123456789
					<br>PayPal : 279valdi@gmail.com

					<br><br>Setelah melakukan pembayaran, silahkan konfirmasi pembayaran Anda melalui email di bawah ini dengan melampirkan bukti pembayaran Anda :
					<br>".$admin_email. "

					<br><br>© 2022 Salapak E-Katalog App. All Rights Reserved. 
					";

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Salpak E-Katalog <don-not-reply@solodroid.co.id>' . "\r\n";

	//send email to administrator
	@mail($to, $subject, $message ,$headers);

	//send email to buyer
	@mail($to2, $subject2, $message2 ,$headers);

?>