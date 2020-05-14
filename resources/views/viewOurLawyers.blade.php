<!DOCTYPE html>
<html>
<head>
	<title>Lawyers</title>

	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="/css/viewOurLawyers.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<br>
	<h3>View Our List of Lawyers Below:</h3>

  <form action="/viewOurLawyers" method="POST" name="search_form" style="margin-left:11%;margin-top:4%;">

  @csrf

    <input type="text" placeholder="Search a lawyer" name="search" id="search" size="60" class="my-input">
     <span><button type="Submit" name="submit" value="name" class="my-btn">Search by Name</button></span>
     <span><button type="Submit" name="submit" value="expertise" class="my-btn">Search by Expertise</button></span>
  </form>

  <div class="my-div"> <a href="viewOurLawyers" class="my-a" >(Show all lawyers)</a></div>

<div class="row dashboard-cards" style="padding-top: 5%; padding-left: 5%;">


  @foreach($results as $result)

  <div class='card col-md-5'>
    <div class='card-title'>
      <h2>
        {{ $result->name }}
        <small>Area of expertise: {{ $result->expertise }} </small>
      </h2>

    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
        <li>
            Qualification: {{$result->qualification }}
          </li>
          <li>
            Experience/Seniority: {{$result->experience }}
          </li>
          <li>
            No. of cases fought: {{$result->cases }}
          </li>
          <li>
            Win percentage: {{$result->win}}
          </li>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>

  @endforeach

</div>



<script type="text/javascript" src="/js/lawyers.js"></script>
</body>
</html>
