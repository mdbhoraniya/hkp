		<div id="weather-widget">
			<div class="inner-container container">
				<a class="weatherwidget-io" href="https://forecast7.com/en/18d9672d82/grant-road/" data-label_1="Hotel Kalpana Palace" data-label_2="Weather" data-icons="Climacons Animated" data-theme="random_grey" data-textcolor="rgba(95, 233, 233, 0.97)" data-highcolor="#f8f660" data-lowcolor="#f8f660" data-suncolor="#f8f660" data-cloudcolor="rgba(95, 233, 233, 0.97)" >Hotel Kalpana Palace Weather</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');</script>
			</div>
		</div>		
		<!-- Top Footer -->
		<div id="top-footer">
			<div id="go-up-box"><i class="fa fa-chevron-up"></i></div>
			<div class="inner-container container">
				<div class="widget col-xs-6 col-md-4">
					<h4>Hotel Kalpana Palace</h4>
					<div class="widget-content">
						Hotel Kalpana Palace in south Mumbai, is a unique blend of comfortable rooms, warm hospitality and homely ambiance. Perfectly suited for business and leisure travelers alike, it is one of the most preferred budget accommodations in Mumbai. The hotel is equipped with the best modern amenities and  is an ideal location for discerning leisure and business guest located in the heart of Mumbai which makes it the perfect place to explore the city.
					</div>
				</div>
				<div class="widget col-xs-6 col-md-4">
					<h4>Navigate</h4>
					<div class="widget-content">

						<div class="row">
							<div class="col-lg-6 col-md-6 col-xs-6">
								<ul>
									<li><a href="<?php echo base_url();?>" class="text-white">Home</a></li>
									<li><a href="<?php echo base_url('rooms');?>" class="text-white">Rooms</a></li>
									<li><a href="<?php echo base_url('gallery');?>" class="text-white">Gallery</a></li>
									<li><a href="<?php echo base_url('booking');?>" class="text-white">Book</a></li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-xs-6">
								<ul>
									<li><a href="<?php echo base_url('about');?>" class="text-white">About</a></li>
									<li><a href="<?php echo base_url('nearby');?>" class="text-white">Nearby</a></li>
									<!-- <li><a href="<?php echo base_url('testimonials');?>" class="text-white">Testimonials</a></li> -->
									<li><a href="<?php echo base_url('contact');?>" class="text-white">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="widget col-md-4 get-in-touch">
					<h4>Get in Touch</h4>
					<div class="widget-content">
						<ul>
							<li><i class="fa fa-map-marker "></i>181,Patthe Bapurao Marg, Near Navjeevan Society, Grant Road (E) Mumbai 400 008</li>
							<li><i class="fa fa-phone"></i><a href="tel:02223000846" class="text-white">+91-22-2300 0846 </a></li>
							<li><i class="fas fa-envelope"></i><a href="mailto:hkp.hotelkalpanapalace@gmail.com?Subject=Customer%20Inquiry" class="text-white">hkp.hotelkalpanapalace@gmail.com</a></li>
						</ul>
						<ul class="list-inline social-icons">
							<li><a href="https://www.facebook.com/hotelkalpanapalace/" target="_blank" title="Facebook - Hotel Kalpana Palace"><i class="fab fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/KalpanaPalace" target="_blank" title="Twitter - Hotel Kalpana Palace"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://plus.google.com/100633954648217602779" target="_blank" title="Google Plus - Hotel Kalpana Palace"><i class="fab fa-google-plus"></i></a></li>
							<li><a href="https://www.linkedin.com/company/hotel-kalpana-palace/" target="_blank" title="LinkedIn - Hotel Kalpana Palace"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/hkp.hotelkalpanapalace/?hl=en" target="_blank" title="Instagram - Hotel Kalpana Palace"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!-- End of Top Footer -->

	<!-- Footer -->
	<footer id="footer">
		<div class="copy-right">
			&copy; <?php echo date('Y').' '.HOTEL_NAME; ?>.  All Rights Reserved.
		</div>
	</footer>

	<script type="text/javascript" src="<?php echo $this->config->item('js');?>jquery.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->item('js');?>bootstrap/tab.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->item('js');?>owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->item('js');?>isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->item('js');?>jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->item('js');?>imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->item('js');?>helper.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->item('js');?>template.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->config->item('js');?>custom.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {

			$('.btnNext').click(function(e){
				e.preventDefault();
				$('.nav-tabs > .active').next('li').find('a').trigger('click');
			});

			$('.btnPrevious').click(function(e){
				e.preventDefault();
				$('.nav-tabs > .active').prev('li').find('a').trigger('click');
			});

			$('.check-box-container input:checkbox').click(function() {
				$('.check input:checkbox').not(this).prop('checked', false);
			}); 


			"use strict";
		// Init the Wow plugin
		new WOW({mobile: false}).init();
	});

		var software_rl = '<?php echo base_url();?>';

		$(document).ready(function(){

			$("body .update_data").change(function(e) {
				e.preventDefault();
				update_data();
			});

			$('.btnRes').click(function(e){
				e.preventDefault();
				update_data();
			});

			// booking form start
			$("#book_submit").click(function(e){
				e.preventDefault();
				var d1               = $("#checkin").datepicker("getDate");
				var d2               = $("#checkout").datepicker("getDate");
				var checkin          = formatDate(d1);
				var checkout         = formatDate(d2);
				
				var adult_guest      = $('#adult_guest').val().trim();
				var child_guest      = $('#child_guest').val().trim();
				var no_of_rooms      = $('#rooms').val().trim();
				var type_of_rooms    = $("input[name='type_of_room']:checked").val();
				
				var first_name       = $('#first_name').val().trim();
				var last_name        = $('#last_name').val().trim();
				var mobile           = $('#mobile').val().trim();
				var email            = $('#email').val().trim().toLowerCase();
				var address          = $('#address').val().trim();
				var zip_code         = $('#zip_code').val().trim();
				var city             = $('#city').val().trim();
				var state            = $('#state').val().trim();
				var country          = $('#country').val().trim();
				var any_requirements = $('textarea#any_requirements').val();

				if (checkin == "" || checkin == undefined || checkin == '1970-01-01') {
					swal("Checkin date required","Please select the checkin date","error");
					$('#booking-tabs').find('li.active').removeClass('active');
					$('#booking-tab-contents').find('div.active').removeClass('active');
    				$('li#tab1').addClass('active');
    				$('#booking-choose-date').addClass('active');
					return false;
				}

				if (checkout == "" || checkout == undefined || checkout == '1970-01-01') {
					swal("Checkout date required","Please select the checkout date","error");
					$('#booking-tabs').find('li.active').removeClass('active');
					$('#booking-tab-contents').find('div.active').removeClass('active');
    				$('li#tab1').addClass('active');
    				$('#booking-choose-date').addClass('active');
					return false;
				}

				if (adult_guest == "" || adult_guest == undefined) {
					swal("No. of adult guest required","Please select the number of adult guest","error");
					$('#booking-tabs').find('li.active').removeClass('active');
					$('#booking-tab-contents').find('div.active').removeClass('active');
    				$('li#tab1').addClass('active');
    				$('#booking-choose-date').addClass('active');
					return false;
				}

				if (child_guest == "" || child_guest == undefined) {
					swal("No. of child guest required","Please select the number of child guest","error");
					$('#booking-tabs').find('li.active').removeClass('active');
					$('#booking-tab-contents').find('div.active').removeClass('active');
    				$('li#tab1').addClass('active');
    				$('#booking-choose-date').addClass('active');
					return false;
				}

				if (no_of_rooms == "" || no_of_rooms == undefined) {
					swal("No. of rooms required","Please select the number of rooms","error");
					$('#booking-tabs').find('li.active').removeClass('active');
					$('#booking-tab-contents').find('div.active').removeClass('active');
    				$('li#tab1').addClass('active');
    				$('#booking-choose-date').addClass('active');
					return false;
				}

				if (type_of_rooms == "" || type_of_rooms == undefined ) {
					swal("Room type required","Please select the room type","error");
					$('#booking-tabs').find('li.active').removeClass('active');
					$('#booking-tab-contents').find('div.active').removeClass('active');
    				$('li#tab2').addClass('active');
    				$('#booking-choose-room').addClass('active');
					return false;
				}

				if (first_name == "") {
					swal("First name is required","Please enter the first name","error");
					return false;
				}

				if (last_name == "") {
					swal("Last name is required","Please enter the last name","error");
					return false;
				}

				if (mobile == "") {
					swal(first_name+", Mobile is required","Please enter a valid mobile number","error");
					return false;
				}

				if (email == "" || !validateEmail(email)) {
					swal(first_name+", Email is required","Please enter a valid email address","error");
					return false;
				}

				var form = $('#booking_form').serializeArray();
				var checkin_data = {
					name: "checkin",
					value: checkin
				};
				var checkout_data = {
					name: "checkout",
					value: checkout
				}
				form.push(checkin_data,checkout_data);

				$.ajax({
                    type : "post",
                    dataType : "json",
                    url : software_rl + 'welcome/save_booking_form',
                    data : form,
                    success: function(data){
                    	console.log(data);
                        if(data==1){
		    				swal({
                              title: "Thank you, "+first_name,
                              text: "We have received your booking data and will get back to you soon!",
                              icon: "success",
                            })
                            .then((clear) => {
                                if (clear) {
                                    window.location.href = software_rl;
                                }
                            });

                        }else{
                            swal({
                              title: "Error!",
                              text: "The form was not submitted, Please try again!",
                              icon: "error",
                            })
                        }

                    },
                    error : function(data){
                        console.log(data);
                    },
                    beforeSend : function(){
                        // swal("Submitting data");
                    }
                });

			});
			// booking form end

			// contact form start
			$("#submit").click(function(e){

				e.preventDefault();

				var name    = $('#name').val().trim();
				var mobile  = $('#mobile').val().trim();
				var email   = $('#email').val().trim().toLowerCase();
				var message = $('#message').val().trim();

				if (name == "") {
					swal("Name is required","Please enter a valid full name","error");
					return false;
				}else{
					var temp_name = name.split(' ');
					var short_name = temp_name[0];
				}

				if (mobile == "") {
					swal(short_name+", Mobile is required","Please enter a valid mobile number","error");
					return false;
				}

				if (email == "" || !validateEmail(email)) {
					swal(short_name+", Email is required","Please enter a valid email address","error");
					return false;
				}

				if (message == "") {
					swal(short_name+", Message is required","Please enter a some message","error");
					return false;
				}

                $.ajax({
                    type : "post",
                    dataType : "html",
                    url : software_rl + 'welcome/save_contact_form',
                    data : ({
                        name : name,
                        mobile : mobile,
                        email : email,
                        message : message
                    }),
                    success: function(data){
                        if(data==1){
                            swal({
                              title: "Thank you, "+short_name,
                              text: "We have received your data and will get back to you soon!",
                              icon: "success",
                            })
                            .then((clear) => {
                                if (clear) {
                                    $('#name').val('');
                                    $('#mobile').val('');
                                    $('#email').val('');
                                    $('#message').val('');
                                }
                            });
                        }else{
                            swal({
                              title: "Error!",
                              text: "The form was not submitted, Please try again!",
                              icon: "error",
                            })
                        }

                    },
                    beforeSend : function(){
                        // swal("Submitting data");
                    }
                });

            });
            // contact form end
		});

		function validateEmail(sEmail) {
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (filter.test(sEmail)) {
				return true;
			}
			else {
				return false;
			}
		}

		function formatDate(date) {

			var d = new Date(date),
			month = '' + (d.getMonth() + 1),
			day = '' + d.getDate(),
			year = d.getFullYear();

			if (month.length < 2) month = '0' + month;
			if (day.length < 2) day = '0' + day;

			return [year, month, day].join('-');
		}

		function update_data(){
			var d1               = $("#checkin").datepicker("getDate");
				var d2               = $("#checkout").datepicker("getDate");
				var checkin          = formatDate(d1);
				var checkout          = formatDate(d2);

				var adult_guest      = $('#adult_guest').val().trim();
				var child_guest      = $('#child_guest').val().trim();
				var no_of_rooms      = $('#rooms').val().trim();
				var type_of_rooms    = $("input[name='type_of_room']:checked").val();

				var display_room_price;
				if(type_of_rooms == 'double'){
					total_price = <?php echo DOUBLE_BED_INT;?> * no_of_rooms;
					room_price = '(<?php echo DOUBLE_BED_INT;?> x '+ no_of_rooms +') = ₹ '+ total_price;
					type_of_rooms = 'Double Bed';
				}else{
					total_price = <?php echo TRIPLE_BED_INT;?> * no_of_rooms;
					room_price = '(<?php echo TRIPLE_BED_INT;?> x '+ no_of_rooms +') = ₹ '+ total_price;
					type_of_rooms = 'Triple Bed';
				}

				if (checkin == "" || checkin == undefined || checkin == '1970-01-01') {
					checkin = '-';
				}

				if(checkout == "" || checkout == undefined || checkout == '1970-01-01'){
					checkout = '-';
				}

				$('#display_checkin').text(checkin);
				$('#display_checkout').text(checkout);

				$('#display_adult_guest').text(adult_guest);
				$('#display_child_guest').text(child_guest);
				$('#display_no_of_rooms').text(no_of_rooms);
				$('#display_type_of_rooms').text(type_of_rooms);
				$('#display_room_price').text(room_price);
		}

</script>

</body>
</html>