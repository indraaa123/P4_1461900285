<html>
<head>
	<title>Data Buku</title>
</head>
<body>
 
	<h3>Data Buku</h3>
 
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Judul</th>
			<th>Tahun Terbit</th>
	
        @php
			$no= 1;
		@endphp	

		@foreach($data_buku as $b)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $b['id'] }}</td>
			<td>{{ $b['judul'] }}</td>
			<td>{{ $b['tahun_terbit'] }}</td>
			
			
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>