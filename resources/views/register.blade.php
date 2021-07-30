@extends('header')
@section('title', 'Register')
@section('content')

    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h3>Register your Account</h3>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('registration-success') }}" method="post" enctype="multipart/form-data"
                                id="registration-form">
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" id="username" name="username"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="au-input au-input--full" type="tel" id="telephone" name="telephone"
                                        placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" id="email" name="email"
                                        placeholder="Email">
                                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" id="password" name="password"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="au-input au-input--full" type="password" id="cpassword" name="cpassword"
                                        placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <input class="au-input au-input--full" type="file" id="image" name="image"
                                        placeholder="image">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="login">Sign In</a>
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
            $("#registration-form").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 2,
                    },
                    telephone: {
                        required: true,
                        telephone: true,
                    },
                    email: {
                        required: true,
                        email: true,
                        uniqueEmail: true
                    },
                    password: {
                        required: true,
                        minlength: 5,
                    },
                    cpassword: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password",
                    },
                    image: {
                        required: true,
                        extension: "jpg|png",
                    },
                },
                messages: {
                    username: {
                        required: "Please enter your name",
                        minlength: "Your name must consists of at least 2 character",
                    },
                    telephone: {
                        required: "Please enter your phone number"
                    },
                    email: {
                        required: "Enter your Email",
                        email: "Please enter a valid email address.",
                    },
                    password: {
                        required: "Please enter your password",
                        minlength: "Your password must consists of at least 5 character",
                    },
                    cpassword: {
                        required: "Enter the password again",
                        minlength: "Your password must consists of at least 5 character",
                        equalTo: "Please enter the same password again",
                    },
                },
            });
        });

        jQuery.validator.addMethod(
            "telephone",
            function(value, element) {
                return (
                    this.optional(element) ||
                    /^(?:\+?88|0088)?01[15-9]\d{8}$/.test(value)
                );
            },
            "Please enter a valid 11 digit phone number"
        );

        jQuery.validator.addMethod('uniqueEmail', function(value) {
            var currentEmails = 'an array from somewhere with emails lower cased';
            //NOTE: this check is case sensitive, so making sure lower case both values being compared
            return $.inArray(value.toLowerCase(), currentEmails) === -1;
        }, 'Email has already been added.')
    </script>

@endsection
