$( document ).ready(function() {
                  $("#hod_scroll").fadeOut();  
                $("#judge_scroll").fadeOut();   
                $("#student_scroll").fadeOut();
                $("#contact_scroll").fadeOut();

				$("#hod").click(function(){
                    $("#index").fadeOut();
                    $("#hod_scroll").fadeIn();
                    $('#hod_left').addClass('animated slideInLeft');
                    $('#hod_right').addClass('animated slideInRight');
                    });
                $("#judge").click(function(){
                    $("#index").fadeOut();
                    $("#judge_scroll").fadeIn();
                    $('#judge_left').addClass('animated slideInLeft');
                    $('#judge_right').addClass('animated slideInRight');
                    });
                $("#student").click(function(){
                    $("#index").fadeOut();
                    $("#student_scroll").fadeIn();
                    $('#student_left').addClass('animated slideInLeft');
                    $('#student_right').addClass('animated slideInRight');
                    });
                $("#contact").click(function(){
                    $("#index").fadeOut();
                    $("#contact_scroll").fadeIn();
                    $('#contact_left').addClass('animated slideInLeft');
                    $('#contact_right').addClass('animated slideInRight');
                    });
                
                $(".back").click(function(){
                    $(".pages").fadeOut();
                    $("#index").fadeIn();
                    $('#index_left').addClass('animated slideInLeft');
                    $('#index_right').addClass('animated slideInRight');
                    });
           
		});