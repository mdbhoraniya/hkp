<!DOCTYPE html>
<html>
<head>
	<title>Contact Form Data</title>
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
		<td><?php echo $name; ?></td>
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
		<td>Message</td>
		<td><?php echo $message; ?></td>
	</tr>
</table>
</body>
</html>