<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('project_94/css/login.css') }}">
    <title>Document</title>
</head>
<body>
        <section class="wrapper">
                <div class="content">
                  <header>
                    <h1>Welcome back </h1>
                  </header>
                  <section>
                     <div class="test" style="color:red;">
                       @if(isset($errors) && $errors->count() >0)
                        <div class="error">
                            <p class="help-block">{{  $errors->first() }}</p>
                        </div>
                        @endif
                        <p> {!! Request::session()->get('session') !!}</p>
                      </div> 
                   {!! Form::open(['route'=>'login','class'=>'login-form']) !!}
                      <div class="input-group">
                        <label for="username">Username or Email</label>
                        {{ Form::text('email',null,['placeholder'=>'Please Enter Your Email','id'=>'username']) }}
                      </div>
                      <div class="input-group">
                        <label for="password">Password</label>
                        {{  Form::password('password',null,['placeholder'=>'Please Enter Your Password','id'=>'password']) }}
                      </div>
                      <div class="input-group"><button class="button">Login</button></div>
                    {{ Form::close() }}
                  </section>
                  <footer>
                    <a href="forgetpass.html" title="Forgot Password">Forgot Password?</a>
                  </footer>
                </div>
              </section>
              
              
    
</body>
</html>