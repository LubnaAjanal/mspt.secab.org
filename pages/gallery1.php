<?php include('../headerPages/header.php'); ?>

<style media="screen">
	.carousel-item {
		padding: 15px;
		cursor: -webkit-grabbing;

		& img {
			border-radius: 30px;
			height: 500px;

			box-shadow: 0px 5px 5px rgba(0, 0, 0, .21);
			transition: .25s linear;
		}

		&:hover {
			& img {
				transform: translatey(-1%);
			}
		}
	}

	.carousel-indicators li {
		display: inline-block;
		width: 10px;
		height: 10px;
		margin: 1px;
		text-indent: -999px;
		cursor: pointer;
		background-color: #000 \9;
		background-color: rgba(0, 0, 0, 0);
		border: 1px solid #fff;
		border-radius: 10px;
		margin: 2px;
		position: relative;
		top: 30px;

		&.active {
			background: #fff;

		}
	}


	@media only screen and (max-width: 650px) {
		.carousel-item img {
			height: auto;
		}
	}




	.carousel-control-prev {
		left: -50px;
		margin: 0 -25px;
	}

	.carousel-control-next {
		right: -50px;
		margin: 0 -25px;
	}
</style>

<div class="container">
	<h3 class="text-center text-uppercase">
		Custom Bootstrap Carousel
	</h3>
	<div class="row">
		<div class="col-lg-10 col-md-8 col-sm-12 mx-auto my-5">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="https://images.unsplash.com/photo-1561877202-53d0e24be55d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://images.unsplash.com/photo-1561622245-4d9cd72441a8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://images.unsplash.com/photo-1508724735996-b41f69dfe2a9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1156&q=80" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>

<script>
	$(".carousel").swipe({

		swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

			if (direction == 'left') $(this).carousel('next');
			if (direction == 'right') $(this).carousel('prev');

		},
		allowPageScroll: "vertical"

	});
</script>

<?php include('../headerPages/top_footer.php');
include('../headerPages/footer.php'); ?>