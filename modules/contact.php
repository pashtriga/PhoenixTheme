<?php
/*
Template Name: Contact
*/
?>

<?php
session_start();
if(isset($_POST['submit'])) {

    $errors = [];
	if(trim($_POST['contactName']) === '') {
		$errors[] = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$errors[] = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$errors[] = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$errors[] = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
        $_SESSION['emailSent'] = true;
        wp_redirect(home_url() . "/contact");
        exit;
	}

} ?>

<?php get_header(); ?>

<div class="row contactsett">

    <div class="contactleftside col-md-4 d-flex align-items-center justify-content-center">
        <div class="allcontactitems">
            <div class="contactitems">
                <i class="fa fa-envelope d-flex justify-content-center my-2" ></i>
                <p class="d-flex justify-content-center">phoenixtheme@gmail.com</p>
                <i class="fa fa-phone d-flex justify-content-center my-2" ></i>
                <p class="d-flex justify-content-center">+38349000000</p>
                <i class="fa fa-map-marker d-flex justify-content-center my-2"></i>
                <button type="button" class="d-flex justify-content-center text-white location-btn" data-toggle="modal" data-target="#myModal">Prishtine</button>
            </div>
        </div>
    </div>
    
    <div class="contactrightside col-md-8 d-flex justify-content-center align-items-center">
        <div class="container-fluid">
            <div id="content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h1 class="entry-title d-flex justify-content-center align-items-center mb-2"><?php the_title(); ?></h1>
                    <h5 class="entry-info d-flex justify-content-center align-items-center">Got any questions? Feel free to ask! </h5>
                    <div class="entry-content">

                        <?php if ($_SESSION['emailSent']) { ?>
                            <div class="alert alert-success mt-5">
                                Thanks, your email was sent successfully
                            </div>
                        <?php } ?> 

                        <?php if ($errors) { ?>
                            <div class="alert alert-danger">
                            <?php foreach ($errors as $err)  { ?>
                                <?php echo $err; ?> <br>
                            <?php } ?>
                            </div>
                        <?php } ?>

                        <?php //the_content(); ?>
                        
                        <form class="validate-form" action="<?php the_permalink(); ?>" id="contactForm" method="post">
                            <div class="form-group mb-0 wrap-input1 validate-input" data-validate="Name is required">
                                <label for="contactName" class="mt-3">Name:</label>
                                <input type="text" name="contactName" id="contactName"
                                    value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>"
                                    class=" input1 required requiredField form-control" />   
                            </div>
                            
                            <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                <label for="email" class="mt-3">Email:</label>
                                <input type="text" name="email" id="email"
                                    value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>"
                                    class="input1 required requiredField email form-control" />
                            </div>

                            <div class=" wrap-input1 validate-input" data-validate="Message is required">
                                <label for="commentsText" class="mt-3">Message:</label>
                                <textarea name="comments" id="commentsText" rows="3"
                                    class="input1 required requiredField form-control"></textarea>
                            </div>
                            
                            <div class="container-contact1-form-btn">
                                <button class="butonidiff butminoradds" name="submit">Send</button>
                            </div>                      
                        </form>
                  
                    </div><!-- .entry-content -->
                </div><!-- .post -->

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
        
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Prishtine</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="map">
                <div id="map_prishtina" style="width: 100%; height: 450px"></div>  
            </div>
        </div>
        
        </div>
    </div>
</div><!-- The Modal -->

                <?php endwhile; endif; ?>
            </div><!-- #content -->
        </div><!-- #container -->
    </div>

<?php $_SESSION['emailSent'] = false; ?>
<?php get_footer(); ?>