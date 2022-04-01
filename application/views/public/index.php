<!-- ======= Recent Events Section ======= -->
<section id="events" class="events">
	<div class="container" data-aos="fade-up">
		<header class="section-header">
			<h2>Events</h2>
			<p>Recent Events or Tournament</p>
		</header>

		<div class="row">
			<div class="col-lg-4">
				<div class="post-box">
					<div class="post-img">
						<img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="" />
					</div>
					<span class="post-date">Tue, September 15</span>
					<h3 class="post-title">
						Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur
						sit
					</h3>
					<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="post-box">
					<div class="post-img">
						<img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="" />
					</div>
					<span class="post-date">Fri, August 28</span>
					<h3 class="post-title">
						Et repellendus molestiae qui est sed omnis voluptates magnam
					</h3>
					<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="post-box">
					<div class="post-img">
						<img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="" />
					</div>
					<span class="post-date">Mon, July 11</span>
					<h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
					<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ======= About Section ======= -->
<section id="about" class="about">
	<div class="container" data-aos="fade-up">
		<div class="row gx-0">
			<div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
				<div class="content row justify-content-center align-items-center">
					<div class="col-lg-8 text-center">
						<h3>Who We Are</h3>
						<h2>
							Expedita voluptas omnis cupiditate totam eveniet nobis sint iste.
							Dolores est repellat corrupti reprehenderit.
						</h2>
						<p>
							Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et.
							Inventore et et dolor consequatur itaque ut voluptate sed et.
							Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
						</p>
						<div class="text-center text-lg-center">
							<a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
								<span>Read More</span>
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
				<img src="assets/img/about.jpg" class="img-fluid" alt="" />
			</div>
		</div>
	</div>
</section>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
	<div class="container" data-aos="fade-up">
		<header class="section-header">
			<h2>Contact</h2>
			<p>Contact Us</p>
		</header>

		<div class="row gy-4">
			<div class="col-lg-12">
				<div class="row gy-4">
					<div class="col-md-4">
						<div class="info-box d-flex flex-row justify-content-center">
							<i class="bi bi-geo-alt col-3"></i>
							<div>
								<h3>Address</h3>
								<p><?= getCompanyData()['address']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info-box d-flex flex-row justify-content-center">
							<i class="bi bi-telephone col-3"></i>
							<div>
								<h3>Call Us</h3>
								<p><?= getCompanyData()['phone']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info-box d-flex flex-row justify-content-center">
							<i class="bi bi-envelope col-3"></i>
							<div>
								<h3>Email Us</h3>
								<p><?= getCompanyData()['email']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>