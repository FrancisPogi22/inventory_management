<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.header-authentication')
</head>

<body>
    <div class="member-container">
        <div class="left-content">
            <img src="{{ asset('assets/img/applicant-img.jpg') }}" alt="Picture">
        </div>
        <div class="login-member-form">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>Login Member Form</h1>
                <div class="field-container">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ !empty(old('email')) ? old('email') : null }}" placeholder="Enter Email Address"
                        required>
                </div>
                <div class="field-container">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <div class="form-bottom">
                    <a href="{{ route('register.member') }}">Don't have account? Register here</a>
                </div>
                <div class="member-button">
                    <a href="{{ route('home') }}" class="btn-danger">Back</a>
                    <button type="submit" class="btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @include('partials.toastr-script')
</body>

</html>
