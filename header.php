<!DOCTYPE html>
<!-- Theme by: https://dev.deoxy.nl/ -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title();?></title>

	
	<?php wp_head();?>
    <style>
  /*projects*/
  .horizontalSpotlight .list {
    position: relative;
    white-space: nowrap;
    padding: 5px 5px 0 5px;
    min-height: 10em;
    -webkit-overflow-scrolling: touch;
    -webkit-overflow-x: auto;
    overflow-x: auto;
    -webkit-overflow-y: hidden;
    overflow-y: hidden;
    left: -5px;
    width: 100%;
}

@supports (-webkit-overflow-scrolling: touch) {
    .horizontalSpotlight .list>div {
        -webkit-overflow-x: scroll !important;
        overflow-x: scroll !important;
    }
}

.verticalSpotlight .list {
    position: relative;
    white-space: normal;
    padding: 5px 5px 0 5px;
    text-align: center;
}

.verticalSpotlight .list>div {
    margin-bottom: 5px !important;
}

.horizontalSpotlight .list>div, .verticalSpotlight .list>div {
    display: inline-block;
}

.horizontalSpotlight .list>.text {
    position: relative;
    display: block;
    top: 4.5em;
    white-space: normal;
    overflow: hidden;
}

.blogSpotlight .list .blog {
    position: relative;
    height: 10em;
    width: 15em;
    box-sizing: border-box;
    margin: 5px 5px 0 5px;
    padding: 5px;
    border-radius: 5px;
    cursor: pointer;
}

.blogSpotlight .list .blog .background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
}

.blogSpotlight .list .blog .background>svg, .blogSpotlight .list .blog .background>img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
    filter: brightness(1);
    transform: scale(1);
}

.blogSpotlight .list .blog:hover .background>svg, .blogSpotlight .list .blog:hover .background>img {
    filter: brightness(.75);
    transform: scale(1.1);
}

.blogSpotlight .list .blog .icon {
    position: absolute;
    top: -.25em;
    left: -.25em;
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
    width: 3.5em;
    height: 3.5em;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 5px hsla(0, 0%, 0%, .3);
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
}

.blogSpotlight .list .blog:hover .icon {
    top: 1em;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    font-size: 1.35em;
    box-shadow: 0 0 10px hsla(0, 0%, 0%, .6);
}

.blogSpotlight .list .blog .icon>svg, .blogSpotlight .list .blog .icon>img {
    width: 100% !important;
    height: 100% !important;
    object-fit: contain;
}

.blogSpotlight .list .blog .name {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    line-height: 1.4em;
    max-height: 3em;
    padding: 5px;
    text-overflow: ellipsis;
    white-space: normal;
    text-align: center;
    overflow: hidden;
    box-sizing: border-box;
    background-color: hsla(0, 0%, 0%, .3);
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    color: hsl(0, 0%, 100%);
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
}

.blogSpotlight .list .blog:hover .name {
    max-height: 4.45em;
    background-color: hsla(0, 0%, 0%, .6);
}

@media screen and (max-width: 780px) {
    .blogSpotlight.verticalSpotlight .list .blog {
        width: calc(100% / 2 - 15px);
    }
}
#archives-dropdown-3 {
	border-radius: 25px;
	background: hsl(0, 0%, 25%);
  border: 2px solid hsl(0, 0%, 25%);
  color: white;
}
@media screen and (max-width: 525px) {
    .blogSpotlight.verticalSpotlight .list .blog {
        width: calc(100% - 15px);
    }
}
:root {
  --primary-bg-color: 0, 0%, 15%;
  --secondary-bg-color: 0, 0%, 25%;
  --primary-text-color: 0, 0%, 100%;
  --secondary-text-color: 0, 0%, 100%;
  --primary-link-color: 149, 89%, 45%;
  --primary-link-highlight-color: 149, 89%, 55%;
  --primary-accent-color: 149, 89%, 43%;
  --primary-accent-color-bright: 149, 89%, 53%;
  --primary-accent-color-dark: 149, 89%, 33%;
  --secondary-accent-color: 65, 84%, 56%;
  --secondary-accent-color-bright: 65, 84%, 66%;
  --secondary-accent-color-dark: 65, 84%, 46%;
  --additional-accent-color: 22, 83%, 58%;
  --additional-accent-color-bright: 22, 83%, 68%;
  --additional-accent-color-dark: 22, 83%, 48%;
  --primary-scrollbar-color: 149, 89%, 43%;
}
body {
  margin: 0;
  color: hsl(var(--primary-text-color));
  background-color: hsl(var(--primary-bg-color));
  overflow-x: hidden;
}
body a {color: hls(149, 89%, 45%;)}
.footer_Container {
  position: relative;
  overflow: hidden;
  box-sizing: border-box;
  background-color: hsl(var(--secondary-bg-color));
  color: hsl(var(--primary-text-color));
}

.footer_Container>div.accentLine {
  margin: 0 5px;
  background-color: hsl(var(--primary-accent-color), .5);
}

.footer_Container>div:not(.accentLine) {
  display: flex;
  font-size: .8em;
  max-width: 1500px;
  width: 100%;
  padding: 10px;
}

.footer_Container>div>.logo {
  min-width: 6em;
  width: 6em;
  max-width: 6em;
  padding: 5px;
  margin-right: 5px;
  border-right: 2px solid hsla(var(--primary-accent-color), .5);
}
.commentlist .comment {
		  border-radius: 5px;
		  border: 2px solid hsl(0, 0%, 15%);
		  background: hsl(0, 0%, 15%);
	  }
	  .commentlist .comment a {
		color: hsl(149, 89%, 45%);
	  }
	  .commentlist .comment .comment-author {
		  border-bottom: 1px solid hsl(0, 0%, 25%);
	  }
	  .commentlist .comment .comment-author img {
		  border-radius: 5px;  
	  }

	  .comment-respond .comment-form #submit {background-color: #4d4d4d;
		text-align:center;
border: none;
border-radius: 5px;
color: white;
padding: 10px 40px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
transition: 0.3s;
}
.comment-respond .comment-form #submit:hover {
background-color: #888888;
border: none;
border-radius: 5px;
color: white;
padding: 10px 40px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
#comment {
	border: 2px solid hsl(0, 0%, 25%);
	background: hsl(0, 0%, 15%);
	border-radius: 5px;
	color: white;
}
.footer_Container>div>.logo a {
  display: flex;
  height: 100%;
  align-items: center;
}

.footer_Container>div>.logo img, .footer_Container>div>.logo svg {
  width: 100% !important;
  object-fit: contain;
}

.footer_Container>div a:link {
  text-decoration: none;
}

.footer_Container>div>.text {
  align-self: center;
  flex-grow: 100;
  padding: 10px 0;
  box-sizing: border-box;
  overflow: hidden;
}

.footer_Container>div>.text>div {
  width: 100%;
  padding: 5px;
  box-sizing: border-box;
}

.footer_Container>div>.text>div>div {
  display: inline-block;
  padding: 5px 0;
  margin: 0 5px;
}

.footer_Container>div>.text>div.lines>div:not(:first-child) {
  padding-left: 10px;
  border-left: 1px solid hsla(var(--primary-accent-color), .5);
}

.footer_Container>div>.text>div.icons {
  font-size: 2em;
}

.footer_Container>div>.text>.copyright {
  font-size: .8em;
  opacity: .8;
  margin: 0 5px;
}


#bottom_fade {
  width: 600px;
  height: 200px;
  z-index: 0;
  position: absolute;
  background: url(include/img/black_fade.png) bottom center no-repeat;
}

.page_CenterBox > div {
background-color: rgb(35, 35, 35);
-webkit-box-shadow: inset 0px 0px 3px 0px rgb(45, 45, 45);
-moz-box-shadow: inset 0px 0px 3px 0px rgb(45, 45, 45);
-o-box-shadow: inset 0px 0px 3px 0px rgb(45, 45, 45);
box-shadow: inset 0px 0px 3px 0px rgb(45, 45, 45);
color: #fff;
border-radius: 5px;
}
.input_error {
-webkit-box-shadow: inset 0px 0px 3px 0px #FF0000 !important;
-moz-box-shadow: inset 0px 0px 3px 0px #FF0000 !important;
-o-box-shadow: inset 0px 0px 3px 0px #FF0000 !important;
box-shadow: inset 0px 0px 3px 0px #FF0000 !important;
border-color: #FF0000 !important;
}
.page_CenterBoxTitle {
/* color: rgba(145,145,145,1); */
border-color: rgb(45, 45, 45);
}

.page_CenterBox .contentSearch .searchButton {
background-color: rgba(230,230,230, 1);
border-color: rgba(200,200,200, 1);
}
.page_CenterBox .contentSearch .searchButton:hover {
background-color: rgba(240,240,240, 1);
border-color: rgba(210,210,210, 1);
}
.page_Main {
margin-bottom: 8em;
margin-top: 3.5em;
/* padding: 5px 0; */
/* overflow: hidden; */
}
.page_Main ~ .page_Main {
margin-top: 0;
}
.page_CenterBox {
position: relative;
margin: 5px auto;
width: 100%;
max-width: 600px;
/* min-height: 300px; */
padding: 0 5px;
padding-top: 2.5px;
box-sizing: border-box;
}
.page_Main > .page_CenterBox:first-child, .page_CenterBox_First {
padding-top: 10px;
}
.page_CenterBox > div {
border-radius: 5px;
padding: 5px 10px;
overflow: hidden;
}
/* .page_CenterBox > p {
border-radius: 5px;
padding-top: 5px;
padding-bottom: 10px;
} */
.page_CenterBox_AutomatedFadeIn {
opacity: 0;
-webkit-animation: page_CenterBox_FadeInAnim 1s forwards ease;
-moz-animation: page_CenterBox_FadeInAnim 1s forwards ease;
-o-animation: page_CenterBox_FadeInAnim 1s forwards ease;
animation: page_CenterBox_FadeInAnim 1s forwards ease;
}
@-webkit-keyframes page_CenterBox_FadeInAnim {
0% {
  opacity: 0;
} 100% {
  opacity: 1;
}
}
@-moz-keyframes page_CenterBox_FadeInAnim {
0% {
  opacity: 0;
} 100% {
  opacity: 1;
}
}
@-o-keyframes page_CenterBox_FadeInAnim {
0% {
  opacity: 0;
} 100% {
  opacity: 1;
}
}
@keyframes page_CenterBox_FadeInAnim {
0% {
  opacity: 0;
} 100% {
  opacity: 1;
}
}
/* .page_CenterBox > div {
margin: 5px 0;
padding: 0 10px;
} */
.page_CenterBoxTitle {
height: auto !important;
font-size: 1.2rem;
font-weight: 600;
padding: 5px;
border-bottom: 1px solid #000;
display: flex;
/* margin: 0; */
position: relative;
margin-bottom: 5px;
-webkit-user-select: none;
-moz-user-select: none;
-o-user-select: none;
user-select: none;
text-align: center;
/* white-space: nowrap; */
/* text-overflow: ellipsis; */
overflow: hidden;
/* word-break: break-all; */
}
.page_CenterBoxTitle > span.title {
display: block;
width: 100%;
flex-grow: 100;
/* -webkit-transition: all .25s ease-in-out;
-moz-transition: all .25s ease-in-out;
-o-transition: all .25s ease-in-out;
transition: all .25s ease-in-out; */
}
.page_CenterBox > div > * {
margin: 0 0 5px 0px;
}
.page_CenterBoxTitleButton {
position: relative;
-webkit-transition: all .25s ease-in-out;
-moz-transition: all .25s ease-in-out;
-o-transition: all .25s ease-in-out;
transition: all .25s ease-in-out;
cursor: pointer;
-webkit-user-select: none;
-moz-user-select: none;
-o-user-select: none;
user-select: none;
}
.page_CenterBoxTitleButton > svg {
position: relative;
font-size: 1.2em;
left: -0.3em;
-webkit-transition: all .25s ease-in-out;
-moz-transition: all .25s ease-in-out;
-o-transition: all .25s ease-in-out;
transition: all .25s ease-in-out;
}
.page_CenterBoxTitle .title ~ .page_CenterBoxTitleButton > svg {
left: unset;
right: -0.3em;
}
.page_CenterBox .page_CenterBoxIcon {
font-size: 8rem;
}
.page_CenterBox .page_CenterBoxImage {
width: 75%;
}
.button-grey {
background-color: #4d4d4d;
border: none;
border-radius: 5px;
color: white;
padding: 10px 40px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
transition: 0.3s;
}
.button-grey:hover {
background-color: #888888;
border: none;
border-radius: 5px;
color: white;
padding: 10px 40px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
.button-grey a{
  color: white;
}
</style>
</head>
<body>
	



<header>


	<div class="container">


		<h2 class="top-bar" style="color: white;"><?php the_title();?></h2>
		
	</div>


</header>

<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background: rgb(35, 35, 35);" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

