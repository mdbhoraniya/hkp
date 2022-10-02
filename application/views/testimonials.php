
	<!-- Internal Page Header -->
	<div class="internal-page-title about-page" data-parallax="scroll" data-image-src="<?php echo $this->config->item('images');?>testimonials-header.jpg">
		<h1>Testimonials </h1>
		<ol class="breadcrumb"><!-- Internal Page Breadcrumb -->
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Testimonials</li>
        </ol>
	</div>
	<!-- End of Internal Page Header -->


	<!-- Add Testimonials Box -->
	<div id="add-testimonials-box" class="container">
		<div class="front-box">
			<div class="title">Click Here to</div>
			<h2>Share your <b>Experience</b></h2>
			<div class="title">about staying at <?php echo HOTEL_NAME; ?></div>
		</div>
		<div class="back-box clearfix hide">
			<div class="fa fa-close"></div>
			<form class="add-testimonials">
				<div class="col-md-4">
					<div class="title">Your Feedback is <b>Valuable</b></div>
					<div class="description">
						Put some instruction about how the users can send their feedback and is there a need to confirmation form it or not?
					</div>
				</div>
				<div class="col-md-4">
					<input type="text" name="fname" placeholder="Full Name :">
					<input type="email" name="email" placeholder="Email :">
					<input type="text" name="phone" placeholder="Phone :">
					<input type="text" name="title" placeholder="Testimonial title :">
				</div>
				<div class="col-md-4">
					<textarea name="testimonial" placeholder="Your Testimonial :"></textarea>
					<input type="submit" class="btn btn-default" value="Submit">
				</div>
			</form>
		</div>
	</div>
	<!-- End of Add Testimonials Box -->

	<!-- Testimonial List container -->
	<div id="testimonials-container-box" class="container">
		<div class="testimonial-box item col-xs-6 col-md-4">
			<div class="inner-box">
				<div class="title"></div>
				<div class="description">Good ambiance and nice location, hygienic rooms, and good service, value for money.</div>
				<cite>Parasani Ramachandraprasad</cite>
			</div>
		</div>

		<div class="testimonial-box item col-xs-6 col-md-4">
			<div class="inner-box">
				<div class="title"></div>
				<div class="description">I recommend this to everyone traveling to South Mumbai especially solo business travelers. It's also safe for a family & lovely room at affordable rates. I would definitely like to stay here in the future as well.</div>
				<cite>Atul</cite>
			</div>
		</div>

		<div class="testimonial-box item col-xs-6 col-md-4">
			<div class="inner-box">
				<div class="title">Great Hotel &amp; great services</div>
				<div class="description">
					This hotel has great services with the best equipment that you can imagine. I was there for 4 night and actually I enjoyed of my staying. Everything was perfect and on-time, actually I used all of services that this hotel provided for me and all of theme was perfect. I suggest this hotel to every ones.
				</div>
				<cite>Taylor Williams</cite>
			</div>
		</div>

		<div class="testimonial-box item col-xs-6 col-md-4">
			<div class="inner-box">
				<div class="title">I had great time in this hotel</div>
				<div class="description">
					This hotel has great services with the best equipment that you can imagine. I was there for 4 night and actually I enjoyed of my staying. Everything was perfect and on-time, actually I used all of services that this hotel provided for me and all of theme was perfect. I suggest this hotel to every ones.
				</div>
				<cite>John Barry</cite>
			</div>
		</div>

		<div class="testimonial-box item col-xs-6 col-md-4">
			<div class="inner-box">
				<div class="title">Great View with the great room services</div>
				<div class="description">
					This hotel has great services with the best equipment that you can imagine. I was there for 4 night and actually I enjoyed of my staying.
				</div>
				<cite>Kim Boyer</cite>
			</div>
		</div>

		<div class="testimonial-box item col-xs-6 col-md-4">
			<div class="inner-box">
				<div class="title">The staffs are so pleasure :)</div>
				<div class="description">The first that about this hotel which encouraged me to stay more in this hotel was the staff and their pleasant behavior with their guests.</div>
				<cite>Ryan Oswald</cite>
			</div>
		</div>
	</div>
	<!-- End of Testimonial List container -->