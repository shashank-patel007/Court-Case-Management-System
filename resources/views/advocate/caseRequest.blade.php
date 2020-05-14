<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Requests</title>
      <link rel="stylesheet" type="text/css" href="css/viewOurLawyers.css">
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

</br>
<h3>Below are the pending case requests: </h3>

@foreach($cases as $case)
<div class="row dashboard-cards" style="padding-top: 0%;">
    <!-- Advocate id enter here -->
    <div class='card col-md-10' id="advocate1">
        <div class='card-title'>
          <h2>
             {{$case->case_name}}:
            <small>Type Of Case: {{$case->case_type}}</small>
          </h2>

        </div>
        <div class='card-flap flap1'>
          <div class='card-description'>
            <ul class='task-list'>
              <li>
                Client Name: <span>{{$case->client_name}}</span>
              </li>
              <li>
                Description: <span> {{$case->case_details}}</span>
              </li>
              <li>
                Court: <span>High Court</span>
              </li>
              {{-- <li>
                <form method="put" action='{{action('CaseStatus@update',$case->case_id)}}' class="was-validated">
                  {{csrf_field()}}
                  {{ method_field('PUT') }}
                  <div class="row">
                  <input type='hidden' name='_status' value='PUT'>
                      <div class="col-md-6">
                        <button class="btn-block btn-success" type='submit' name='submit' value='ACCEPT'>ACCEPT</button>
                      </div>
                      <div class="col-md-6">
                        <button class="btn-block btn-danger" type='submit' name='submit' value='REJECT'>REJECT</button>
                      </div>
                  </div>
                  </form>
              </li> --}}
            </ul>
          </div>
          <div class='card-flap flap2'>
            <div class='card-actions'>
              <a class='btn' href='#'>Close</a>
            </div>
          </div>
        </div>
      </div>
      <form method="post" action='/caseStatus/{{$case->case_id}}' class="was-validated">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <input type='hidden' name='_status' value='PUT'>
         <div class="row" style="margin-left: 25px;">
            <div class="col-md-6">
              <button class="btn-block btn-success" type='submit' name='submit' value='ACCEPT'>ACCEPT</button>
            </div>
            <div class="col-md-6">
              <button class="btn-block btn-danger" type='submit' name='submit' value='REJECT'>REJECT</button>
            </div>
        </div>
        </form>
</div>
@endforeach
{{-- <form method="post" action='/caseStatus/{{$case->case_id}}' class="was-validated">
  {{csrf_field()}}
  {{ method_field('PUT') }}
  <input type='hidden' name='_status' value='PUT'>
   <div class="row">
      <div class="col-md-6">
        <button class="btn-block btn-success" type='submit' name='submit' value='ACCEPT'>ACCEPT</button>
      </div>
      <div class="col-md-6">
        <button class="btn-block btn-danger" type='submit' name='submit' value='REJECT'>REJECT</button>
      </div>
  </div>
  </form> --}}

<script type="text/javascript" src="js/lawyers.js"></script>


</body>
</html>
