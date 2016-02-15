<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>Confernce@JECRC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="<?php echo base_url();?>css/materialize.css" media="screen,projection">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/override.css">
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.2.0.js"></script>
    </head>
    <body>
      <header>
        <ul style="width: 240px;" id="nav-mobile" class="side-nav fixed">
          <li class="bold"><a href="#!">Conference@JECRC</a></li>
            <li class="logo"><img class="responsive-img" src="<?php echo base_url();?>img/jc_logo.png"></li>
            <li class="bold"><a href="#!" class="waves-effect waves-teal">Home</a></li>
             <div class="divider"></div>
            <li class="no-padding"></li>
              <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">About</a>
                  <div style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;" class="collapsible-body">
                    <ul>
                      <li><a href="#!">JECRC</a></li>
                      <li><a href="#!">JECRC-University</a></li>
                      <li><a href="#!">JECRC-UDML</a></li>
                    </ul>
                  </div>
                </li>
            </ul>
            <div class="divider"></div>
        <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Events</a>
              <div style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;" class="collapsible-body">
                <ul>
                  <li><a href="<?php echo base_url();?>index.php/home/conference">Conferences</a></li>
                  <li><a href="#!">Workshop</a></li>
                  <li><a href="#!">Seminar</a></li>
                </ul>
              </div>
            </li>
          </ul>
           <div class="divider"></div>
        <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Contact US</a></li>
      </ul>
        <div class="top-nav black hide-on-large-only">
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu medium"></i></a>
        </div>

    </header>
<main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l10 offset-l2">
      <div class="slider">
              <ul class="slides">          
                <li>
                     <img class="responsive-img" src="<?php echo base_url();?>img/jecrc-uni.jpg"> <!-- random image -->
                </li>
                <li>
                     <img class="responsive-img" src="<?php echo base_url();?>img/1.jpg"> <!-- random image -->
                </li>
                <li>
                     <img class="responsive-img" src="<?php echo base_url();?>img/jecrc-udml.jpg"> <!-- random image -->
                </li>
                <li>
                     <img class="responsive-img" src="<?php echo base_url();?>img/jecrcpic.jpg"> <!-- random image -->
                </li>
               </ul>
        </div>
