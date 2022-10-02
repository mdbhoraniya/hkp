<div class="internal-page-title about-page" data-parallax="scroll" data-image-src="<?php echo $this->config->item('images');?>booking-header.jpg">
	<h1>Book <span>Rooms</span></h1>
	<ol class="breadcrumb"><!-- Internal Page Breadcrumb -->
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li class="active">Book Rooms</li>
	</ol>
</div>

<div id="booking-page-content">
	<div class="booking-container container">

		<div class="heading-box">
			<h2>Book <span>Now</span></h2>
		</div>
		<div class="main-booking-description">Book your room with <b>zero</b> payment and get the confirmation</div>

		<ul class="nav nav-tabs nav-justified" id="booking-tabs" role="tablist">
			<li class="active" id="tab1">
				<a href="#booking-choose-date" data-toggle="tab" role="tab">
					<span class="number">1</span>
					<span class="title">Choose <b>Date</b></span>
				</a>
			</li>
			<li id="tab2">
				<a href="#booking-choose-room" data-toggle="tab" role="tab">
					<span class="number">2</span>
					<span class="title">Choose <b>Room</b></span>
				</a>
			</li>
			<li id="tab3">
				<a href="#booking-reservation" data-toggle="tab" role="tab">
					<span class="number">3</span>
					<span class="title">Reservation</span>
				</a>
			</li>
			<!-- <li class="disabled_tab" id="tab4">
				<a href="#booking-confirmation" data-toggle="tab" >
					<span class="number">4</span>
					<span class="title">Confirmation</span>
				</a>
			</li> -->
		</ul>

		<!-- Tab main content container -->
		<form id="booking_form" method="post">
			<div id="booking-tab-contents" class="tab-content">
				<!-- Tab Contents ( Do Not Change / Remove the ID) -->
				<div class="tab-pane fadeInUp in active clearfix" id="booking-choose-date">
					<!-- Check In / Check Out section -->
					<div class="input-daterange booking-dates col-xs-12 col-lg-8">
						<div id="checkin" class="booking-date-fields-container col-xs-12 col-sm-6 " name="checkin">
							<h4><b>Check</b> in</h4>
						</div>
						<div id="checkout" class="booking-date-fields-container col-xs-12 col-sm-6 " name="checkout">
							<h4><b>Check</b> out</h4>
						</div>
					</div>

					<div class="more-details-container col-xs-12 col-lg-4">
						<h4><b>Other</b> details</h4>

						<div class="field-container">
							<label for="adult-guest">Adult :</label>
							<select name="adult_guest" id="adult_guest" class="update_data">
								<option value="" selected="selected">Select</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
						<div class="field-container">
							<label for="child-guest">Children :</label>
							<select name="child_guest" id="child_guest" class="update_data">
								<option value="" selected="selected">Select</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
						<div class="field-container">
							<label for="child-guest">Rooms :</label>
							<select name="rooms" id="rooms" class="update_data">
								<option value="" selected="selected">Select</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
						<div class="field-container">
							<!-- <input type="button" class="btn btn-default btnNext" value="Next"> -->
							<ul class="pager">
								<!-- <li class="previous btnPrevious"><a href="#">Previous</a></li> -->
								<li class="next btnNext "><a href="#" class="text-white">Next</a></li>
							</ul> 
						</div>

					</div>
				</div>
				<!-- Tab Contents ( Do Not Change / Remove the ID) -->
				<div class="tab-pane fadeInUp" id="booking-choose-room">
					<!-- Rooms Container -->
					<div class="room-container room-grid clearfix">

						<!-- Room Boxes -->
						<div class="room-box col-xs-6">
							<div class="img-container">
								<div class="check-box-container check">
									<input type="checkbox" value="double" name="type_of_room" id="room-1" class="update_data">
									<label for="room-1">
										<span></span>
										Select This <b>Room</b>
									</label>
								</div>
								<img src="<?php echo $this->config->item('images');?>/rooms/grid/1.jpg" alt="1">
								<a href="<?php echo base_url('rooms');?>" target="_blank" class="btn btn-default">More Details</a>
							</div>
							<div class="details">
								<div class="title"><a href="#"><span>Double</span> Bed</a></div>
								<div class="desc">The fun and relaxed atmosphere of the family room makes it the perfect getaway for the entire family.</div>
								<div class="price">
									<span><?php echo DOUBLE_BED;?></span>
									- Per Night
								</div>
							</div>
						</div>

						<!-- Room Boxes -->
						<div class="room-box col-xs-6">
							<div class="img-container">
								<div class="check-box-container check">
									<input type="checkbox" value="triple" name="type_of_room" id="room-2" class="update_data">
									<label for="room-2">
										<span></span>
										Select This <b>Room</b>
									</label>
								</div>
								<img src="<?php echo $this->config->item('images');?>/rooms/grid/2.jpg" alt="2">
								<a href="<?php echo base_url('rooms');?>" target="_blank" class="btn btn-default">More Details</a>
							</div>
							<div class="details">
								<div class="title"><a href="#"><span>Triple</span> Bed</a></div>
								<div class="desc">A cozy King size bed, high-speed internet, renovated bathrooms, comfortable furnishings and a complimentary breakfast</div>
								<div class="price">
									<span><?php echo TRIPLE_BED;?></span>
									- Per Night
								</div>
							</div>
						</div>
						<ul class="pager">
							<li class="previous btnPrevious"><a href="#">Previous</a></li>
							<li class="next btnNext btnRes"><a href="#">Next</a></li>
						</ul>
					</div>
					<!-- End of Rooms Container -->
				</div>
				<!-- Tab Contents ( Do Not Change / Remove the ID) -->
				<div class="tab-pane fadeInUp clearfix" id="booking-reservation">

					<div class="reservation-summary col-md-4">
						<h4>Reservation <b>Summary</b></h4>
						<div class="info-boxes">
							<div class="title"><span>Reservation <b>Info</b></span></div>
							<ul>
								<li>
									<div class="info">Check in :</div>
									<div class="value" id="display_checkin" >0</div>
								</li>
								<li>
									<div class="info">Check out :</div>
									<div class="value" id="display_checkout">0</div>
								</li>
								<li>
									<div class="info">Adult :</div>
									<div class="value" id="display_adult_guest">0</div>
								</li>
								<li>
									<div class="info">Child :</div>
									<div class="value" id="display_child_guest">0</div>
								</li>
								<li>
									<div class="info">No. Of Rooms :</div>
									<div class="value" id="display_no_of_rooms">0</div>
								</li>
							</ul>
							<div class="title"><span>Room <b>Info</b></span></div>
							<ul>
								<li>
									<div class="info" id="display_type_of_rooms">-</div>
									<div class="value" id="display_room_price">₹</div>
								</li>
							</ul>
							<!-- <div class="total-cost">
								<div class="info">Total Cost :</div>
								<div class="value">$1,785</div>
							</div> -->

						</div>

					</div>
					<div class="reservation-info col-md-8">
						<h4>Reservation <b>Info</b></h4>
						<div class="col-md-6">
							<div class="field-container">
								<input type="text" placeholder="First Name *" id="first_name" name="first_name" value="">
							</div>
							<div class="field-container">
								<input type="text" placeholder="Last Name *" id="last_name" name="last_name" value="">
							</div>
							<div class="field-container">
								<input type="text" placeholder="Mobile *" id="mobile" name="mobile" value="">
							</div>
							<div class="field-container">
								<input type="email" placeholder="Email *" id="email" name="email" value="">
							</div>
							<div class="field-container">
								<input type="text" placeholder="Address" id="address" name="address" value="">
							</div>
							<div class="field-container">
								<input type="text" placeholder="Zip Code" id="zip_code" name="zip_code" value="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="field-container">
								<input type="text" placeholder="City" id="city" name="city" value="">
							</div>
							<div class="field-container">
								<input type="text" placeholder="State" id="state" name="state" value="">
							</div>
							<div class="field-container">
								<input type="text" placeholder="Country" id="country" name="country" value="">
							</div>
							<div class="field-container message-field">
								<textarea placeholder="Any Requirements" id="any_requirements" name="any_requirements"></textarea>
							</div>
							<div class="field-container btn-field">
								<input type="submit" id="book_submit" class="btn btn-default" value="Submit">
							</div>
						</div>
					</div>

					<!-- End of Guest Info form -->
				</div>
				<!-- Tab Contents ( Do Not Change / Remove the ID) -->
				<!-- <div class="tab-pane fadeInUp clearfix" id="booking-confirmation">
					<h3>Reservation Complete!</h3>
					<div class="description">
						Thanks for your reservation. Our staff will check the information and after their confirmation your reservation will be finalized. If you need to have extra information you can contact us via our contact page.
					</div>
					
					<div class="reservation-summary col-md-4">
						<h4>Reservation <b>Summary</b></h4>
						<div class="info-boxes">
							<div class="title"><span>Reservation <b>Info</b></span></div>
							<ul>
								<li>
									<div class="info">Check in :</div>
									<div class="value">2015-04-29</div>
								</li>
								<li>
									<div class="info">Check out :</div>
									<div class="value">2015-04-30</div>
								</li>
								<li>
									<div class="info">Adult :</div>
									<div class="value">1</div>
								</li>
								<li>
									<div class="info">Child :</div>
									<div class="value">0</div>
								</li>
							</ul>
							<div class="title"><span>Room <b>Info</b></span></div>
							<ul>
								<li>
									<div class="info">Deluxe One-bedroom Suite</div>
									<div class="value">$214</div>
								</li>
							</ul>
							<div class="total-cost">
								<div class="info">Total Cost :</div>
								<div class="value">$1,785</div>
							</div>

						</div>
					</div>
					<div class="reservation-info col-md-8">
						<h4>Reservation <b>Info</b></h4>
						<div class="col-md-6">
							<ul>
								<li>
									<div class="info">First Name :</div>
									<div class="value">John</div>
								</li>
								<li>
									<div class="info">Last Name :</div>
									<div class="value">Doe</div>
								</li>
								<li>
									<div class="info">Email :</div>
									<div class="value">Info@ravistheme.com</div>
								</li>
								<li>
									<div class="info">Phone :</div>
									<div class="value">0185 26 37 48 59</div>
								</li>
								<li>
									<div class="info">City :</div>
									<div class="value">Sydney</div>
								</li>
								<li>
									<div class="info">Address :</div>
									<div class="value">133 Elizabethstreet, Sydney 4000, Australia</div>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul>
								<li>
									<div class="info">Special Requirements :</div>
									<div class="value">Airport Pick up</div>
								</li>
							</ul>
						</div>
					</div>

				</div> -->


			</div>
		</form>
	</div>
</div>