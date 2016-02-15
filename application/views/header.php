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
      <div class="container">
      <header>
        <div class="slider">
              <ul class="slides">          
                <li>
                     <img src="<?php echo base_url();?>img/jecrc-uni.jpg"> <!-- random image -->
                </li>
               </ul>
        </div>
        <div class="top-nav blue hide-on-large-only">
          <a href="#" data-activates="nav-mobile" class="button-collapse med"><i class="mdi-navigation-menu"></i></a>
        </div>
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
                  <li><a href="#!">Conferences</a></li>
                  <li><a href="#!">Workshop</a></li>
                  <li><a href="#!">Seminar</a></li>
                </ul>
              </div>
            </li>
          </ul>
           <div class="divider"></div>
        <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Contact US</a></li>
      </ul>
    </header>

