<!DOCTYPE html>
<html>
<head>
	<title>Post Report</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body class="content">

	<table class="table table-hover">
    <thead>
        <tr>
            <th>Nama</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        @forelse($contacts as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->message }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>