<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.header-authentication')
</head>

<body>
    <main class="authentication-container">
        <section class="side-image-content">
            <img src="{{ asset('assets/img/side-image.jpg') }}" alt="Picture">
        </section>
        <section class="authentication-form-container">
            <form action="{{ route('registerUser') }}" method="GET">
                @csrf
                <h1>Register New Member</h1>
                <input type="text" name="type" value="Member" hidden>
                <div class="field-container">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control"
                        value="{{ !empty(old('fullname')) ? old('fullname') : null }}" placeholder="Enter Full Name" required>
                </div>
                <div class="field-container">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control"
                        value="{{ !empty(old('age')) ? old('age') : null }}" placeholder="Enter Age" required>
                </div>
                <div class="field-container">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control"
                        value="{{ !empty(old('address')) ? old('address') : null }}" placeholder="Enter Address"
                        required>
                </div>
                <div class="field-container">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ !empty(old('email')) ? old('email') : null }}" placeholder="Enter Email Address"
                        required>
                </div>
                <div class="field-container">
                    <label for="contact" class="form-label">Contact Number</label>
                    <input type="text" name="contact" class="form-control"
                        value="{{ !empty(old('contact')) ? old('contact') : null }}" placeholder="Enter Contact Number"
                        required>
                </div>
                <div class="field-container">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <div class="form-link">
                    <a href="{{ route('login.member') }}">Already have account? Login here</a>
                </div>
                <div class="authentication-button-container">
                    <a href="{{ route('home') }}" class="btn-danger">Back</a>
                    <button type="submit" class="btn-success" onclick="return confirm('Are you sure to register this information?')">Register</button>
                </div>
            </form>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @include('partials.toastr-script')
</body>

</html>
