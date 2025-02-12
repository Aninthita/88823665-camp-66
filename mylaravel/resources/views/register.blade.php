@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register') }}" method="post" onsubmit="return myfunction();">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" />
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                        </div>
                        <span id="invalid-name" class="text-danger"></span> <!-- Element for error -->
                        
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        </div>
                        <span id="invalid-email" class="text-danger"></span> <!-- Element for error -->
                        
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="pass" class="form-control" placeholder="Password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>
                        <span id="invalid-pass" class="text-danger"></span> <!-- Element for error -->
                        
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" id="mycheckbox" name="terms" type="checkbox" value="1" />
                                    <label class="form-check-label" for="mycheckbox">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                    </form>
                    <!-- /.social-auth-links -->
                    <p class="mb-0">
                        <a href="{{ url('/login') }}" class="text-center"> I already have a membership </a>
                    </p>
                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function myfunction() {
        let name = $('#name');
        let email = $('#email');
        let password = $('#pass');
        let mycheckbox = $('#mycheckbox');
        
        let isValid = true;
        
        if (name.val().trim() === "") {
            $('#name').addClass('is-invalid');
            $('#invalid-name').html("<b><u>Please enter your name</u></b>");
            isValid = false;
        } else {
            $('#name').removeClass('is-invalid');
            $('#invalid-name').html("");
        }
        
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email.val())) {
            $('#email').addClass('is-invalid');
            $('#invalid-email').html("<b><u>Please enter a valid email</u></b>");
            isValid = false;
        } else {
            $('#email').removeClass('is-invalid');
            $('#invalid-email').html("");
        }
        
        let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]+$/;
        if (!passwordPattern.test(password.val())) {
            $('#pass').addClass('is-invalid');
            $('#invalid-pass').html("<b><u>Password must contain a-z, A-Z, and 0-9</u></b>");
            isValid = false;
        } else {
            $('#pass').removeClass('is-invalid');
            $('#invalid-pass').html("");
        }
        
        if (!mycheckbox.prop('checked')) {
            alert('Please accept the terms');
            isValid = false;
        }
        
        return isValid;
    }
</script>
@endsection
