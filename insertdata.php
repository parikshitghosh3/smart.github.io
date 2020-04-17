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
//prepare and bind
$stmt =$conn->prepare("INSERT INTO loan_details(Loan_scheme,Total_cost,Loan_amount,Name_of_applicant,Name_of_organization,Address,State,District,Block,Phn_No,Fax_No,Rail_Station,Reg_no,Date_of_Reg,Date_of_renewal,Unique_id,Unique_code,Area_of_operation,Bank,Account_No) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssssssssssss",$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11,$s12,$s13,$s14,$s15,$s16,$s17,$s18,$s19,$s20);
//set parameters and execute
$s1=$_POST['ls'];
$s2=$_POST['tpc'];
$s3=$_POST['lar'];
$s4=$_POST['na'];
$s5=$_POST['no'];
$s6=$_POST['ad'];
$s7=$_POST['sr'];
$s8=$_POST['dt'];
$s9=$_POST['bk'];
$s10=$_POST['pn'];
$s11=$_POST['fn'];
$s12=$_POST['nrs'];
$s13=$_POST['rto'];
$s14=$_POST['dorn'];
$s15=$_POST['dor'];
$s16=$_POST['uig'];
$s17=$_POST['ucg'];
$s18=$_POST['ao'];
$s19=$_POST['nbo'];
$s20=$_POST['ano'];
#$s21=$_POST['ndc'];
$stmt->execute();
echo "Your Registration is successfully done";
$stmt->close();
$conn->close();
?>