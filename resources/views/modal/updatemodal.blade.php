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
                        <input class="au-input au-input--full" type="password" id="new_password" name="new_password"
                            placeholder="Password" value="{{ $loginUserdata['password'] }}">
                    </div>
                    <div class="form-group">
                        <label class="fw-bolder">Confirm Password</label>
                        <input class="au-input au-input--full" type="password" id="new_cpassword" name="new_cpassword"
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


{{-- jQuery-validate --}}
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>

{{-- multi-step form --}}
<script>
    $(document).ready(function() {
        $("#update-form").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 2,
                },
                telephone: {
                    required: true,
                    telephone: true,
                },
                new_password: {
                    required: true,
                    minlength: 5,
                },
                new_cpassword: {
                    required: true,
                    minlength: 5,
                    equalTo: "#new_cpassword",
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
                new_password: {
                    required: "Please enter your password",
                    minlength: "Your password must consists of at least 5 character",
                },
                new_cpassword: {
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
                        password: $('#new_password').val(),
                        cpassword: $('#new_cpassword').val(),
                        image: $('#image').val(),
                    },
                    success: function(dataResult) {
                        dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode) {
                            window.location = "/update";
                        } else {
                            alert("Internal Server Error");
                        }
                    }
                });
        });
    });
</script>
