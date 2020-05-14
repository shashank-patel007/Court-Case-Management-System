<!DOCTYPE html>
<html>
<head>
	<title>Case Records</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/css/caseRecords.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet"> 
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>



</head>
<body>

<br><br>
	<h3>Find all your case records below:</h3>

<div class="card-deck case_records">
		
	@foreach($results as $result)
	<div class="card my-card shadow p-4 mb-5 bg-white rounded">
  		<div class="card-body">
    		<h4 class="card-title my-card-title">{{ $result->case_name }}</h4>
    		  <ul class="card-text">

    			<li>Case Id: {{ $result->case_id }}</li>
    			<li>Case Type: {{$result->case_type }}</li>
    			<li>Advocate Name: {{ $result->name }}</li>
    			<li>Case Details: {{ $result->case_details }}</li>
    			<li>Next hearing date: {{ $result->next_hearing_date }}</li>

    		  </ul>
   
 		 </div>
	</div>
	@endforeach
	

</div>




</body>
</html>