function inicio(){(new WOW).init(),$(".Modern-Slider").slick({autoplay:!0,autoplaySpeed:1e4,speed:600,slidesToShow:1,slidesToScroll:1,pauseOnHover:!1,dots:!0,pauseOnDotsHover:!0,cssEase:"linear",draggable:!1,prevArrow:'<button class="PrevArrow"></button>',nextArrow:'<button class="NextArrow"></button>'}),$("#myform").html5form({messages:"es",responseDiv:"#respuesta"}),$("#myform_dos").html5form({method:"GET",messages:"es",responseDiv:"#respuesta"})}function closeModal(){$(".mask").removeClass("active")}$(document).on("ready",inicio),$("#cta2").click(function(){$("#myform_dos").show("slow",function(){$("#cta2").hide("slow")})}),$(".show").on("click",function(){$(".mask").addClass("active")}),$(".close, .mask").on("click",function(){closeModal()}),$(document).keyup(function(o){27==o.keyCode&&closeModal()});