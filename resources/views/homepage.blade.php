<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.header-authentication')
</head>

<body>
    <div class="wrapper">
        <section class="login-section">
            <h1>Inventory Management System</h1>
            <div class="login-category">
                <a href="" class="login-widget">
                    <img src="{{ asset('assets/img/new-user.png') }}" alt="Customer">
                    <p>CUSTOMER</p>
                </a>
                <a href="{{ route('login.applicant') }}" class="login-widget">
                    <img src="{{ asset('assets/img/new-user.png') }}" alt="Applicant">
                    <p>APPLICANT</p>
                </a>
                <a href="" class="login-widget">
                    <img src="{{ asset('assets/img/new-user.png') }}" alt="Member">
                    <p>MEMBER</p>
                </a>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @include('partials.toastr-script')
</body>

</html>
