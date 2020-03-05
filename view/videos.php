<?php include_once("header.php");?>

<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

<section>
	
	<div id="call-to-action">

		<div class="container">

			<div class="text-center">
				<h2>Videos</h2>
				<hr>
			</div>
				<div>
					<div class="text-center video">

            			<video id="player" controls>

            				<track kind="captions" label="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default />

             			 <source src="mp4/highlights.mp4" poster="img/highlights.jpg" type="video/mp4" />

     				 </div>
     				 
					<div>
						<input type="range" id="volume" min="0" max="1" step="0.01" style="width: 100%" value="1">
						</div>
						<div class="text-center">
						<button  type="button" id="btn-play-pause"class="btn btn-success">PLAY</button>
					</div>


				</div>

		</div>
	</div>

	<div id="news" class="container" style="top:0">
		<div>
		<h2>Latest News</h2>
		<hr>
		</div>
			<div class="row thumbnails owl-carousel owl-theme">

			<div class="item" data-video="highlights">
				<div class="item-inner">
					<img src="img/highlights.jpg" alt="Noticia">
					<h3>Highlights</h3>
				</div>
			</div>				

			<div class="item" data-video="Orlando_City_Foundation_2015">
				<div class="item-inner">
					<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
					<h3>Orlando City Foundation 2015</h3>
				</div>
			</div>

			<div class="item" data-video="highlights">
				<div class="item-inner">
					<img src="img/highlights.jpg" alt="Noticia">
					<h3>Highlights</h3>
				</div>
			</div>				

			<div class="item" data-video="Orlando_City_Foundation_2015">
				<div class="item-inner">
					<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
					<h3>Orlando City Foundation 2015</h3>
				</div>
			</div>

			<div class="item" data-video="highlights">
				<div class="item-inner">
					<img src="img/highlights.jpg" alt="Noticia">
					<h3>Highlights</h3>
				</div>
			</div>				

			<div class="item" data-video="Orlando_City_Foundation_2015">
				<div class="item-inner">
					<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
					<h3>Orlando City Foundation 2015</h3>
				</div>
			</div>

		
		</div>

	</div>
</section>

<?php include_once("footer.php");?>	

<script src="lib/plyr/dist/plyr.js"></script>
<script>
	
	$(function(){

		$(".thumbnails .item").on("click", function(){

			$("video").attr({
				"src":"mp4/"+$(this).data('video')+".mp4",
				"poster":"img/"+$(this).data('video')+".jpg"
			});

		});

		$("#volume").on("mousemove", function(){

			$("video")[0].volume = parseFloat($(this).val());
		});

		$("#btn-play-pause").on("click", function(){

			var video = $("video")[0];

			if ($(this).hasClass("btn-success")){
				$(this).text("STOP");
				video.play();
			}else{
				$(this).text("PLAY")
				video.pause();
			}

			$(this).toggleClass("btn-success btn-danger");
		});
		const player = new Plyr('#player', {

        controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'settings', 'fullscreen'],

      });
	});

</script>