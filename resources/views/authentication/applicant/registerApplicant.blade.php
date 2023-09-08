<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.header-authentication')
</head>

<body>
    <div class="applicant-container">
        <div class="left-content">
            <img src="{{ asset('assets/img/applicant-img.jpg') }}" alt="Picture">
        </div>
        <div class="register-applicant-form">
            <form action="{{ route('registerUser') }}" method="GET">
                @csrf
                <h1>Register New Applicant</h1>
                <div class="field-container">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control"
                        value="{{ !empty(old('fullname')) ? old('fullname') : null }}" placeholder="Enter Full Name" required>
                </div>
                <div class="field-container">
                    <label class="form-label">Age</label>
                    <input type="number" name="age" class="form-control"
                        value="{{ !empty(old('age')) ? old('age') : null }}" placeholder="Enter Age" required>
                </div>
                <div class="field-container">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control"
                        value="{{ !empty(old('address')) ? old('address') : null }}" placeholder="Enter Address"
                        required>
                </div>
                <div class="field-container">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ !empty(old('email')) ? old('email') : null }}" placeholder="Enter Email Address"
                        required>
                </div>
                <div class="field-container">
                    <label class="form-label">Contact Number</label>
                    <input type="text" name="contact" class="form-control"
                        value="{{ !empty(old('contact')) ? old('contact') : null }}" placeholder="Enter Contact Number"
                        required>
                </div>
                <div class="field-container">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <div class="form-bottom">
                    <a href="{{ route('login.applicant') }}">Already have account? Login here</a>
                </div>
                <div class="applicant-button">
                    <button class="btn-danger" onclick="window.location.href = '{{ route('home') }}'">Back</button>
                    <button type="submit" class="btn-success">Register</button>
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
