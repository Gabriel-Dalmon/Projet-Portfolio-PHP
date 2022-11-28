$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown({
      coverTrigger:false,
      constrainWidth:true,
      hover:true,
      autoTrigger:false
    });
    $('.collapsible').collapsible({
      onOpenStart:function(el){
        $(el).find('i').attr('class', 'fa-solid fa-chevron-down')
      },
      onCloseStart:function(el){
        $(el).find('i').attr('class', 'fa-solid fa-chevron-right');
      }
    });
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
      });
    $('.modal').modal();
    $('.parallax').parallax();
})

$('.indicators .btn-floating').on('click',function(){
  $('.carousel').carousel('set',parseInt(this.getAttribute("id")));
})

var theme_index=0;
var easter_egg_trigger=0;

function setFontColor(font_color){
  $(':root').css('--main-font-color',font_color);
  console.log('color changed to',font_color)
}

$('.theme-switcher').on('click',function(){
  console.log(theme_index)
  switch (theme_index) {
    case 0:
      $('html').css("--main-bg", "white");
      setFontColor('black')
      break;
    case 2:
      $('html').css("--main-bg", "black");
      $('body').css("font-family", "'Silkscreen', cursive");
      setFontColor('#00ff1c')
      break;
    case 4:
      $('html').css("--main-bg", "#e1d2b6");
      $('body').css("font-family", "'MedievalSharp', cursive");
      setFontColor('#991f3c')
      easter_egg_trigger=0;
      break;
    default:
      $('html').css("--main-bg", "#0f0e11");
      $('body').css("font-family", "'Roboto', sans-serif");
      setFontColor('white')
      if(easter_egg_trigger < 2){
        theme_index=-1;
      }
      easter_egg_trigger++;
      break;
  }
  theme_index++;
})

$('#easteregg1').on("click",function(){
  $("body").html("<video width='100%' style='margin:0 auto' src='../img/project1/easter_egg.mp4'></video>");
  $("video").get(0).play();
})

$("#easteregg2").on("click", function(){
  $("body").html('<img src="img/easter_egg_2.webp" style="width: 100%;">')
});

setInterval(function(){
  $('.carousel').carousel('next')
}, 8000)