<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="/css/clientProfile.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>

<table class=" table table-borderless my-table ">
	<thead>
		<tr><th class="personal-details">Personal Details:</th></tr>
	</thead>
	<tr>
		<th>Contact No:</th>
		<th>{{auth()->user()->number}}</th>
	</tr>

	<tr>
		<th>Email Address:</th>
	    <th>{{auth()->user()->email}}</th>
	</tr>

	<tr>
		<th>Address:</th>
		<th>{{auth()->user()->address}}</th>
	</tr>

	<thead>
		<tr><th class="personal-details">Overview:</th></tr>
	</thead>

	<tr>
		<th>No. of cases registered in total:</th>
		<th>2</th>
	</tr>

	<tr>
		<th>No. of cases currently on trial:</th>
		<th>1</th>
	</tr>

</table>

</body>
</html>