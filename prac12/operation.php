<html>
<head>
<style>
body {
border: 8px solid gray; padding: 8px;
text-align: justify;
font-family: 'Source Sans Pro'
}
h1 {
text-align: center;
text-transform: uppercase; color: darkblue
}
h3{
text-align: center;
text-transform: uppercase; color: darkgreen
}

#info {
font-family: Arial, Helvetica, sans-serif; border-collapse: collapse;
width: 60%;
text-align: center;
}

#info td, #info th {
border: 2px solid #000099; padding: 20px;
}
#info tr:nth-child(even){background-color: #f2f2f2;} #info tr:hover {background-color: #ddd;}
</style>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$conn = new mysqli($servername, $username, $password, $dbname); if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error ."<br>");
}
echo "Connected successfully<br><br>"; if(isset($_POST["insertSubmit"]))
{
$name = $_POST['name'];
$enroll = $_POST['enroll'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$email = $_POST['email'];
$sql = "INSERT INTO student (name, enroll, address, phone, gender, department, email)
VALUES
('$name','$enroll','$address','$phone','$gender','$department','$email')";

if ($conn->query($sql) === TRUE)
{
echo "New record created successfully";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
}



$query = "SELECT * FROM student";

echo '<table border="1" cellspacing="2" cellpadding="2" id="info">
<tr>
<th> <font face="Arial">Name</font> </th>
<th> <font face="Arial">Enroll</font> </th>
<th> <font face="Arial">Address</font> </th>
<th> <font face="Arial">Phone</font> </th>
<th> <font face="Arial">Gender</font> </th>
<th> <font face="Arial">Department</font> </th>
<th> <font face="Arial">Email</font> </th>
</tr>';

if ($result = $conn->query($query)) {
while ($row = $result->fetch_assoc()) {
$field1 = $row["name"];
$field2 = $row["enroll"];
$field3 = $row["address"];
$field4 = $row["phone"];
$field5 = $row["gender"];
$field6 = $row["department"];
$field7 = $row["email"];

echo '<tr>
<td>'.$field1.'</td>
<td>'.$field2.'</td>
<td>'.$field3.'</td>
<td>'.$field4.'</td>
<td>'.$field5.'</td>
<td>'.$field6.'</td>
<td>'.$field7.'</td>
</tr>';
}
}
$result->free();
$conn->close();
?>
</body>
</html>