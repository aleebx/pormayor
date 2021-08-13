	var input1 ="";
	var input2 ="";
	var input3 ="";
	var input4 ="";
	var input5 ="";

	$('#containerTutoCompra').iziModal({
	    transitionIn: 'bounceInDown',
	    top: 15,
	    bottom: 15,
	    borderBottom: false,
	    overlayClose: false,
	});
	$('#containerTutoCompra').iziModal('open');

	$(window).on("load", function() {
		$(".compraTuto").removeClass('hide');
		$(".compraTuto").slick({
		  dots: true,
		  speed: 300,
		  centerMode: false,
		  arrows: false,
		});
	});

	//Animacion Slide 1
	var animationA = anime({
	  targets: '.contentSearchMock',
	  translateY: [-250, 0],
	  duration: 1200,
	  delay: 1000,
	  complete: function() {
	    var typed = new Typed(".searchMock", {
	    	strings: ["polo"],
	  		typeSpeed: 40,
	  		onComplete: (self) => {
	  			$('.tecladoA').removeClass('hide');
	  			var animationTecladoA = anime({
				  targets: '.tecladoA',
				  scale: [0, 1],
				  duration: 1000,
				  elasticity: 500,
				  complete: function() {
				  	$('.tecladoB').removeClass('hide');
				  	var animationTecladoB = anime({
					  targets: '.tecladoB',
					  opacity: [0, 1],
					  duration: 1000,
					  loop: 3,
					  complete: function() {
					  	$('.containerTuto1A').css("opacity", "0.5");
			  			setTimeout(function(){ 
			  				$('.preloader-wrapper').addClass('active');
			  				$('.preloader-wrapper').removeClass('hide');
			  				setTimeout(function(){ 
			  					$('.preloader-wrapper').addClass('hide');
			  					$('.preloader-wrapper').removeClass('active');
				  				$('.containerTuto1A').css("opacity", "0");
				  				$('.tecladoB').css("opacity", "0");
				  				$('.tecladoA').css("opacity", "0");
				  				$('.containerTuto1A').addClass('hide');
				  				$('.containerTuto1B').removeClass('hide');
				  				var animationA2 = anime({
									targets: '.containerTuto1B',
									translateY: [-250, 0],
									duration: 500,
									complete: function() {
										$('.containerTuto1B .selector').removeClass('hide');
										var selector = anime({
										  targets: '.containerTuto1B .selector',
										  scale: [0,1],
										  elasticity: 500,
										  duration:1000,
										  direction: 'alternate',
										  easing: 'easeInOutQuad',
										  loop: true,
										  complete: function(anim) {
										    
										  }
										});
									},
				    			});
				  			 }, 1200);
			  			 }, 800);
					  }
					});
				  }
				});
	  		},
	    });
	  }
	});

	$(".repetirCompra1").click(function() {
       location.reload(true);
    });

    $(".contTutoCompra1").click(function() {
       $(".compraTuto").slick('slickNext');
    });
	
	//Animacion Slide 2
	$(".repetirCompra2").click(function() {
		$('.containerTuto2A .selectorB').addClass('hide');
		$('.input1B').val("");
		$('.input2B').val("");
		$('.input3B').val("");

		if (input1 != "" && input2 != "" && input3 != "") {
			input1.destroy();
			input2.destroy();
			input3.destroy();
		}

		input1 = new Typed(".input1B", {
		strings: ["200"],
		typeSpeed: 50,
		onComplete: (self) => {
  				setTimeout(function(){ 
					input2 = new Typed(".input2B", {
			    	strings: ["50"],
			  		typeSpeed: 50,
			  		onComplete: (self) => {
			  			setTimeout(function(){ 
							input3 = new Typed(".input3B", {
					    	strings: ["100"],
					  		typeSpeed: 50,
					  		onComplete: (self) => {
					  			$('.containerTuto2A .selectorB').removeClass('hide');
								var selector = anime({
								  targets: '.containerTuto2A .selectorB',
								  scale: [0,1],
								  elasticity: 500,
								  duration:1000,
								  direction: 'alternate',
								  easing: 'easeInOutQuad',
								  loop: true,
								  complete: function(anim) {
								    
								  }
								});
						  	},
						    });
						}, 500);
				  	},
				    });
				}, 500);
	  		},
	    });
    });

    $(".contTutoCompra2").click(function() {
       $(".compraTuto").slick('slickNext');
    });

    //Animacion Slide 3
    $(".repetirCompra3").click(function() {
    	$('.containerTuto3A').removeClass('hide');
		$('.containerTuto3B').addClass('hide');
		$('.selectorC').removeClass('hide');
		$('.containerTuto3B .selectorD').addClass('hide');
		var	animation3A = anime({
		  targets: '.selectorC',
		  scale: [0, 1],
		  duration: 1000,
		  direction: 'alternate',
		  easing: 'easeInOutQuad',
		  loop: 6,
		  complete: function() {
		  	$('.containerTuto3A').addClass('hide');
		  	$('.containerTuto3B').removeClass('hide');
		  	var animation3B = anime({
				targets: '.containerTuto3B',
				translateY: [-250, 0],
				duration: 500,
				complete: function() {
					$('.containerTuto3B .selectorD').removeClass('hide');
					var selector = anime({
					  targets: '.containerTuto3B .selectorD',
					  scale: [0,1],
					  elasticity: 500,
					  duration:1000,
					  direction: 'alternate',
					  easing: 'easeInOutQuad',
					  loop: true,
					  complete: function(anim) {
					    
					  }
					});
				},
			});
		  }
		});
    });

    $(".contTutoCompra3").click(function() {
       $(".compraTuto").slick('slickNext');
    });

    //Animacion Slide 4
	$(".repetirCompra4").click(function() {
		$('.selectorE').addClass('hide');
		$('.input4A').val("");
		$('.input4B').val("");

		if (input4 != "" && input5 != "") {
			input4.destroy();
			input5.destroy();
		}

       setTimeout(function(){ 
			input4 = new Typed(".input4A", {
	    	strings: ["123456789"],
	  		typeSpeed: 60,
	  		onComplete: (self) => {
				setTimeout(function(){ 
				input5 = new Typed(".input4B", {
		    	strings: ["¿Tiene alguna oferta?"],
		  		typeSpeed: 50,
		  		onComplete: (self) => {
		  			$('.selectorE').removeClass('hide');
		  			var selector = anime({
					  targets: '.containerTuto4A .selectorE',
					  scale: [0,1],
					  elasticity: 500,
					  duration:1000,
					  direction: 'alternate',
					  easing: 'easeInOutQuad',
					  loop: true,
					  complete: function(anim) {
					    
					  }
					});
			  	},
			    });
			}, 800);
		  	},
		    });
		}, 1000);
    });

    $(".contTutoCompra4").click(function() {
       $(".compraTuto").slick('slickNext');
    });

    //Animacion Slide 5
	$(".contTutoCompra5").click(function() {
       location.reload(true);
    });


    //ANIMACIONES AL CAMBIAR
    $(".compraTuto").on('afterChange', function(event, slick, currentSlide){
		if (currentSlide == 1) {
			$('.containerTuto2A .selectorB').addClass('hide');
			$('.input1B').val("");
			$('.input2B').val("");
			$('.input3B').val("");
			
			if (input1 != "" && input2 != "" && input3 != "") {
				input1.destroy();
				input2.destroy();
				input3.destroy();
			}
			setTimeout(function(){ 
				input1 = new Typed(".input1B", {
			    	strings: ["200"],
			  		typeSpeed: 50,
			  		onComplete: (self) => {
						setTimeout(function(){ 
							input2 = new Typed(".input2B", {
						    	strings: ["50"],
						  		typeSpeed: 50,
						  		onComplete: (self) => {
						  			setTimeout(function(){ 
										input3 = new Typed(".input3B", {
									    	strings: ["100"],
									  		typeSpeed: 50,
									  		onComplete: (self) => {
									  			$('.containerTuto2A .selectorB').removeClass('hide');
												var selector = anime({
												  targets: '.containerTuto2A .selectorB',
												  scale: [0,1],
												  elasticity: 500,
												  duration:1000,
												  direction: 'alternate',
												  easing: 'easeInOutQuad',
												  loop: true,
												  complete: function(anim) {
												    
												  }
												});
										  	},
									    });
									}, 500);
							  	},
					   	 	});
						}, 500);
				  	},
				  	onReset: (self) => {
				  		alert('start');
				  	},
			    });
			}, 800);
		}else if (currentSlide == 2) {
			$('.containerTuto3A').removeClass('hide');
			$('.containerTuto3B').addClass('hide');
			$('.selectorC').addClass('hide');
			$('.containerTuto3B .selectorD').addClass('hide');
			setTimeout(function(){ 
			    $('.selectorC').removeClass('hide');
				var	animation3A = anime({
				  targets: '.selectorC',
				  scale: [0, 1],
				  duration: 1000,
				  direction: 'alternate',
				  easing: 'easeInOutQuad',
				  loop: 6,
				  complete: function() {
				  	$('.containerTuto3A').addClass('hide');
				  	$('.containerTuto3B').removeClass('hide');
				  	var animation3B = anime({
						targets: '.containerTuto3B',
						translateY: [-250, 0],
						duration: 500,
						complete: function() {
							$('.containerTuto3B .selectorD').removeClass('hide');
							var selector = anime({
							  targets: '.containerTuto3B .selectorD',
							  scale: [0,1],
							  elasticity: 500,
							  duration:1000,
							  direction: 'alternate',
							  easing: 'easeInOutQuad',
							  loop: true,
							  complete: function(anim) {
							    
							  }
							});
						},
					});
				  }
				});
			}, 800);
		}else if (currentSlide == 3) {
			$('.selectorE').addClass('hide');
			$('.input4A').val("");
			$('.input4B').val("");

			if (input4 != "" && input5 != "") {
				input4.destroy();
				input5.destroy();
			}

			setTimeout(function(){ 
				input4 = new Typed(".input4A", {
		    	strings: ["123456789"],
		  		typeSpeed: 60,
		  		onComplete: (self) => {
					setTimeout(function(){ 
					input5 = new Typed(".input4B", {
			    	strings: ["¿Tiene alguna oferta?"],
			  		typeSpeed: 50,
			  		onComplete: (self) => {
			  			$('.selectorE').removeClass('hide');
			  			var selector = anime({
						  targets: '.containerTuto4A .selectorE',
						  scale: [0,1],
						  elasticity: 500,
						  duration:1000,
						  direction: 'alternate',
						  easing: 'easeInOutQuad',
						  loop: true,
						  complete: function(anim) {
						    
						  }
						});
				  	},
				    });
				}, 800);
			  	},
			    });
			}, 1000);
		}else if (currentSlide == 4) {
			$('.containerTuto5B').addClass('hide');
			$('.containerTuto5A').addClass('hide');
			$('.selectorF').addClass('hide');
			setTimeout(function(){
				$('.containerTuto5A').removeClass('hide');
				var animationA = anime({
				  targets: '.containerTuto5A',
				  translateY: [-250, 0],
				  duration: 500,
				  elasticity: 500,
				  complete: function() {
				  	$('.selectorF').removeClass('hide');
					var selector = anime({
						targets: '.containerTuto5A .selectorF',
						scale: [0,1],
						elasticity: 500,
						duration:1000,
						direction: 'alternate',
						easing: 'easeInOutQuad',
						loop: 5,
						complete: function(anim) {
							$('.containerTuto5A').addClass('hide');
							$('.containerTuto5B').removeClass('hide');
							var animationA = anime({
							  targets: '.containerTuto5B',
							  translateY: [-250, 0],
							  duration: 500,
							  elasticity: 500,
							  complete: function() {

							  }
							});
						}
					});
				  }
				}); 
			}, 500);
		}
	});    