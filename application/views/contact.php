<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main>
	<div>
	<div class="row">
	<div class="col s8">
    <div class="map-container">
	<iframe width="98%" height="60%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Jaipur%20Engineering%20College%20and%20research%20centre%2C%20Jaipur%2C%20Rajasthan%2C%20India&key=AIzaSyDvM6K5_I2eHz59FjqipT6F-TYP8pJU1_o" allowfullscreen></iframe>
	</div>
	</div>
	<div class="col s4">
    <h4>Write to us</h4>
		<form  action ="$_SERVER['PHP_SELF']" method="post">
		<div class="input-field col s12">
			<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="name" class="validate">
          <label for="icon_prefix">Name</label>
        </div>
       	 <div class="input-field col s12">
       	 	<i class="material-icons prefix dp48">email</i>
          <input id="email" type="email" name="email" class="validate">
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
       	   <div class="input-field col s12">
   	   	   <i class="material-icons prefix">message</i>
  		   <textarea id="icon_prefix2" name="message" class="materialize-textarea"></textarea>
           <label for="icon_prefix2">Message</label>
        </div>
        <div>
        <button class=" blue-grey darken-2 btn waves-effect waves-light" type="submit" name="action">Submit
   		 <i class="material-icons right">send</i>
 		 </button>
 		</div>
		</form>
	</div>
  </div>
  <div class="row">
    <div class="col s6">
      <h5 class="heading">Contact us on </h5>
    </div>
  </div>
  <div class="row">
      <div class="col s12">
        <h6><b> Jaipur Engineering College And Research Centre</b><br>
        <b>Jaipur,Rajasthan</h6><br> 
      </div>  
  </div>
  <div class="row">
      <div class="col s4">
<SPAN><b>Dr. V.K. Chandana</b></SPAN><br>
<span>Convenor</span><br>
<i class="material-icons prefix">phone</i>
<span>+91-9891406784</span>
  </div>
<div class="col s4">
<SPAN><b>Dr. K S Raghuwanshi</b></SPAN><br>
<span>Co-Convenor</span><br>
<i class="material-icons prefix">phone</i><span>+91-9166016673</span>
  </div>

	</div>
</div>
</main>
  <?php
  if(isset($_POST['action']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    if(!empty($name) && !empty($email) && !empty($message))
    {
      mail(to, subject, '$message');
    }
  } 
   ?>