<!DOCTYPE html>
<html>
<head>
	<title>Announcements</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="/css/announcements.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
	   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>

  <div class="image-container">
      <img class="image-property" alt="picture" src="{{ URL::asset('/images/law.jpg') }}">

      <div class="text-block" align="center">
        <h4><strong>Advocacy is not our business,
         <br>
        It is our passion!</strong></h4>
      </div>

    </div>

	<br><br>
	<h3 class="header">Notifications: </h3>
<ul>
	@foreach ($cases as $case)
		@php
			$count++;
		@endphp
	  <li>
	    <a>
	      <h2>#{{$count}}</h2>
	      <p>Your case name: {{$case->case_name}}</p>
				<p>
					Has next hearing date: {{$case->next_hearing_date}}
				</p>
      {{-- <button type="button" class="my-btn">Mark as Read</button> --}}
	    </a>
	  </li>
	  <li>
	@endforeach
</body>
</html>
