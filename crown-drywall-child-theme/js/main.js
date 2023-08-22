  (function ($){
        jQuery( document ).ready(function() {
            $('.home_slide_wrapper').slick({
                dots: true,
                centerPadding: '0px',
                infinite: false,
                autoplay: true,
                loop: false,
                arrows: false,
                speed: 2000,
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1
            });
            
            
            $('#slick-slides').slick({
                dots: false,
                centerPadding: '0px',
                infinite: true,
                arrows: false,
                centerMode: true,
                autoplay: true,
                // 		prevArrow:"<img src='https://stage.projects-delivery.com/wp/eye.lash.works/wp-content/uploads/2023/01/leftar.svg' class='left'>",
                // 	nextArrow:"<img src='https://stage.projects-delivery.com/wp/eye.lash.works/wp-content/uploads/2023/01/rightar.svg' class='right'>",
                speed: 3000,
                loop:true,
                slidesToShow: 4,
                slidesToScroll: 1
            });


            $('.gallery_slider').slick({
                dots: false,
                centerPadding: '0px',
                infinite: true,
                arrows: false,
                centerMode: true,
                autoplay: true,
                // 		prevArrow:"<img src='https://stage.projects-delivery.com/wp/eye.lash.works/wp-content/uploads/2023/01/leftar.svg' class='left'>",
                // 	nextArrow:"<img src='https://stage.projects-delivery.com/wp/eye.lash.works/wp-content/uploads/2023/01/rightar.svg' class='right'>",
                speed: 3000,
                loop:true,
                slidesToShow: 6,
                slidesToScroll: 1
            });
            var input = document.querySelector('.wpens_email');
            input.setAttribute('placeholder', 'Email Address');
        });
  })(jQuery);