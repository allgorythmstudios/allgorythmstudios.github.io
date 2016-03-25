// var isMobile = {
//   Android: function(){
//     return navigator.userAgent.match(/Android/i);
//   },
//   BlackBerry: function(){ 
//     return navigator.userAgent.match(/BlackBerry/i);
//   },
//   iOS: function(){
//     return navigator.userAgent.match(/iPhone|iPad|iPod/i);
//   },
//   Opera: function(){
//     return navigator.userAgent.match(/Opera Mini/i);
//   },
//   Windows: function(){
//     return navigator.userAgent.match(/IEMobile/i);
//   },
//   any: function(){
//     return ( isMobile.Android() || isMobile.BlackBerry() 
//              || isMobile.iOS()  || isMobile.Opera()
//              || isMobile.Windows());
//   }
// }



var canvasDots = function() { 
    var canvas = document.querySelector('canvas'),
    ctx = canvas.getContext('2d');
    // canvas.width = window.innerWidth;
    // canvas.height = window.innerHeight;
    var pixelDensity  = window.devicePixelRatio || 1;
    canvas.width = window.innerWidth * pixelDensity;
    canvas.height = window.innerHeight * pixelDensity;
    
    var colorDot = '#00A555',
    color = '#00A555';
    ctx.fillStyle = colorDot;
    ctx.lineWidth = .2;
    ctx.strokeStyle = color;

  var mousePosition = {
    x: 30 * canvas.width / 100,
    y: 30 * canvas.height / 100
  };

  var dots = {
    //numero di punti di default
    // nb: 350,
    nb: canvas.width / 5, // Numero di punti
    distance: 60, // Numero di connessioni
    d_radius: 100, // Distanza delle connessioni
    array: []
  };

  function Dot(){
    this.x = Math.random() * canvas.width;
    this.y = Math.random() * canvas.height;

    this.vx = -.5 + Math.random();
    this.vy = -.5 + Math.random();

    this.radius = (Math.random() * 2)+.3;
  }

  Dot.prototype = {
    create: function(){
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
      ctx.fill();
    },

    animate: function(){
      for(i = 0; i < dots.nb; i++){

        var dot = dots.array[i];

        if(dot.y < 0 || dot.y > canvas.height){
          dot.vx = dot.vx;
          dot.vy = - dot.vy;
        }
        else if(dot.x < 0 || dot.x > canvas.width){
          dot.vx = - dot.vx;
          dot.vy = dot.vy;
        }
        dot.x += dot.vx;
        dot.y += dot.vy;
      }
    },

    line: function(){
      for(i = 0; i < dots.nb; i++){
        for(j = 0; j < dots.nb; j++){
          i_dot = dots.array[i];
          j_dot = dots.array[j];

          if((i_dot.x - j_dot.x) < dots.distance && (i_dot.y - j_dot.y) < dots.distance && (i_dot.x - j_dot.x) > - dots.distance && (i_dot.y - j_dot.y) > - dots.distance){
            if((i_dot.x - mousePosition.x) < dots.d_radius && (i_dot.y - mousePosition.y) < dots.d_radius && (i_dot.x - mousePosition.x) > - dots.d_radius && (i_dot.y - mousePosition.y) > - dots.d_radius){
              ctx.beginPath();
              ctx.moveTo(i_dot.x, i_dot.y);
              ctx.lineTo(j_dot.x, j_dot.y);
              ctx.stroke();
              ctx.closePath();
            }
          }
        }
      }
    }
  };

  function createDots(){

   if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      alert('Mobile');
    }     
   else{   
      window.addEventListener('resize', function(){   
          var width         = window.innerWidth;
          var height        = window.innerHeight;
          var pixelDensity  = window.devicePixelRatio || 1;
          
          // canvas.setAttribute('width', width * pixelDensity);
          // canvas.setAttribute('height', height * pixelDensity);

          // canvas.style.width = width + "px";
          // canvas.style.height = height + "px";


          canvas.width = width * pixelDensity;
          canvas.height = height * pixelDensity;

          var colorDot = '#00A555',
          color = '#00A555';
          ctx.fillStyle = colorDot;
          ctx.lineWidth = .2;
          ctx.strokeStyle = color;


          for(i = dots.nb; i >0; i--){
            dots.array.pop();
          }

      });
    }
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    

    
    for(i = 0; i < dots.nb; i++){
      dots.array.push(new Dot());
      dot = dots.array[i];

      dot.create();
    }

    dot.line();
    dot.animate();  
  }

  window.onmousemove = function(parameter) {
    mousePosition.x = parameter.pageX;
    mousePosition.y = parameter.pageY;
  }

  mousePosition.x = window.innerWidth / 2;
  mousePosition.y = window.innerHeight / 2;

  //setInterval(createDots, 1000/30);
  // 60fps
  setInterval(createDots, 1000/60); 
};

window.onload = function() {
  canvasDots();  
};

// function reload(){
//   window.onresize = location.reload();
// };