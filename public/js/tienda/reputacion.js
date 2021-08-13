var animationScoreA = anime({
          targets: '#tabCalifA input.scoreText',
          value: $('a[href="#tabCalifA').data('calif')+"%",
          round: 1,
          easing: 'easeInOutExpo',
        });

var animationScoreC = anime({
    targets: '#tabCalifC input.scoreText',
    value: $('a[href="#tabCalifC').data('calif')+"%",
    round: 1,
    easing: 'easeInOutExpo',
  });

var animationScoreB = anime({
    targets: '#tabCalifB input.scoreText',
    value: $('a[href="#tabCalifB').data('calif')+"%",
    round: 1,
    easing: 'easeInOutExpo',
  });
  
  document.querySelector('a[href="#tabCalifA').onclick = animationScoreA.restart;
  document.querySelector('a[href="#tabCalifB').onclick = animationScoreB.restart;
  document.querySelector('a[href="#tabCalifC').onclick = animationScoreC.restart;

  

  var dibujo = anime({
    targets: '#animationScore .lineas path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 2000,
    delay: function(el, i) { return i * 250 },
    direction: 'alternate',
    loop: true
  });


  var CSStransforms = anime({
    targets: '#animationScore .circleScore',
    scale: [0, 1],
    elasticity: 600,
    duration: 1000,
    backgroundColor: "#21478F"
  });

  var inputAnimation = anime({
    targets: '#inputAnimation input',
    value: nroVentas,
    round: 1,
    easing: 'easeInOutExpo',
  });