<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main>
    <div class="row"></div>
    <div class ="row">
        <div class="col s12 m8 l8">
            <h4 class="card-panel indigo darken-1 white-text">About Conference@JECRC</h4>
            <p class="justified card-panel teal blue-grey lighten-5" align="justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="col s12 m4 l4">	
            <h4 class="card-panel indigo darken-1 white-text">Latest Events</h4>
            <div class="card-panel blue-grey lighten-5">
                <marquee scrollamount="3" behavior="scroll" direction="up" id="marquee" overflow:hidden;="">
                    <img src="<?php echo base_url();?>img/new_1.gif"><a href="#!" target="_blank"><b>Register Now</b></a><hr>
                    <img src="<?php echo base_url();?>img/new_1.gif"><a href="#!" target="_blank"><b>Register Now</b></a><hr>
                    <img src="<?php echo base_url();?>img/new_1.gif"><a href="#!" target="_blank"><b>Register Now</b></a><hr>							
                </marquee>	
            </div>
        </div>
    </div>
	</main>