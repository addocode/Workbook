<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">

  <title>Workbook Frontpage</title>
  <meta name="description" content="Workbook Zentrum elektronische Medien">
  <meta name="Adam Dolinsky" content="Mediamatiker in Ausbildung">

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/wappen-ch-300x300.png" type="image/x-icon"/>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/wappen-ch-300x300.png" type="image/x-icon"/>

  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

/* Document
   ========================================================================== */

/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

 html {
  line-height: 1.15; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
}

/* Sections
   ========================================================================== */

/**
 * Remove the margin in all browsers.
 */

body {
  margin: 0;
}

/**
 * Render the `main` element consistently in IE.
 */

main {
  display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
  box-sizing: content-box; /* 1 */
  height: 0; /* 1 */
  overflow: visible; /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/* Text-level semantics
   ========================================================================== */

/**
 * Remove the gray background on active links in IE 10.
 */

a {
  background-color: transparent;
}

/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none; /* 1 */
  text-decoration: underline; /* 2 */
  text-decoration: underline dotted; /* 2 */
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/**
 * Add the correct font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */

/**
 * Remove the border on images inside links in IE 10.
 */

img {
  border-style: none;
}

/* Forms
   ========================================================================== */

/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-size: 100%; /* 1 */
  line-height: 1.15; /* 1 */
  margin: 0; /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input { /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select { /* 1 */
  text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/**
 * Correct the padding in Firefox.
 */

fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
  box-sizing: border-box; /* 1 */
  color: inherit; /* 2 */
  display: table; /* 1 */
  max-width: 100%; /* 1 */
  padding: 0; /* 3 */
  white-space: normal; /* 1 */
}

/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
  vertical-align: baseline;
}

/**
 * Remove the default vertical scrollbar in IE 10+.
 */

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type="search"] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/* Interactive
   ========================================================================== */

/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

details {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary {
  display: list-item;
}

/* Misc
   ========================================================================== */

/**
 * Add the correct display in IE 10+.
 */

template {
  display: none;
}

/**
 * Add the correct display in IE 10.
 */

[hidden] {
  display: none;
}

/*********************************/


body {
  background-image: url('<?php echo get_template_directory_uri(); ?>/img/camo2.jpg');
  height: calc(100vh - 260px);
  
  }
  
.whitespace {
  background-color: white;
  padding: 70px;
  margin: 60px;
  height: calc(100vh - 260px);
}

.sideL {
  width: 30%;
  height: calc(100% - 0px);
  float: left;
  position: relative;
}

.sideR {
  width: 70%;
  height: calc(100% - 0px);
  float: right;
  position: relative;
}

.logo-lba {
  height: 100%;
  width: 100%;
}







h1.mainpage-h1 {
  text-transform: lowercase;
  background: none;
  color: black;
  margin: 0;
  padding: 0;
  font-size: 55px;
}
p.mainpage-p {
  line-height: 23px;
  font-size: 17px;
  padding: 10px 0;
}
.box-content div a {
  text-decoration: none;
  color: rgba(255,255,255,0.8);
  font-weight: bold;
}
.accordion {
  width: 100%;
  position: relative;
  height: 65%;
  overflow: scroll;
}
@media screen and (max-height: 1100px) {
  .accordion {
    height: 55%;
  }
}
@media screen and (max-height: 900px) {
  .accordion {
    height: 45%;
  }
}








.accordion input {
	display: none;
}
.box {
	position: relative;
  background: rgba(235,235,235);
  height: 64px;
  transition: all .15s ease-in-out;
  border-radius: 10px;
  margin: 10px 0;
}
.box:hover {
  /*background: rgb(204, 211, 215);*/
}
.box::before {
    content: '';
    position: absolute;
    display: block;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    pointer-events: none;
}
.box-title {
  font-size: 20px;
  text-transform: uppercase;
	width: calc(100% - 40px);
	height: 64px;
	line-height: 64px;
	padding: 0 20px;
	display: inline-block;
	cursor: pointer;
  -webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;
  
  background: -moz-linear-gradient(top, #cfcfcf 0%, #efefef 100%);
  background: -webkit-linear-gradient(top, #cfcfcf 0%,#efefef 100%);
  background: linear-gradient(to bottom, #cfcfcf 0%,#efefef 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfcfcf', endColorstr='#efefef',GradientType=0 );
  border-bottom: 2px #DC0018 solid;

  transition: all 0.2s ease-in-out;
}
.box-title:hover {
  padding-left: 60px !important;
  transition: all 0.2s ease-in-out;
}
.box-box-title {
  font-size: 52px;
  text-transform: uppercase;
  text-align: center;
  line-height: 2em;
}
.box-content {
	width: calc(100% - 40px);
	padding: 30px 20px;
	font-size: 11pt;
	color: rgba(255,255,255,0.8);
	display: none;
}
.box-close {
	position: absolute;
	height: 64px;
	width: 100%;
	top: 0;
	left: 0;
	cursor: pointer;
	display: none;
}
input:checked + .box {
	height: auto;
  margin: 16px 0;
}
input:checked + .box .box-title {
	border-bottom: 1px solid rgba(0,0,0,.18);
}
input:checked + .box .box-content,
input:checked + .box .box-close {
	display: inline-block;
}
.arrows section .box-title {
	padding-left: 44px;
	width: calc(100% - 64px);
}
.arrows section .box-title:before {
	position: absolute;
	display: block;
	content: '\203a';
	font-size: 18pt;
	left: 20px;
	top: -2px;
	transition: transform .15s ease-in-out;
	color: rgba(0,0,0,.54);
}
input:checked + section.box .box-title:before {
	transform: rotate(90deg);
}

.box-content div {
  height: 100px;
  background-color: white;
  margin: 10px 0;
  border-radius: 4px;
  transition: all .15s ease-in-out;
}

.box-content div:hover {
  opacity: 0.88;
  transition: all .15s ease-in-out;
}





















*, input::placeholder {
font-family: 'f-light';
letter-spacing: 0.55px;
}

input::placeholder {
  color: gray;
}

*::selection { 
	background-color: rgb(143, 143, 143);
	color: #fff; 
}

nav {
width: 100%;
height: 60px;

z-index: 99;

position: fixed;

background: -moz-linear-gradient(top, #cfcfcf 0%, #efefef 100%);
background: -webkit-linear-gradient(top, #cfcfcf 0%,#efefef 100%);
background: linear-gradient(to bottom, #cfcfcf 0%,#efefef 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfcfcf', endColorstr='#efefef',GradientType=0 );
border-bottom: 2px #DC0018 solid;
}

nav ul {
margin: 0;
padding: 0;
list-style: none;
z-index: 99;
}

nav ul li {
float: left;
width: 200px;
height: 60px;
line-height: 60px;
font-size: 16px;
z-index: 99;
}

nav ul li a {
text-decoration: none;
display: block;
color: #707070;
padding-left: 20px;
z-index: 99;
}

nav ul li:hover {
cursor: pointer;
z-index: 99;
}

nav ul li a:hover {
background-color: #cfcfcf;
font-family: 'f-bold';
letter-spacing: -0.2px;
z-index: 99;
}

nav ul li ul li {
display: none;
z-index: 99;
}

nav ul li:hover ul li {
display: block;
background-color: #efefef;
z-index: 99;
}

.to-right {
margin-left: 7%;
}






.camo-top {
background-image: url(img/camo2.jpg);
background-repeat: no-repeat;
background-position: center;
background-size: cover;
background-attachment: fixed;
height: 450px;
width: 100%;
}

.mainarea {
background-color: white;
margin: 0 auto;
height: 100%;
}


footer {
height: 200px;
background: -moz-linear-gradient(top, #cfcfcf 0%, #fff 100%);
background: -webkit-linear-gradient(top, #cfcfcf 0%,#fff 100%);
background: linear-gradient(to bottom, #cfcfcf 0%,#fff 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfcfcf', endColorstr='#fff',GradientType=0 );
border-top: 2px #DC0018 solid;
}

.footer-content {
margin: 0 auto;
padding: 30px 100px 0 100px;
}

.logo-ch {
width: 200px;
}
.logo-zem {
width: 270px;
float: right;
}

.logo-zem-header {
  float: left;
  width: 103px;
  padding: 16px 50px 0 0;
}


h1 {
text-transform: uppercase;
background-color: black;
color: white;
font-family: 'f-bold';
letter-spacing: 3px;
margin: 0;
display: block;
padding: 28px 0 20px 20px;
font-size: 2em;
}

.gradient-white {
background: -moz-linear-gradient(left, rgba(255,255,255,0.7) 0%, #fff 100%);
background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%,#fff 100%);
background: linear-gradient(to right, rgba(255,255,255,0) 0%,#fff 100%);
width: 25%;
height: 100%;
float: right;
}

.the-title {
  padding-top: 40px;
}





/*--------------------------------------------------------------
6.0 Forms
--------------------------------------------------------------*/

label {
	color: #333;
	display: block;
	font-weight: 800;
	margin-bottom: 0.5em;
}

fieldset {
	margin-bottom: 1em;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
textarea {
	color: #666;
	background: #efefef;
	background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
	border: none;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	display: block;
	padding: 0.8em;
	width: 100%;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
	color: black;
	background: #efefef;
}

select {
	border: 1px solid #bbb;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	height: 3em;
	max-width: 100%;
}

input[type="radio"]:focus,
input[type="checkbox"]:focus {
	outline: thin dotted #333;
}

input[type="radio"],
input[type="checkbox"] {
	margin-right: 0.5em;
}

input[type="radio"] + label,
input[type="checkbox"] + label {
	font-weight: 400;
}

button,
input[type="button"],
input[type="submit"] {
	background-color: #efefef;
	border: 0;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #888;
	cursor: pointer;
	display: inline-block;
	font-size: 14px;
	font-size: 0.875rem;
	font-weight: 800;
	line-height: 1;
	padding: 1em 2em;
	text-shadow: none;
	-webkit-transition: background 0.2s;
	transition: background 0.2s;
}

input + button,
input + input[type="button"],
input + input[type="submit"] {
	padding: 0.75em 2em;
}

button.secondary,
input[type="reset"],
input[type="button"].secondary,
input[type="reset"].secondary,
input[type="submit"].secondary {
	background-color: #ddd;
	color: #222;
}

button:hover:not( .mejs-container > button ),
button:focus,
input[type="button"]:hover,
input[type="button"]:focus,
input[type="submit"]:hover,
input[type="submit"]:focus {
	background: #767676;
}

button.secondary:hover,
button.secondary:focus,
input[type="reset"]:hover,
input[type="reset"]:focus,
input[type="button"].secondary:hover,
input[type="button"].secondary:focus,
input[type="reset"].secondary:hover,
input[type="reset"].secondary:focus,
input[type="submit"].secondary:hover,
input[type="submit"].secondary:focus {
	background: #bbb;
}

/* Placeholder text color -- selectors need to be separate to work. */
::-webkit-input-placeholder {
	color: #333;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
}

:-moz-placeholder {
	color: #333;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
}

::-moz-placeholder {
	color: #333;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
	opacity: 1;
	/* Since FF19 lowers the opacity of the placeholder by default */
}

:-ms-input-placeholder {
	color: #333;
	font-family: "Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif;
}



@font-face {
  font-family: "f-black";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-Black.otf") format("opentype");
}

@font-face {
  font-family: "f-black-cn";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-BlackCn.otf") format("opentype");
}

@font-face {
  font-family: "f-black-it";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-BlackItalic.otf") format("opentype");
}

@font-face {
  font-family: "f-bold";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-Bold.otf") format("opentype");
}

@font-face {
  font-family: "f-bold-cn";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-BoldCn.otf") format("opentype");
}

@font-face {
  font-family: "f-bold-it";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-BoldItalic.otf") format("opentype");
}

@font-face {
  font-family: "f-cn";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-Cn.otf") format("opentype");
}

@font-face {
  font-family: "f-it";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-Italic.otf") format("opentype");
}

@font-face {
  font-family: "f-light";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-Light.otf") format("opentype");
}

@font-face {
  font-family: "f-light-it";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-LightCn.otf") format("opentype");
}

@font-face {
  font-family: "f-roman";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/FrutigerLTStd-Roman.otf") format("opentype");
}


</style>

</head>

<body>
  <div class="whitespace">
    <div class="sideL">
	
	<img src="<?php echo get_template_directory_uri(); ?>/img/lba.svg">

    </div>
    <div class="sideR">
      <section id="search-2" class="widget widget_search">
        <form role="search" method="get" class="search-form" action="http://localhost:8888/wordpress/">
          <input type="search" id="search-form-1" class="search-field" placeholder="Suchen&nbsp;…" value="" name="s">
        </form>
      </section>
      <div class="the-title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-zem-2.svg" class="logo-zem-header">
        <h1 class="mainpage-h1">archiv der workbooks</h1>
      </div>
      <p class="mainpage-p">
	  
	  <?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>

	  </p>
      <section class="accordion arrows">

        <?php wp_list_categories() ?>
    
        <input type="radio" name="accordion" id="acc-close" />
      </section>
    </div>
  </div>
</body>
</html>


