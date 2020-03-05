	$(document).ready(function(){

		$("#logotipo").on("mouseover",function(){

			$("#banner h1").addClass("efeito");

		})
		.on("mouseout",function () {
						
			$("#banner h1").removeClass("efeito");

		})
		$("#input-search").on("focus",function(){

			$("li.search").addClass("ativo");

		})
		.on("blur",function(){

			$("li.search").removeClass("ativo");
		});

		$(".thumbnails").owlCarousel({
			
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 3
				},
				768: {
					items: 4
				}
			}
		});
		var owl = $(".thumbnails");

		owl.owlCarousel();

		$('#btn-news-prev').on("click", function(){

			owl.trigger('prev.owl.carousel');

		});
		$('#btn-news-next').on("click", function(){

			owl.trigger('next.owl.carousel');

		});
		$("#pageup").on("click", function(event){

			$("html,body").animate({
				scrollTop:0
			}, 1000);

			event.preventDefault();
		});
		$("#btn-bars").on("click", function(){
			$("header").toggleClass("open-menu");
		})
		$("#menu-mobile-mask, .btn-close").on("click", function(){
			$("header").removeClass("open-menu");
		})

		$("#btn-search").on("click", function(){
			$("header").toggleClass("open-search");
		});
	});

