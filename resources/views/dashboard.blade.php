@extends('header')
@section('title', 'dashboard')
@section('content')
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard">
                            <h4>User Dashboard</h4>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="logout">
                                <i class="zmdi zmdi-power"></i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a class="mx-4" href="dashboard">
                    <h4>User Dashboard</h4>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="logout">
                                <i class="zmdi zmdi-power"></i>Logout
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('user_images/' . $loginUserdata->avatar) }}">
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ $loginUserdata->username }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('user_images/' . $loginUserdata->avatar) }}">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ $loginUserdata->username }}</a>
                                                    </h5>
                                                    <span class="email">{{ $loginUserdata->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h2 class="title-2 m-b-35 text-center">data table</h2>
                                <h3 class="title-5 m-b-10">personal information</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table  table-data3">
                                        <thead>
                                            <tr>
                                                <th>avatar</th>
                                                <th>name</th>
                                                <th>phone number</th>
                                                <th>email</th>
                                                <th>password</th>
                                                <th>date</th>
                                                <th>status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td><img src="{{ asset('user_images/' . $loginUserdata->avatar) }}"
                                                        style="height: 151px; width: 150px;">
                                                </td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    {{ $loginUserdata->username }}</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    {{ $loginUserdata->phone_number }}</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <span class="block-email">{{ $loginUserdata->email }}</span>
                                                </td>
                                                <td class="desc" style="text-align: center; vertical-align: middle;">
                                                    {{ $loginUserdata->password }}</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    {{ $loginUserdata->created_at }}</td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <span class="status--process">Login</span>
                                                </td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <div class="table-data-feature">
                                                        <a href={{ 'updateform/' . $loginUserdata->id }} class="item "
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal1"
                                                            data-toggle="tooltip" data-placement="top" title="Update">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        {{-- <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button> --}}
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <h3 class="title-5 m-b-10">academic qualification</h3>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>degree</th>
                                                <th>subject/mejor</th>
                                                <th>Institution(university/college/school)</th>
                                                <th>Passing year</th>
                                                <th>result</th>
                                                <th>out of</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td>$999.00</td>
                                                <td class="process">Processed</td>
                                                <td>$999.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                                <!-- Modal Button -->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="au-btn au-btn-icon au-btn--blue" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal2">
                                        <i class="zmdi zmdi-plus"></i>add educational information</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for update -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Update your Information</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- update using ajax --}}
                    <form action="{{ route('update') }}" method="post" enctype="multipart/form-data" id="update-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ $loginUserdata['id'] }}">
                        <div class="form-group">
                            <label class="fw-bolder">Username</label>
                            <input class="au-input au-input--full" type="text" id="username" name="username"
                                placeholder="Username" value="{{ $loginUserdata['username'] }}">
                        </div>
                        <div class="form-group">
                            <label class="fw-bolder">Phone Number</label>
                            <input class="au-input au-input--full" type="tel" id="telephone" name="telephone"
                                placeholder="Phone Number" value="{{ $loginUserdata['phone_number'] }}">
                        </div>
                        <div class="form-group">
                            <label class="fw-bolder">Password</label>
                            <input class="au-input au-input--full" type="password" id="password" name="password"
                                placeholder="Password" value="{{ $loginUserdata['password'] }}">
                        </div>
                        <div class="form-group">
                            <label class="fw-bolder">Confirm Password</label>
                            <input class="au-input au-input--full" type="password" id="cpassword" name="cpassword"
                                placeholder="Confirm Password" value="{{ $loginUserdata['confirm_password'] }}">
                        </div>
                        <div class="form-group">
                            <label class="fw-bolder">Avatar</label>
                            <input class="au-input au-input--full" type="file" id="image" name="image" placeholder="image"
                                value="{{ $loginUserdata['avatar'] }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn au-btn--green text-white" id="update_data">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal for update End --}}

    <!-- Modal for Education Start -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Education</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="example-basic">
                        <form id="example-advanced-form" action="#">
                            {{-- action="{{ route('update-success') }}" method="post" --}}
                            {{-- University --}}
                            <section>
                                <div class="form-group">
                                    <label class="fw-bolder">Degree</label>
                                    <select class="au-input au-input--full" name="degree" id="degree" style="height: 45px">
                                        <option value="" selected disabled>-- Choose here --</option>
                                        <option value="M.Sc(Master in Science)">M.Sc(Master in Science)</option>
                                        <option value="B.Sc(Bechalor in Science)">B.Sc(Bechalor in Science)</option>
                                        <option value="Honours">Honours</option>
                                        <option value="HSC(Higher School Certificate)">HSC(Higher School Certificate)
                                        </option>
                                        <option value="SSC(Secondary School Certificate)">SSC(Secondary School Certificate)
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="fw-bolder">Subject/Mejor</label>
                                    <select class="au-input au-input--full" id="subject" name="subject"
                                        style="height: 45px">
                                        <option value="" selected disabled>-- Choose here --</option>
                                        <option value="CSE(Computer Science and Engineering)">CSE(Computer Science and
                                            Engineering)</option>
                                        <option value="EEE(Electrical and Electronics Engineering)">EEE(Electrical and
                                            Electronics Engineering)</option>
                                        <option value="ECE(Electronics and Computer Engineering)">ECE(Electronics and
                                            Computer Engineering)
                                        </option>
                                        <option value="CE(Civil Engineering)">CE(Civil Engineering)</option>
                                        <option value="ME(Mechanical Engineering)">ME(Mechanical Engineering)</option>
                                        <option value="Business Administration">Business Administration</option>
                                        </option>
                                        <option value="English">English</option>
                                        <option value="Science">Science</option>
                                        <option value="Commerce">Commerce</option>
                                        <option value="Arts">Arts</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="fw-bolder">Institution(university/college/school)</label>
                                    <input class="au-input au-input--full" type="text" id="institute" name="instute">
                                </div>
                                <div class="form-group">
                                    <label class="fw-bolder">Passing year</label>
                                    <input class="au-input au-input--full" type="date" id="year" name="year">
                                </div>
                                <div class="form-group">
                                    <label class="fw-bolder">Result</label>
                                    <input class="au-input au-input--full" type="number" id="result" name="result">
                                </div>
                                <div class="form-group">
                                    <label class="fw-bolder">Out Of</label>
                                    <select class="au-input au-input--full" id="out_of" name="out_of" style="height: 45px">
                                        <option value="" selected disabled>-- Choose here --</option>
                                        <option value="4.00">4.00</option>
                                        <option value="5.00">5.00</option>
                                    </select>
                                </div>
                            </section>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn au-btn--green text-white">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal for Education End --}}

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    {{-- jQuery-validate --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    {{-- multi-step form --}}
    <script>
        $(document).ready(function() {
            $("#update-form").validate({
                errorClass: 'errors',
                rules: {
                    username: {
                        required: true,
                        minlength: 2,
                    },
                    telephone: {
                        required: true,
                        telephone: true,
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
    </script>

    {{-- update using ajax --}}
    <script>
        $(document).ready(function() {
            $(document).on("click", "#update_data", function() {
                var url = "{{ URL('update/' . $loginUserdata->id) }}";
                var id =
                    $.ajax({
                        url: url,
                        type: "POST",
                        cache: false,
                        data: {
                            username: $('#username').val(),
                            telephone: $('#telephone').val(),
                            password: $('#password').val(),
                            cpassword: $('#cpassword').val(),
                            image: $('#image').val(),
                        },
                        // success: function(dataResult) {
                        //     dataResult = JSON.parse(dataResult);
                        //     if (dataResult.statusCode) {
                        //         window.location = "/update";
                        //     } else {
                        //         alert("Internal Server Error");
                        //     }

                        // }
                    });
            });
        });
    </script>

    {{-- For Bootstrap Modal --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>

@endsection
