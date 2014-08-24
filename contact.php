<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$email_body = " ";
	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $message;

	header("Location: contact.php?status=thanks");
	exit;
}
?>
<?php 
$pageTitle = "Contact Mike";
$section = "contact";
include('includes/header.php'); ?>

<div class="section page">
	<div class="wrapper">

		<h1> Contact </h1>
	
		<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
			<p>Thanks for the email! I'be in touch shortly!</p>
			<?php } else {  ?>
		<p> I'd love to hear from you! Complete the form to send me an email. </p>
		<form method="post" action="contact.php">
			<table>
				<tr>
					<th>
						<label for="name">Name</label>
					</th>
					<td>
						<input type="text" name="name" id="name">
					</td>
				</tr>
				<tr>
					<th>
						<label for="email">Email</label>
					</th>
					<td>
						<input type="text" name="email" id="email">
					</td>
				</tr>
				<tr>
					<th>
						<label for="message">Message</label>
					</th>
					<td>
						<textarea name="message" id="message"></textarea>
					</td>
				</tr>   

				<tr>
					<th>
						<label for="message">Reason for Inquiry</label>
					</th>
					<td>
						<select id = "inquiry">
               				<option value = "1">Not as Displayed</option>
              	 			<option value = "2">Wrong Order</option>
               				<option value = "3">Exchange</option>
               				<option value = "4">Return</option>
           				</select> 
					</td>
				</tr>                      
			</table>
			<input type="submit" value="Send">
		</form>
<?php } ?>

	</div>
</div>

<?php include('includes/footer.php'); ?>