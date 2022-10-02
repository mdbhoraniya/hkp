	<!-- Internal Page Header -->
	<div class="internal-page-title about-page" data-parallax="scroll" data-image-src="<?php echo $this->config->item('images');?>internal-header.jpg">
		<h1>Rooms </h1>
		<ol class="breadcrumb"><!-- Internal Page Breadcrumb -->
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Rooms </li>
        </ol>
	</div>
	<!-- End of Internal Page Header -->
	
	<!-- Rooms Container -->
	<div class="room-container container room-list">

		<!-- Room Boxes -->
		<div class="room-box clearfix">
			<div class="img-container col-xs-6">
				<img src="<?php echo $this->config->item('images');?>rooms/grid/1.jpg" alt="1">
				<!-- <a href="#" class="btn btn-default">More Details</a> -->
			</div>
			<div class="details col-xs-6">
				<div class="title">Double <span>Bed</span></div>
				<div class="desc">
					The fun and relaxed atmosphere of the family room makes it the perfect getaway for the entire family.
					<ul class="facilities list-inline">
						<li><i class="fa fa-coffee"></i>Breakfast</li>
						<li><i class="fa fa-wifi"></i>Free Wifi</li>
						<li><i class="fa fa-phone"></i>Phone</li>
						<li><i class="fa fa-parking"></i>Parking</li>
						<li><i class="fas fa-tv"></i>TV</li>
						<li><i class="fas fa-lock"></i>Safe Facilities</li>
					</ul>
				</div>
				<div class="price">
					<span><?php echo DOUBLE_BED;?></span>
					- Per Night
				</div>
			</div>
		</div>

		<!-- Room Boxes -->
		<div class="room-box clearfix">
			<div class="img-container col-xs-6">
				<img src="<?php echo $this->config->item('images');?>rooms/grid/2.jpg" alt="2">
				<!-- <a href="#" class="btn btn-default">More Details</a> -->
			</div>
			<div class="details col-xs-6">
				<div class="title">Triple  <span>Bed</span></div>
				<div class="desc">
					A cozy King size bed, high-speed internet, renovated bathrooms, comfortable furnishings and a complimentary breakfast awaits you at the best hotel.
					<ul class="facilities list-inline">
						<li><i class="fa fa-coffee"></i>Breakfast</li>
						<li><i class="fa fa-wifi"></i>Free Wifi</li>
						<li><i class="fa fa-phone"></i>Phone</li>
						<li><i class="fa fa-parking"></i>Parking</li>
						<li><i class="fas fa-tv"></i>TV</li>
						<li><i class="fas fa-lock"></i>Safe Facilities</li>
					</ul>
				</div>
				<div class="price">
					<span><?php echo TRIPLE_BED;?></span>
					- Per Night
				</div>
			</div>
		</div>

	</div>
	<!-- End of Rooms Container -->

	<div id="buy-theme">
        <div class="inner-container container">
            <div class="title"><span>Courteous </span>treatment will make the customer a walking advertisement!</div>
            <!-- <a href="#" class="btn btn-secondary">Book Now</a> -->
        </div>
    </div>