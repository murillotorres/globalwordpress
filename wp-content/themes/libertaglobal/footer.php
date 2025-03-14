<footer>
	<div class="footer">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-3 mb-4">
					<img src="<?php echo get_field('logo_footer', 'option'); ?>" alt="Logo">
				</div>
				<div class="col-lg-6 mb-4 links">
					<a href="<?= esc_url(home_url('/politica-de-privacidade')); ?>">Política de Privacidade</a>
					<div class="open-desclaimer">Desclaimer</div>
				</div>
			</div>

			<div class="desclaimer">
				<p><?php echo get_field('disclaimer', 'option'); ?></p>
			</div>
			
			<div class="row justify-content-between">
				<div class="col-lg-4 location d-flex align-items-center">
					<img src="<?= get_template_directory_uri() ?>/assets/img/location.png" alt="Localização" class="d-block me-3">
					<?php echo get_field('endereco', 'option'); ?>
				</div>
				<div class="col-lg-6 copyright">
					Liberta Global © 2021. Todos os direitos reservados.
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/slick.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/wow.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
<script>
$('.packages-app').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	dots: false,
	arrows: true,
	responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2,
	      }
	    },
	    {
	      breakpoint: 700,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        centerMode: true,
	        arrows: false
	      }
	    }
	]
});

$('.banner').slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
	arrows: false,
	fade: true,
	 autoplay: true,
  	autoplaySpeed: 3000,
  	pauseOnHover:false
});

const locomotiveScroll = new LocomotiveScroll();
wow = new WOW({mobile: false, live: false}).init();

$(document).ready(function () {
    $(".start-hidden").css({'opacity':'1'});

    setTimeout(function() {
	    $(".packages-app .slick-arrow").css({'opacity': '1'});
	}, 2000); 
});

$(".open-desclaimer").click(function(){
	$(".desclaimer").slideToggle(500);
});

$(".menu-open").click(function(){
	$(".menu-header").slideToggle(500);
});

$(document).ready(function() {
    $(".menu-header a").click(function() {
        if ($(window).width() < 768) {
            $(".menu-header").slideToggle(500);
        }
    });
});

$(window).scroll(function () {
	if($(this).scrollTop() > 10) {
		$('.header').addClass('header-fixed');
	} else {
		$('.header').removeClass('header-fixed');
	}
});

$(".default a").click(function(event){
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top - 150
  });
});

</script>
<?php wp_footer() ?>