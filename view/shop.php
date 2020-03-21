<?php include_once("header.php");?>

<section>

	<div class="container" id="destaques-produtos-container" ng-controller="destaque-controller">

		<div id="destaque-produtos" class="owl-carousel owl-theme">

			<div class="item" ng-repeat="produto in produtos">

			  <div class="row">

				    <div class="col-sm col-imagem">
				   		<img  style="width: 60%" src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
				    </div>

				    <div class="col-sm col-descricao">
				    <h2 style="font-family: arial;font-size: 20px;color: #666;margin-bottom: 20px;">{{produto.nome_prod_longo}}</h2>

							<div class="box-valor">
								<div class="text-noboleto text-arial-cinza">no boleto</div>
								<div class="text-por text-arial-cinza">por</div>
								<div class="text-reais text-roxo">R$</div>
								<div class="text-valor text-roxo">{{produto.preco}}</div>
								<div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
								<div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
								<div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>
							</div>
							<a href="#" class="btn btn-comprar text-roxo"><i class="fas fa-shopping-cart"></i>compre agora</a>
				    </div>

				</div>
				
			  </div>

		</div>

	  			<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
				<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

	</div>

	<div id="promocoes" class="container">
		
		<div class="row">

			<div class="col-md col-promo">
				<div class="box-promocao box-1">
				<p>escolha por desconto</p>
				</div>
			</div>			

			<div class="col-md col-promo">
				<div class="box-promocao">
				<div class="text-ate">até</div>
				<div class="text-numero">40</div>
				<div class="text-porcento">%</div>
				<div class="text-off">OFF</div>
				</div>
			</div>

			<div class="col-md col-promo">
				<div class="box-promocao">
				<div class="text-ate">até</div>
				<div class="text-numero">60</div>
				<div class="text-porcento">%</div>
				<div class="text-off">OFF</div>
				</div>
			</div>

			<div class="col-md col-promo">
				<div class="box-promocao">
				<div class="text-ate">até</div>
				<div class="text-numero">80</div>
				<div class="text-porcento">%</div>
				<div class="text-off">OFF</div>
				</div>
			</div>

			<div class="col-md col-promo">
				<div class="box-promocao">
				<div class="text-ate">até</div>
				<div class="text-numero">85</div>
				<div class="text-porcento">%</div>
				<div class="text-off">OFF</div>
				</div>
			</div>

			</div>

	</div>
	<div class="container">

		<div id="mais-buscados">
			<div>
				<h2 class="text-default-roxo">Os mais buscados</h2>
				<hr class="agaerre">
			</div>

			<div class="row">
				<div class="col-md col-buscados">
					<a class="linki" href="#">
						<img class="img-buscados" src="img/produtos/CafeteiraDolceGusto.jpg">
						<h3> Cafeteira Dolce Gusto</h3>
						<div class="estrelas" data-score="3"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor-buscados text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de 10,99 sem juros</div>
					</a>
				</div>

				<div class="col-md col-buscados">
					<a class="linki" href="#">
						<img class="img-buscados" src="img/produtos/CafeteiraDolceGusto.jpg">
						<h3> Cafeteira Dolce Gusto</h3>
						<div class="estrelas" data-score="5"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor-buscados text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de 10,99 sem juros</div>
					</a>
				</div>
				<div class="col-md col-buscados">
					<a  class="linki" href="#">
						<img class="img-buscados" src="img/produtos/CafeteiraDolceGusto.jpg">
						<h3> Cafeteira Dolce Gusto</h3>
						<div class="estrelas" data-score="2"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor-buscados text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de 10,99 sem juros</div>
					</a>
				</div>
				<div class="col-md col-buscados">
					<a class="linki" href="#">
						<img class="img-buscados" src="img/produtos/CafeteiraDolceGusto.jpg">
						<h3> Cafeteira Dolce Gusto</h3>
						<div class="estrelas" data-score="1.5"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor-buscados text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de 10,99 sem juros</div>
					</a>
				</div>

			</div>
		</div>
	</div>

</section>
<?php include_once("footer.php");?>

<script>
angular.module("shop", []).controller("destaque-controller", function($scope){

	$scope.produtos = [];

	$scope.produtos.push({
		nome_prod_longo:"Smartphone Motorola Moto X Play Dual Chip Desbloqueado Andoid 5.1",
		foto_principal:"motoMaxx.jpg",
		preco:"1.259",
		centavos:"10",
		parcelas:8,
		parcela:"174,88",
		total:"1.399,00"
	});
	$scope.produtos.push({
		nome_prod_longo:"Iphone",
		foto_principal:"motoMaxx.jpg",
		preco:"1.259",
		centavos:"10",
		parcelas:8,
		parcela:"174,88",
		total:"1.399,00"
	});

	
});

$("#destaque-produtos").owlCarousel({
		autoplay: 5000,
		items:1,
		singleItem: true
		
		});
		var owl = $("#destaque-produtos");

		owl.owlCarousel();

		$('#btn-destaque-prev').on("click", function(){

			owl.trigger('prev.owl.carousel');

		});
		$('#btn-destaque-next').on("click", function(){

			owl.trigger('next.owl.carousel');

		});

		$('.estrelas').each(function(){
			
			$(this).raty({
			starHalf : 'lib/raty/lib/images/star-half.png',
			starOff : 'lib/raty/lib/images/star-off.png',
			starOn : 'lib/raty/lib/images/star-on.png',
			score : parseFloat($(this).data("score"))
			});
		});

</script>
