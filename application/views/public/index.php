<!-- ======= Recent Events Section ======= -->
<section id="events" class="events">
	<div class="container" data-aos="fade-up">
		<header class="section-header">
			<h2>Events</h2>
			<p>Recent Events or Tournament</p>
		</header>

		<div class="row mt-4 g-4 justify-content-center">
			<?php foreach ($item as $tourItem) : ?>
				<div class="col-lg-4" data-aos="flip-left">
					<div class="post-box">
						<div class="post-logo">
							<div class="overlay"></div>
							<img src="<?= base_url() . 'uploads/tournaments/' . $tourItem['tournament_id'] . '/' . $tourItem['logo']; ?>" class="img-fluid" alt="" />
						</div>
						<div class="post-img">
							<img src="<?= base_url() . 'uploads/tournaments/' . $tourItem['tournament_id'] . '/' . $tourItem['banner']; ?>" class="img-fluid" alt="" />
						</div>
						<span class="post-date">
							<?= setDate($tourItem['event_date']); ?>
							<!-- Tue, September 15 -->
						</span>
						<h3 class="post-title">
							<?= $tourItem['tournament_name']; ?>
						</h3>
						<!-- Button trigger modal -->
						<a href="javscript:void(0)" atid="<?= $tourItem['tournament_id']; ?>" 
							class="stretched-link mt-auto readmore-event-trigger d-flex gx-2 align-items-center" data-bs-toggle="modal" data-bs-target="#eventDetailModal">
							<span class="me-2">Read More</span>
							<i class="bi bi-arrow-right"></i>
						</a>
						<!-- <a href="javscript:void(0)" atid="<?= $tourItem['tournament_id']; ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
					</div>
				</div>
			<?php endforeach; ?>
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
			<div class="container col-lg-12">
				<div class="row gy-4">
					<div class="col-md-4" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
						<div class="info-box d-flex flex-row justify-content-center">
							<div class="col-10 row">
								<div class="col-lg-4">
									<i class="bi bi-geo-alt"></i>
								</div>
								<div class="col-lg-8">
									<div>
										<h3>Address</h3>
										<p><?= getCompanyData()['address']; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="400" data-aos-offset="0">
						<div class="info-box d-flex flex-row justify-content-center">
							<div class="col-10 row">
								<div class="col-lg-4">
									<i class="bi bi-telephone"></i>
								</div>
								<div class="col-lg-8">
									<div>
										<h3>Call Us</h3>
										<p><?= getCompanyData()['phone']; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="600" data-aos-offset="0">
						<div class="info-box row d-flex flex-row justify-content-center">
							<div class="col-10 row">
								<div class="col-lg-4">
									<i class="bi bi-envelope"></i>
								</div>
								<div class="col-lg-8">
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

		</div>
	</div>
</section>

<!-- ======= About Section ======= -->
<section id="about" class="about">
	<div class="container-fluid" data-aos="fade-up">
		<div class="row gx-0">
			<div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
				<div class="content row justify-content-center align-items-center">
					<div class="col-lg-8 text-center">
						<h3>Who We Are</h3>
						<h2 class="pt-5">
							<?= htmlspecialchars_decode(getCompanyData()['about']);?> 
						</h2>
					</div>

					<footer id="footer" class="footer">
						<div class="container">
							<div class="copyright row">
								<div class="col-md-12 border-top pt-4">
									&copy; Copyright <strong><span>Lyandra Project, Event Organizer</span></strong>. All Rights Reserved
								</div>
							</div>
						</div>
					</footer>
				</div>
			</div>

		</div>
	</div>
</section>


