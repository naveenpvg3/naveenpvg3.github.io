<?php include 'header.php'; ?>

  <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Portfolio</h2>
                  <div class="page_link">
                      <a href="index">Home</a>
                      <a href="portfolio">Portfolio</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->


  <!--================ Start Portfolio Area =================-->
	<section class="portfolio_area section_gap" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our Portfolio <span></span></p>
						<h2>Check Our Recent <br>
							Client Work </h2>
					</div>
				</div>
			</div>

			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>

			<div class="filters-content">
				<div class="row portfolio-grid">
					<div class="grid-sizer col-md-3 col-lg-3"></div>
					<div class="col-lg-6 col-md-6 all following">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p1.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="#">Website Design</a></h4>
								<p>All Is Live Now</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 all latest popular upcoming">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p4.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="#">Website Design</a></h4>
								<p>All Is Live Now</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 all latest following">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p2.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="#">Website Design</a></h4>
								<p>All Is Live Now</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 all latest upcoming">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p3.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="#">Website Design</a></h4>
								<p>All Is Live Now</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 all popular">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p6.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="#">Website Design</a></h4>
								<p>All Is Live Now</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 all popular latest following">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p5.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="#">Website Design</a></h4>
								<p>All Is Live Now</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--================ End Portfolio Area =================-->


  <!--================ Start Brands Area =================-->
	<?php include 'brands.php'; ?>
  <!--================ End Brands Area =================-->

	
  <?php include 'footer.php'; ?>