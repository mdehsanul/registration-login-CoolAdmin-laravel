@extends('header')
@section('title', 'Reset Password')
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
                            <form action="{{ route('reset.password.post') }}" method="post" id="reset-passwords">
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
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
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
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
            $("#reset-passwords").validate({
                rules: {
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
    </script>

@endsection
