<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/styles.css">

</head>

<body>
  <div class="site-outer">
    <div class="site-inner" id="site">
      <!-- Navigation menu here -->
      <header class="main_h">

        <div class="row1">
          <a class="logo " href="#">P/F</a>

          <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <nav>
            <ul>
              <li>
                <a href=".sec01">Section 01</a>
              </li>
              <li>
                <a href=".sec01">Section 02</a>
              </li>
              <li>
                <a href=".sec01">Section 03</a>
              </li>
              <li>
                <a href=".sec01">Section 04</a>
              </li>
            </ul>
          </nav>

        </div> <!-- / row -->

      </header>

      <div class="container-fluid">
        <div class="row" id="header">
          <div class="hero" style="background-image: url('#');">
            <div class="hero-header">
              <div class="inner">
                <header class="header header-w">
                  <h1 class="h1-w">Title Here</h1>
                </header>
                <section class="strips">
                  <article class="strips__strip">
                    <div class="strip__content">
                      <h1 class="strip__title" data-name="Lorem">Login</h1>
                      <div class="strip__inner-text">
                        <h2>Login</h2><br><br>
                        <div class="container" align="center">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">


                                        <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>

                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: white;">
                                                                Forgot Your Password?
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>

                    </div>
                  </article>
                  <article class="strips__strip">
                    <div class="strip__content">
                      <h1 class="strip__title" data-name="Ipsum">Register</h1>
                      <div class="strip__inner-text">
                        <h2>Register</h2><br><br>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">

                                        <div class="card-body">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                      </div>
                    </div>
                  </article>

                  <i class="fa1 fa-close strip__close"></i>
                </section>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="row">
              <div class="sec01 small-hero small-hero-turqouise">
                <h1 class="text-center">Sub_heading1</h1>
                <h2 class="text-center">Title here</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row padding">
          <div class="col-md-8 col-md-offset-2 col-sm-12">
            <div class="row">
              <div class="col-md-4 col-sm-4 text-center three-p">
                <h1><i class="fa fa-desktop"></i></h1>
                <h2>Name1</h2>
                <p class="text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                  it to make a type specimen
                  book. Bla bla bla bla bla... Lorem Ipsum strategy hello world.
                </p>
                <div class="row">
                  <div class="col-md-12">
                    <button class="button button-transparent-turqouise">Read more <i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 text-center three-p">
                <h1><i class="fa fa-line-chart"></i></h1>
                <h2>Name2</h2>
                <p class="text-left">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                  Hampden-Sydney College in Virginia,
                  looked up one of the more obscure Latin words, consectetur.</p>
                <div class="row">
                  <div class="col-md-12">
                    <button class="button button-transparent-turqouise">Read more <i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 text-center three-p">
                <h1><i class="fa fa-coffee"></i></h1>
                <h2>Name3</h2>
                <p class="text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                  letters, as opposed to using
                  'Content here, content here', making it look like readable English.</p>
                <div class="row">
                  <div class="col-md-12">
                    <button class="button button-transparent-turqouise">Read more <i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="row">
              <div class="small-hero small-hero-turqouise">
                <h1 class="text-center">Sub-Heading 2</h1>
                <h2 class="text-center">Title here</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row padding">
          <div class="col-md-8 col-md-offset-2 col-sm-12">
            <div class="row">
              <div class="col-md-5 col-md-offset-1 col-sm-6 text-center three-p">
                <h1><i class="fa fa-fighter-jet"></i></h1>
                <h2>Name1</h2>
                <p class="text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                  letters, as opposed to using
                  'Content here, content here', making it look like readable English.</p>
                <div class="row">
                  <div class="col-md-12">
                    <button class="button button-turqouise">Read more <i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-6 text-center three-p">
                <h1><i class="fa fa-cogs"></i></h1>
                <h2>Name2</h2>
                <p class="text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                  it to make a type specimen
                  book. Bla bla bla bla bla... Lorem Ipsum strategy hello world.
                </p>
                <div class="row">
                  <div class="col-md-12">
                    <button class="button button-turqouise">Read more <i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <!-- <script src='https://codepen.io/rsvmrk/pen/WQaYwV'></script> -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>
  <script src="../js/jquery.matchHeight.js" charset="utf-8"></script>
  <script src="../js/first-page.js" charset="utf-8"></script>
</body>

</html>
