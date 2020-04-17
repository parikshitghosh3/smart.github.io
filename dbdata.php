<?php include('header.html'); ?>
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="loan";
	//create connection
	$conn=new mysqli($servername,$username,$password,$dbname);
	//Check connection
	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);

	}
	 $sql = "SELECT * FROM loan_details";
?>

<!DOCTYPE html>
<html>
<head>
	<title >User List</title>
	<style type="text/css">
	body
	{
		background-color: #ffcccc;
		font-family: kalpurush;
	}
	th
	{
		text-align: center;
		font-size: 15pt;
		font-style: italic;
		padding-left: 15pt;
		padding-right: 15px;
		width: 5%;
		padding-top: 70px;
		padding-bottom: 40px;
	}
	td
	{
		text-align: center;
		font-size: 20pt;
		padding: 15px;
	}
	</style>
</head>
<body>
	<table style="width: 100%">
		<tr>
			<th>Serial No</th>
			<th>Loan Scheme</th>
			<th>Total Project Cost</th>
			<th>Loan Amount Required</th>
			<th>Applicant Name</th>
			<th>Name of the Organisation</th>
			<th>Address</th>
			<th>State</th>
			<th>District</th>
			<th>Block</th>
			<th>Phone No.</th>
			<th>Fax No.</th>
			<th>Nearest Railway</th>
			<th>Registration No of the Organisation</th>
			<th>Date of Registration</th>
			<th>Date of Renewal</th>
			<th>Unique ID generated at NGO Darpan portal</th>
			<th>Unique code generated at PFMS portal</th>
			<th>Area of Operation </th>
			<th>Name of the Bank of Organisation</th>
			<th>Account No.</th>

		</tr>
		<?php if($result=$conn->query($sql)){
				while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['SerialNo']."&nbsp" ?></td>
			<td><?php echo $row['Loan_scheme']."&nbsp"?></td>
			<td><?php echo $row['Total_cost']?></td>
			<td><?php echo $row['Loan_amount']?></td>
			<td><?php echo $row['Name_of_applicant']?></td>
			<td><?php echo $row['Name_of_organization']?></td>
			<td><?php echo $row['Address']?></td>
			<td><?php echo $row['State']?></td>
			<td><?php echo $row['District']?></td>
			<td><?php echo $row['Block']?></td>
			<td><?php echo $row['Phn_No']?></td>
			<td><?php echo $row['Fax_No']?></td>
			<td><?php echo $row['Rail_Station']?></td>
			<td><?php echo $row['Reg_no']?></td>
			<td><?php echo $row['Date_of_Reg']?></td>
			<td><?php echo $row['Date_of_renewal']?></td>
			<td><?php echo $row['Unique_id']?></td>
			<td><?php echo $row['Unique_code']?></td>
			<td><?php echo $row['Area_of_operation']?></td>
			<td><?php echo $row['Bank']?></td>
			<td><?php echo $row['Account_No']?></td>
		</tr>
		<?php }}?>
	</table><br><br>
	<center >
		
		
		<button onclick="goBack()">GO BACK</button></center>

	<script>
	function goBack() {
	  window.history.back();
	}
	</script>
</body><footer>
		&COPY:2020 by  TINT STUDENTS
	</footer>
</html>
<?php   ?>