<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewort" content="width=device-width, initial-scale=1.0">
	<title>contact</title>
	<link rel="stylesheet" href="stylec.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
		
</head>
<body >
	<section class="contact">
		<div class="content">
			<h2><b>Contact Us</b></h2>
			<p style="font-family:cursive;"><b>If you are interested on me, You can contact me. Always I'll be there.</p>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Address</h3>
						<p>Main Road,<br>Galle</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Phone</h3>
					<p>077-8850731</p>
				</div>
			</div>
			<div class="box">
				<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
					<p>vimasha.9999@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="contactForm">
			<form>
				<h2>Send Message</h2>
				<div class="inputbox">
					<input type="text name="" required="required">
					<span>Full Name</span>
				</div>
				<div class="inputbox">
					<input type="text name="" required="required">
					<span>Email</span>
				</div>
				<div class="inputBox">
					<textarea required="required"></textarea>
				<div class="inputbox">
					<input type="text name="" required="required">
					<span>type your message...</span>
				</div>
				<div class="inputBox">
					<input type="submit" name="" value="send">
				</div>
			</form>
				</div>

	</div>
</section>
<script>
	const Full Name=document.getElementById('Full_Name')
const Email=document.getElementById('Email')
const form=document.getElementById('contactForm')

contact.form.addEventListener('send',(e) => {
	let messages=[]
	if(Full_Name.value === '' || Full_Name.value==null){
	message.push('please fill out this field')
    }

    if(messages.length>0){
    	e.preventDefault()
    	error.Element.innerText = messages.join(', ')
    }
	e.preventDefault()
})

</script>


	
		

</body>
</html>