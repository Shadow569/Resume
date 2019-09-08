<!DOCTYPE html>
<html>
	<head>
		<title>Kountret-Spyrou-Mantal Resume</title>
		<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				var current = 'basic-info';
				var prevColor = $("."+current).css('color');
				var activeColor = "#FFFFFF";
				var offset = 0;
				if(($(window).width() < 1366) && ($(window).width() > 768)){
					$("body").css("font-size","16px");
					offset = 100;
				}
				else if($(window).width() < 768){
					$("body").css("font-size","10px");
					offset = 200;
				}
				else if($(window).width() > 1366){
					$("body").css("font-size","23px");
					offset = 0;
				}
				
				$(window).resize(function(){
					if(($(window).width() < 1366) && ($(window).width() > 768)){
						$("body").css("font-size","16px");
						offset = 100;
					}
					else if($(window).width() < 768){
						$("body").css("font-size","10px");
						offset = 200;
					}
					else if($(window).width() > 1366){
						$("body").css("font-size","23px");
						offset = 0;
					}
				});
				$("."+current).css('color',activeColor);
				$(document).on('scroll', function() {
					if($(this).scrollTop()>=($('#basic-info').position().top)){
						$("."+current).css('color',prevColor);
						current = 'basic-info';
						$("."+current).css('color',activeColor);
					}
					if($(this).scrollTop()>=($('#education').position().top - offset)){
						$("."+current).css('color',prevColor);
						current = 'education';
						$("."+current).css('color',activeColor);
					}
				});
				$(".education").on("click",function(){
					$('html, body').animate({
						scrollTop: $("#education").offset().top
					}, 1000);
				});
				$(".skills").on("click",function(){
					$("."+current).css('color',prevColor);
					current = 'skills';
					$("."+current).css('color',activeColor);
				});
				$(".projects").on("click",function(){
					$("."+current).css('color',prevColor);
					current = 'projects';
					$("."+current).css('color',activeColor);
				});
				$(".contact").on("click",function(){
					$("."+current).css('color',prevColor);
					current = 'contact';
					$("."+current).css('color',activeColor);
				});
				$(".basic-info").on("click",function(){
					$('html, body').animate({
						scrollTop: $("#basic-info").offset().top
					}, 1000);
				});
				$(".fblink").on("click",function(){
					window.open("https://www.facebook.com/Kountret.Spirou");
				});
				$(".instalink").on("click",function(){
					window.open("https://www.instagram.com/kudret.spyr/");
				});
				$(".github").on("click",function(){
					window.open("https://www.github.com/Shadow569");
				});
			});
		</script>
	</head>
	<body>
		<div class='sent-message' style="display:none">
			<div class='inside-modal'>
				✔Sent successfully, I will get back to you soon.
			</div>
		</div>
		<div class='side-bar'>
			<div class='profile-image'><img src="assets/profile.jpg" /></div>
			<div class='basic-info'>Basic Information</div>
			<div class='education'>Education</div>
			<div class='skills'>Skills</div>
			<div class='projects'>Projects</div>
			<div class='contact'>Contact</div>
		</div>
		<div class='content-area'>
			<div class='block' id='basic-info'>
				<div class='header'>Kountret <b style="color:#000000">Spyrou-Mantal</b></div>
				<div class='contact-info'>Athens, Greece  ◼  <a href='mailto:countretspirou@gmail.com'>COUNTRETSPIROU@GMAIL.COM</a></div>
				<div class='general-skills'>Web Developer ◼ Embedded Systems Engineer ◼ Industrial Designer</div>
				<div class='motivation'>Passionate about technology and supporting people with it</div>
				<div class='social-media-links'>
					<div class='fa fa-facebook fblink'><a href='#'></a></div>
					<div class='fa fa-instagram instalink'><a href='#'></a></div>
					<div class='fa fa-github github'><a href='#'></a></div>
				</div>
			</div>
			<div class='block' id='education'>
				<div class='header'>Educational <b style='color:#000000'>Background</b></div>
				<div class='header2'>University of West Attica</div>
				<div class='education-element-row'><i>Bachelor of Science(BSc)</i> in <span class='specialty'>Industrial Design</span></div>
				<div class='duration'>Duration of studies:		<i>09/2015 ➡ Now(ongoing studies)</i></div>
				<div class='header2'>ADA University</div>
				<div class='education-element-row'><i>Exchange Semester</i> in <span class='specialty'>Baku, Azerbaijan</span></div>
				<div class='duration'>Duration of studies:		<i>01/2019 ➡ 05/2019</i></div>
				<div class='header2'>2nd Vocational Highschool<br /> of Ag. Dimitirios</div>
				<div class='education-element-row'><i>Specialization Diploma</i> in <span class='specialty'>IT Support</span> and <b style='color:#000000'>Highschool Diploma</b></div>
				<div class='duration'>Duration of studies:		<i>09/2011 ➡ 06/2015</i></div>
			</div>
		</div>
	</body>
</html>
				