<!DOCTYPE html>
<html>
<head>
	<title>Booking Form Data</title>
	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<table id="customers">
	<tr>
		<td>Name</td>
		<td><?php echo $first_name.' '.$last_name; ?></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><a href="tel:<?php echo $mobile; ?>"><?php echo $mobile; ?></a></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><?php echo $address; ?></td>
	</tr>
	<tr>
		<td>Zip Code</td>
		<td><?php echo $zip_code; ?></td>
	</tr>
	<tr>
		<td>City</td>
		<td><?php echo $city; ?></td>
	</tr>
	<tr>
		<td>State</td>
		<td><?php echo $state; ?></td>
	</tr>
	<tr>
		<td>Country</td>
		<td><?php echo $country; ?></td>
	</tr>
	<tr>
		<td>Checkin</td>
		<td><?php echo date_format(date_create($checkin),'d-M-Y'); ?></td>
	</tr>
	<tr>
		<td>Checkout</td>
		<td><?php echo date_format(date_create($checkout),'d-M-Y'); ?></td>
	</tr>
	<tr>
		<td>Adult Guest</td>
		<td><?php echo $adult_guest; ?></td>
	</tr>
	<tr>
		<td>Child Guest</td>
		<td><?php echo $child_guest; ?></td>
	</tr>
	<tr>
		<td>No. Of Rooms</td>
		<td><?php echo $no_of_rooms; ?></td>
	</tr>
	<tr>
		<td>Room Type</td>
		<td><?php echo ucfirst($type_of_room).' Bed'; ?></td>
	</tr>
	<tr>
		<td>Any Requirements</td>
		<td><?php echo $any_requirements; ?></td>
	</tr>
</table>
</body>
</html>