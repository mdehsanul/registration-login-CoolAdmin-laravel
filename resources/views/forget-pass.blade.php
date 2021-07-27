@extends('header')
@section('title', 'Forget-Password')
@section('content')

    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h3>Reset your Password</h3>
                        </div>
                        <div class="login-form">
                            <form action="" method="" id="forget-pass">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" id="email" name="email"
                                        placeholder="Email">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    try to login again?
                                    <a href="login">Sign In</a>
                                </p>
                            </div>
                            <div class="register-link">
                                <p>
                                    want to register an account?
                                    <a href="register">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    {{-- jQuery-validate --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    <script>
        $(document).ready(function() {
            $("#forget-pass").validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    }
                },
                messages: {
                    email: {
                        required: "Enter your Email",
                        email: "Please enter a valid email address",
                    }
                },
            });
        });
    </script>
@endsection
