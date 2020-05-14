<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Cases</title>

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
<h3>Your accepted cases are shown below: </h3>


@foreach($cases as $case)
<div class="row dashboard-cards" style="padding-top: 0%; padding: 0%">
    <!-- Advocate id enter here -->
    <div class='card col-md-10' id="advocate1">
        <div class='card-title'>
          <h2>
             {{$case->case_name}}
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
				Description:
				<span>
          {{$case->case_details}}
				</span>
              </li>
              <li>
                Court: <span>High Court</span>
              </li>
              <li>
                  Previous Hearing Date: <span>{{$case->prev_hearing_date}}</span>
              </li>
              <li>
                  Next Hearing Date: <span>{{$case->next_hearing_date}}</span>
              </li>
              <li>
                  <button class="btn-block btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" >EDIT CASE DETAILS</button>
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
    </div>
 <aside>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title center" id="exampleModalLabel">Edit Case Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action='/updateAdvocate/{{$case->case_id}}' class="was-validated">
                  {{csrf_field()}}
                  <input type='hidden' name='_method' value='PUT'>
                    <div class="form-group">
                      <label >Client Name:</label>
                      <span >{{$case->client_name}}</span>
                    </div>
                    <div class="form-group">
                      <label >Case Name:</label>
                      <span >{{$case->case_name}}</span>
                    </div>
                    <div class="form-group">
                      <label for="description">Description: </label>
                      <textarea name="description" class="form-control"rows="3" required></textarea>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                      <label for="pre-date">Previous Hearing Date:</label>
                      <input type="date" name="pre_date" class="form-control" value={{$case->prev_hearing_date}} required>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                      <label for="next-date">Next Hearing Date:</label>
                      <input type="date" name="next_date" class="form-control" value={{$case->next_hearing_date}} required>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <button class="btn-block btn-light" type="submit" name='submit'>UPDATE</button>
                      </div>
                      <div class="col-sm-6">
                        <button class="btn-block btn-dark"  data-dismiss="modal">CLOSE</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
     </aside>
@endforeach

    <script type="text/javascript" src="js/lawyers.js"></script>
</body>
</html>
