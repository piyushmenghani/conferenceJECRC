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
        <div class="row">
        <div class="col s12 m4 l4">
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
        <ul style="width: 240px;" id="nav-mobile" class="side-nav fixed">
            <li class="logo"><a id="logo-container" href="#!" class="brand-logo">JECRC@CON</a></li>
            <div class="row"></div>
            <div class="row"></div>
            <li class="bold"><a href="#!" class="waves-effect waves-teal">Home</a></li>
            <li class="no-padding"></li>
              <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">About</a>
                  <div style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;" class="collapsible-body">
                    <ul>
                      <li><a href="color.html">JECRC</a></li>
                      <li><a href="grid.html">JECRC-University</a></li>
                      <li><a href="helpers.html">JECRC-UDML</a></li>
                    </ul>
                  </div>
                </li>
            </ul>
        <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Events</a>
              <div style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;" class="collapsible-body">
                <ul>
                  <li><a href="badges.html">Conferences</a></li>
                  <li><a href="buttons.html">Workshop</a></li>
                  <li><a href="breadcrumbs.html">Seminar</a></li>
                </ul>
              </div>
            </li>
          </ul>
        <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Contact US</a></li>
      </ul>
    </div>
    <div class="s12 m8 l8">
