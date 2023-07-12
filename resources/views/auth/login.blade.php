<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <title>IKHLAS RISK ADVISOR</title>
</head>

<body>
    <div class="flex-center">
        <div class="center-form">
            <div class="form-header">
                <center><img src="{{ asset('assets/img/logo.png') }}" width="150" alt=""><center/>
            </div>
            <div class="form-body">
                <h5>Welcome Back!</h5>
               <form method="POST" action="{{ route('login') }}">
                   @csrf
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input id="email" class="sign-inputs" type="email" name="email" :value="old('email')" required placeholder="Email / Username">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input id="password" class="sign-inputs" type="password" name="password" required placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label" for="remember">
                              Remember Me
                            </label>
                          </div>
                        <div>
                            <a class="forget" href="#">Frogot Password?</a>
                        </div>
                    </div>
                    <div class="my-3">
                        <input type="submit" value="Login">
                    </div>
                    <div class="text-center">
                        <!--<p>Already have an account? <a href="registeration.html" class="sign-link">Sign Up</a></p>-->
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
</body>

</html>