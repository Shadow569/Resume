<!DOCTYPE html>
<html>
	<head>
		<title>Kountret Spyrou-Mantal Resume</title>
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
                var validInput = false;
				$(window).scrollTop(0);
				if(($(window).width() < 1366) && ($(window).width() > 768)){
					$("body").css("font-size","16px");
					offset = 100;
				}
				else if($(window).width() < 768){
					$("body").css("font-size","10px");
					offset = 250;
				}
				else if($(window).width() > 1366){
					$("body").css("font-size","23px");
					offset = 0;
				}
				
				$(window).resize(function(){
					if(($(window).width() < 1366) && ($(window).width() > 768)){
						$("body").css("font-size","16px");
						offset = 150;
					}
					else if($(window).width() < 768){
						$("body").css("font-size","10px");
						offset = 250;
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
					if($(this).scrollTop()>=($('#skills').position().top - offset)){
						$("."+current).css('color',prevColor);
						current = 'skills';
						$("."+current).css('color',activeColor);
					}
					if($(this).scrollTop()>=($('#projects').position().top - offset)){
						$("."+current).css('color',prevColor);
						current = 'projects';
						$("."+current).css('color',activeColor);
					}
					if($(this).scrollTop()>=($('#contact').position().top - offset)){
						$("."+current).css('color',prevColor);
						current = 'contact';
						$("."+current).css('color',activeColor);
					}
				});
				$(".education").on("click",function(){
					$('html, body').animate({
						scrollTop: $("#education").offset().top
					}, 1000);
				});
				$(".skills").on("click",function(){
					$('html, body').animate({
						scrollTop: $("#skills").offset().top
					}, 1000);
				});
				$(".projects").on("click",function(){
					$('html, body').animate({
						scrollTop: $("#projects").offset().top
					}, 1000);
				});
				$(".contact").on("click",function(){
					$('html, body').animate({
						scrollTop: $("#contact").offset().top
					}, 1000);
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
                $.ajax({
                    url:"testdb.php",
                    method:"post",
                    success:function(data){
                        var decoded = $.parseJSON(data);
                        if(decoded['status'] == 'up'){
                            $(".construction").hide();
                        }
                        else{
                            $(".construction").show();
                        }
                    }
                });
                $("#fullname").on("keyup",function(){
                    if($("#body_comment").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#phone").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#email").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#fullname").val().length == 0){
                        $("#fullname").css('box-shadow','0 0 10px 2px #FF6666');
                        $("#fullname").css('background','#FFAAAA');
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    else{
                         $("#fullname").css('box-shadow','0 0 10px 2px #66FF66');
                         $("#fullname").css('background','#AAFFAA');
                         valid = true;
                         $("#send").attr('disabled',false);
                    }
                });
                $("#email").on("keyup",function(){
                    if($("#fullname").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#body_comment").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#phone").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#email").val().length < 10){
                        $("#email").css('box-shadow','0 0 10px 2px #FF6666');
                        $("#email").css('background','#FFAAAA');
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    else{
                         $("#email").css('box-shadow','0 0 10px 2px #66FF66');
                         $("#email").css('background','#AAFFAA');
                         valid = true;
                         $("#send").attr('disabled',false);
                    }
                });
                $("#phone").on("keyup",function(){
                    if($("#fullname").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#email").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#body_comment").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#phone").val().length < 10){
                        $("#phone").css('box-shadow','0 0 10px 2px #FF6666');
                        $("#phone").css('background','#FFAAAA');
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    else{
                         $("#phone").css('box-shadow','0 0 10px 2px #66FF66');
                         $("#phone").css('background','#AAFFAA');
                         valid = true;
                         $("#send").attr('disabled',false);
                    }
                });
                 $("#body_comment").on("keyup",function(){
                    if($("#fullname").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#email").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#phone").val().length == 0){
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    if($("#body_comment").val().length == 0){
                        $("#body_comment").css('box-shadow','0 0 10px 2px #FF6666');
                        $("#body_comment").css('background','#FFAAAA');
                        valid = false;
                        $("#send").attr('disabled',true);
                    }
                    else{
                         $("#body_comment").css('box-shadow','0 0 10px 2px #66FF66');
                         $("#body_comment").css('background','#AAFFAA');
                         valid = true;
                         $("#send").attr('disabled',false);
                    }
                });

				$("#send").on("click",function(){
                    if(valid){
                        $.ajax({
                            url:"mail.php",
                            method:"post",
                            data:{name:$("#fullname").val(),email:$("#email").val(),phone:$("#phone").val(),body:$("#body_comment").val()},
                            success:function(data){
                                try{
                                    var decoded = $.parseJSON(data);
                                    if(decoded['status'] == 'success'){
                                        $("#fullname").val("");
                                        $("#phone").val("");
                                        $("#body_comment").val("");
                                        $("#email").val("");
                                        $(".input-container > input").css('background','#BBBBBB');
                                        $(".input-container > input").css('box-shadow','none');
                                        $(".input-container > textarea").css('background','#BBBBBB');
                                        $(".input-container > textarea").css('box-shadow','none');
                                        $(".sent-message").html("<div class='left-bar'>✔</div><div class='right'>Sent successfully, I will get back to you soon.</div>");
                                        $(".sent-message").fadeIn(1000, function(){
                                            $(".sent-message").fadeOut(10000);
                                        });
                                    }
                                    else{
                                        $(".sent-message").html("<div class='left-bar'>X</div><div class='right'>Failed to send message.</div>");
                                        $(".sent-message").fadeIn(1000, function(){
                                            $(".sent-message").fadeOut(10000);
                                        });
                                    }
                                }
                                catch(exception){
                                    alert(data);
                                }
                            }
                        });
                    }
				});
			});
		</script>
	</head>
	<body>
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
				<div class='birth'>Born in 18 - 11 - 1990</div>
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
			<div class='block' id='skills'>
				<div class='header'>My <b style='color:#000000'>Skills</b></div>
				<div class='header2'>Web Development Skills</div>
				<div class='skill-element-row'><span class='element'>HTML5</span><span class='element'>CSS3</span><span class='element'>PHP</span><span class='element'>Javascript</span></div>
				<div class='skill-element-row'><span class='element'>Magento</span><span class='element'>Laravel</span><span class='element'>Bootstrap</span><span class='element'>jQuery</span></div>
				<div class='header2'>Social Skills</div>
				<div class='skill-element-row'><span class='element'>Friendliness</span><span class='element'>Empathetic</span><span class='element'>Agreeable</span><span class='element'>Extroversion</span></div>
				<div class='skill-element-row'><span class='element'>Organizational</span><span class='element'>Communicative</span><span class='element'>Cooperative</span><span class='element'>Meticulous</span></div>
				<div class='header2'>Industry Skills</div>
				<div class='skill-element-row'><span class='element'>Software Engineering</span><span class='element'>Industrial Engineering</span><span class='element'>Web Development</span></div>
				<div class='skill-element-row'><span class='element'>UX/UI</span><span class='element'>User Centric Designer</span><span class='element'>Human Factors Engineering</span></div>
			</div>
			<div class='block' id='projects'>
				<div class='header'>My <b style='color:#000000'>Projects</b></div>
				<div class='header2'>Diaared(<i style='color:#000000'>Personal Journal</i>)</div>
				<div class='image_container'><img src='assets/webdiary/Login.JPG' /><img src='assets/webdiary/register.JPG' /><img src='assets/webdiary/main.JPG' /></div>
				<div class='image_container'><img src='assets/webdiary/new_post.JPG' /><img src='assets/webdiary/read_post.JPG' /><img src='assets/webdiary/Main_user_second.JPG' /></div>
				<div class='project-github'><b><a style='color:#000000; text-decoration:none' href='https://www.github.com/Shadow569/Diaared' target='_blank'>Project source in Github🔗</a></b></div>
				<div class='header2'>Web based CV(<i style='color:#000000'>Web Resume</i>)</div>
				<div class='project-github'><b><a style='color:#000000; text-decoration:none' href='https://www.github.com/Shadow569/Resume' target='_blank'>Project source in Github🔗</a></div>
			</div>
			<div class='block' id='contact'>
                <div class='construction'>
                    <div class='under_construction'>Under Construction</div>
                </div>
				<div class='header'>Get <b style='color:#000000'>In Touch</b></div>
				<div class='form-container'>
					<div class='input-container'><input type="text" id='fullname' name='fullname' placeholder="Your Full Name" /></div>
					<div class='input-container'><input type="text" id='email' name='email' placeholder="Your E-mail" /></div>
					<div class='input-container'><input type="text" id='phone' name='phone' placeholder="Your Phone Number" /></div>
					<div class='input-container'><textarea id='body_comment' placeholder='Your Message Here'></textarea></div>
                    <div class='sent-message'>
				        <div class='left-bar'>✔</div><div class='right'>Sent successfully, I will get back to you soon.</div>	        
                    </div>
					<button id='send'>Send Your Message</button>
				</div>
				<div class='gdpr-statement'><h1>GDPR STATEMENT</h1><div class='statement-message'>When you click 'Send Your Message' you agree that your personal information in this form will be collected and processed only for communication by the owner of this website.</div></div>
			</div>
		</div>
	</body>
</html>
				