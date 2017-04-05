
<?php include('header.php'); ?>


    <?php session_start();
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['message'] = $_POST['message'];

        if ($_SESSION["email"]<>'') { 
            $toemail = 'andyanimationsuk@gmail.com';
            $emailsubject = "Contact from Open Dev"; 
            $mailheader = "From: ".$_SESSION["email"]."\r\n"; 
            $mailheader .= "Reply-To: ".$_SESSION["email"]."\r\n"; 
            $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $message = "You have received a message from: " . $_SESSION['name']. "<br>Their number is: " . $_SESSION['phone']. "<br><br>" . $_SESSION["message"];

            mail($toemail, $emailsubject, $message, $mailheader) or die ("Failure"); 
        }
    ?>

    <div class="container thank-you-message">
        <h1>Thank You, <?php echo $_SESSION['name'] ?></h1>
        <p>i will try to get in touch as soon as possible. Please do take some time however to take a look around the site and feel free to contact me again regarding anything you see on this site.</p>
        <p>The Kindest of all the Regards, Andrew </p>
    </div>

<?php include('footer.php'); ?>