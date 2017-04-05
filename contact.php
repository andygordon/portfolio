<?php include('header.php'); ?>
	<div class="container contactForm">
		<h1>Lets Talk!</h1>
        <p>Send me a message, dont be shy!<Br>Either messages for a new contract or just for a chat, ping me a quick message and ill respond, i promise!</p>
        <form action="./emailDetails.php" method="post">
            <fieldset><label for="name">Name</label><input type="text" name="name" id="name"></fieldset>
            <fieldset><label for="email">Email</label><input type="text" name="email" id="email"></fieldset>
            <fieldset><label for="phone">Phone</label><input type="text" name="phone" id="phone"></fieldset>
            <fieldset><label for="message">Message</label><textarea type="text" name="message" id="message"></textarea></fieldset>
            <button class="btn btn-alternative send">Send</button>
        </form>
    </div>
<script type="text/javascript" src="./assets/js/contact.js"></script>

<?php include('footer.php'); ?>