<?php
/**
 * Template Name: Aloha TSS
 *
 */

get_header(); 

$invalid = false;
if($_POST['aloha-form']){

	if($_POST['aloha-name'] == ''){
		$name_error = 'show-error';
		$invalid = true;
	}
	if($_POST['aloha-email'] == ''){
		$email_error = 'show-error';
		$invalid = true;
	}
	if(!validEmail($_POST['aloha-email'])){
		$email_error = 'show-error';
		$invalid = true;
	}
	if($_POST['aloha-message'] == ''){
		$message_error = 'show-error';
		$invalid = true;
	}
	
	if(!$invalid){
		// TODO: Clean inputs
		sendEmail($_POST['aloha-name'],$_POST['aloha-subject'],$_POST['aloha-email'],$_POST['aloha-phone'],$_POST['aloha-message']);
	}

}

// Send an email
function sendEmail($name,$subject,$email,$phone,$message){

	$to = "jmack@pixelmack.com";
	$subject = "Sandwich Spot Aloha form has been submitted ";
	$body = 'Name: ' . $name ."\n\r";
	$body.= 'Email: ' . $email ."\n\r";
	$body.= 'Phone: ' . $phone ."\n\r";
	$body.= 'Subject: ' . $subject ."\n\r\n\r";
	$body .= $message . " \n\r";
	$body .= "\n\r";

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
	$headers .= 'To: '. $to . "\r\n";
	$headers .= 'From: Aloha@SandwichSpotSF.com' . "\r\n";
	$headers .= "X-Mailer: php";

	mail($to, $subject, $body, $headers);
}

/**
Validate an email address.
Provide email address (raw input)
Returns true if the email address has the email 
address format and the domain exists.
*/
function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if
(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || !checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}

?>
	
	<section id="content" class="aloha" >
		<div id="top-boo"></div>
		<div id="left-boo"></div><div id="right-boo"></div>
		
		<div id="aloha-content">
			<?php if($invalid || !isset($_POST['aloha-form'])){ ?>
			<div id="left-box">
				<div style="float;left;height:356px;width:400px;"></div>
				<div id="contact-numbers">
					<div class="cinfo">
						<h5>Phone No.</h5>
						415-829-2587
					</div>
					<div class="cinfo">
						<h5>Email</h5>
						<a href="mailto:Aloha@SandwichSpotSF.com">Aloha@SandwichSpotSF.com</a>
					</div>
					<div class="cinfo">
						<h5>mon-thru</h5> 8am-6pm <h5>fri-sat</h5> 8am-7pm <h5>sun</h5> 8am-4pm
					</div>
				</div>
			</div>
			
			<div id="right-box">
				<div class="error-box <?php if($name_error || $email_error) echo 'show-error'; ?>">
					<img class="red-star" src="<?php bloginfo('template_url'); ?>/images/red-star.png" alt="Required Star" />Name and Valid Email Required
				</div>
				<form id="aloha-contact" name="aloha-contact" method="post" action="<?php bloginfo('url'); ?>/aloha" >
					<label for="aloha-name">
						<img class="red-star" src="<?php bloginfo('template_url'); ?>/images/red-star.png" alt="Required Star" />
						Name
					</label>
					<input type="text" name="aloha-name" value="<?php echo $_POST['aloha-name']; ?>">
					
					<label for="aloha-email">
						<img class="red-star" src="<?php bloginfo('template_url'); ?>/images/red-star.png" alt="Required Star" />
						Email
					</label>
					<input type="text" name="aloha-email" value="<?php echo $_POST['aloha-email']; ?>">
					
					<label for="aloha-phone">Phone No.</label>
					<input type="text" name="aloha-phone" value="<?php echo $_POST['aloha-phone']; ?>">
					
					<label for="aloha-subject">Subject</label>
					<input type="text" name="aloha-subject" value="<?php echo $_POST['aloha-subject']; ?>">
					
					<label for="aloha-message">Message</label>
					<textarea name="aloha-message"><?php echo $_POST['aloha-message']; ?></textarea>
					
					<input type="hidden" name="aloha-form" value ="1" />
					
					<a class="submit-message" onclick="jQuery('#aloha-contact').submit();return false;" href="#">Submit Message</a>
				</form>
			</div>
			<?php }else{ ?>
				<div id="left-box">
				<div style="float;left;height:356px;width:400px;"></div>
				<div id="contact-numbers">
					<div class="cinfo">
						<h5>Phone No.</h5>
						415-829-2587
					</div>
					<div class="cinfo">
						<h5>Email</h5>
						<a href="mailto:Aloha@SandwichSpotSF.com">Aloha@SandwichSpotSF.com</a>
					</div>
					<div class="cinfo">
						<h5>mon-thur</h5> 8am-6pm <h5>fir-sat</h5> 8am-7pm <h5>sun</h5> 8am-4pm
					</div>
				</div>
			</div>
			
			<div id="right-box">
				<div style="text-align:center;color:#791D1D;">
					<h1>Thank You!</h1> 
					<h2>Your information has been sent to us and we will get in touch ASAP.</h2>
				</div>
			</div>
				
			<?php } ?>
		</div>
		
		<div id="bottom-boo"></div>
		
	</section>
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
