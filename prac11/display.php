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

<h1>Welcome</h1>
<h3><?php echo $_POST["firstname"];print " ";echo $_POST["lastname"];
?></h3>
<br><br>
<table align=center id=info>
<tr>
<td>Email Address
<td><?php echo $_POST["email"]; ?>
 </tr>
<tr>
<td>Mobile No.
<td><?php echo $_POST["Mobile_Number"]; ?>
</tr>
<tr>
<td>Gender
<td><?php echo $_POST["sex"]; ?>
</tr>
<tr>
<td>Residential Address
<td><?php echo $_POST["Address"]; ?>
</tr>
<tr>
<td>Skills
<td><?php echo $_POST["language"]; ?>
</tr>
<tr>
<td>Branch
<td><?php echo $_POST["Branch"]; ?>
</tr>
</table>
</body>
</html>

 
