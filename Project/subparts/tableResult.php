<?php
include '../process.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<style>
		body{
			background-color: #826d6d;
			color: white;
			font-family: arial
		}
		table{
			width: 800px;
			margin: auto;
			text-align: center;
			background-color:#114357;
			box-shadow:10px 15px 30px 10px rgba(0,0,0,0.6);
		}
		table, tr, th, td{
			padding: 8px;
			border:1px solid #080808;
			border-collapse: collapse;
		}
		th{
			transition: 0.5s;
		}
		td{
			transition: 0.5s;
		}
		th:hover{
			transition: 0.5s;
			background:#41f4f4;
			color: black;
			transform: scale(1.1);
			box-shadow:10px 10px 30px 10px rgba(0,0,0,0.6);
		}
		td:hover{
			background:#ffbd44;
			transition: 0.5s;
			color: black;
			transform: scale(1.1);
			box-shadow:10px 10px 30px 10px rgba(0,0,0,0.6);
		}
		/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
	</style>
</head>
<body>
<h2><p align="center" >Result</p></h2>
<table align="center">
	<tr>
		<th>SNo.</th>
		<th>Course No.</th>
		<th>GPA</th>
		<th>Semester</th>
	</tr>
	<tr>
	<th>1.</th>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<th>2.</th>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<th>3.</th>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<th>4.</th>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<th>5.</th>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>
</body>
</html>