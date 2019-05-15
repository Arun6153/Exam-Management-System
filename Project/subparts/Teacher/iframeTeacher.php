<!DOCTYPE html>
<html>
<head>
	<title>LOG</title>
	<style>
		body{
			BCAound-color: #826d6d;
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
			background:#42f4bc;
			transition: 0.5s;
			color: black;
			transform: scale(1.1);
			box-shadow:10px 10px 30px 10px rgba(0,0,0,0.6);
		}
		h3{
			color: black;
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
<h3><p align="center">Invigilator Notice</p></h3>
<table align="center">
	<tr>
		<th >Sr.no</th>
		<th >Date</th>
		<th >Timings</th>
		<th colspan="1">Teacher</th>
		<th colspan="1">Room no.</th>
	</tr>
	<tr>
		<td rowspan="2">1</td>
		<td rowspan="2">11.09.2018</td>
		<td>Morning</td>
		<td> 1002</td>
		<td> 206</td>

	</tr>
	<tr>
		<td>Evening</td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
		<td rowspan="2">2</td>
		<td rowspan="2">12.09.2018</td>
		<td>Morning</td>
		<td> 1006</td>
		<td> 307</td>
	</tr>
	<tr>
		<td>Evening</td>
		<td> 1004</td>
		<td> 307</td>
	</tr>
	<tr>
		<td rowspan="2">3</td>
		<td rowspan="2">13.09.2018</td>
		<td>Morning</td>
		<td> 1004</td>
		<td> 206</td>
	</tr>
	<tr>
		<td>Evening</td>
		<td> 1006</td>
		<td> 206</td>
	</tr>
	<tr>
		<td rowspan="2">4</td>
		<td rowspan="2">15.09.2018</td>
		<td>Morning</td>
		<td> 1002</td>
		<td> 307</td>
	</tr>
	<tr>
		<td>Evening</td>
		<td> 1006</td>
		<td> 206</td>
	</tr>
</table>
</body>
</html>