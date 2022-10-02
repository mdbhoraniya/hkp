	<div id="home-top-section">
		<div id="main-slider">
			<div class="items">
				<img src="<?php echo $this->config->item('images');?>slider/1.jpg" alt="3"/>
			</div>
			<div class="items">
				<img src="<?php echo $this->config->item('images');?>slider/3.jpg" alt="3"/>
			</div>
			<div class="items">
				<img src="<?php echo $this->config->item('images');?>slider/4.jpg" alt="4"/>
			</div>
			<div class="items">
				<img src="<?php echo $this->config->item('images');?>slider/2.jpg" alt="2"/>
			</div>
		</div>

		<!-- Booking Form -->
		<!-- <div class="booking-form-container container">
			<div class="booking-form-inner-container">
				<div id="main-booking-form" class="style-2">
					<h2>Find A <span>Room</span></h2>
					<form class="booking-form clearfix" action="#">
						<div class="input-daterange clearfix">
				            <div class="booking-fields col-xs-6 col-md-12">
				                <input placeholder="Choose check in date" class="datepicker-fields check-in" type="text" name="start" />
				                <i class="fa fa-calendar"></i>
				            </div>
				            <div class="booking-fields col-xs-6 col-md-12">
				                <input placeholder="Choose check out date" class="datepicker-fields check-out" type="text" name="end" />
				                <i class="fa fa-calendar"></i>
				            </div>
				        </div>
			            <div class="booking-fields col-xs-6 col-md-12">

			                <select name="room-type">
			                    <option value="">How Many Adult?</option>
			                    <option value="2">1</option>
			                    <option value="3">2</option>
			                    <option value="4">3</option>
			                    <option value="5">4</option>
			                    <option value="6">5</option>
			                </select>

			            </div>
			            <div class="booking-fields col-xs-6 col-md-12">
			                <select name="guest">
			                    <option value="">How Many Children ?</option>
			                    <option value="1">1</option>
			                    <option value="2">2</option>
			                    <option value="3">3</option>
			                    <option value="4">4</option>
			                    <option value="5">5</option>
			                </select>
			            </div>
			            <div class="booking-button-container">
			                <input class="btn btn-default" value="Check Availability" type="submit"/>
			            </div>
			        </form>
				</div>
			</div>
		</div> -->
	</div>
	<!-- End of Top Slider and Booking form -->

	<div id="luxury-rooms">
		<div class="heading-box">
			<h2>Luxury <span>Rooms</span></h2>
			<div class="subtitle">Best rooms with Best services</div>
		</div>

		<div class="room-container container">
			<div class="room-boxes">
				<img src="<?php echo $this->config->item('images');?>rooms/1.jpg" alt="King Suit" class="room-img">
				<div class="room-details col-xs-6 col-md-4">
					<div class="title">Double Bed</div>
					<div class="description">The fun and relaxed atmosphere of the family room makes it the perfect getaway for the entire family.</div>
					<a href="<?php echo base_url('rooms'); ?>" class="btn btn-default">Details</a>
				</div>
				<div class="price-container col-xs-6 col-md-8">
					<div class="price"><span><?php echo DOUBLE_BED;?></span> - Per Night</div>
				</div>
			</div>

			<div class="room-boxes right">
				<img src="<?php echo $this->config->item('images');?>rooms/2.jpg" alt="Royal Suit" class="room-img">
				<div class="room-details col-xs-6 col-md-4">
					<div class="title">Triple Bed</div>
					<div class="description">A cozy King size bed, high-speed internet, renovated bathrooms, comfortable furnishings and a complimentary breakfast awaits you at the best hotel.</div>
					<a href="<?php echo base_url('rooms'); ?>" class="btn btn-default">Details</a>
				</div>
				<div class="price-container col-xs-6 col-md-8">
					<div class="price"><span><?php echo TRIPLE_BED;?></span> - Per Night</div>
				</div>
			</div>

		</div>
	</div>

	<div id="special-packages" class="container">
		<!-- Heading box -->
		<div class="heading-box">

		</div>

		<!-- Package Container -->
		<div class="package-container clearfix">
			<!-- Package Box -->
			<div class="package-box wow fadeInUp col-sm-6 col-md-4">
				<div class="package-inner">
					<div class="title">Activities</div>
					<div class="package-details">
						<ul><li>Welcome to the city that never sleeps. Enjoy an eclectic mix of the most exhilarating places to visit in Mumbai that will allure you with an enviable vibe. Mumbai is the Big Apple of India, and if you are traveling to Mumbai, here are some places mentioned which are nearby from the hotel.</li></ul>
					</div>
					<a href="<?php echo base_url('nearby'); ?>" class="btn btn-default">More...</a>
				</div>
			</div>

			<!-- Package Box -->
			<div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="0.5s">
				<div class="package-inner">
					<div class="title">Rooms</div>
					<div class="package-details">
						<ul><li>The Double bed standard room comprises of 1 Double bed or 2 Single beds & Triple bed comprises of one King sized bed and a Single bed. The room is furnished with wall to wall carpeting. Our ultramodern bathroom is equipped with all the amenities you could possibly need during your stay.</li></ul>
					</div>
					<a href="<?php echo base_url('rooms'); ?>" class="btn btn-default">More...</a>
				</div>
			</div>

			<!-- Package Box -->
			<div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="1s">
				<div class="package-inner">
					<div class="title">Location</div>
					<div class="package-details">
						<ul><li>The Hotel Kalpana Palace is the ideal location for discerning leisure and business guests located in the heart of the Mumbai city, which is 0.5 km away from the Mumbai Central Railway Station and 20 km from the International Airport which makes it the perfect place to explore the city with ease.</li></ul>
					</div>
					<a href="<?php echo base_url('about'); ?>" class="btn btn-default">More...</a>
				</div>
			</div>

		</div>
	</div>

	<div id="buy-theme">
		<div class="inner-container container">
			<div class="title"><span>Customers </span>may forget what you said but they will never forget how you made them feel!</div>
		</div>
	</div>