<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.header-package')
</head>

<body>
    <div class="wrapper">
        @include('components.header')
        <main class="main-section">
            @include('components.sidebar')
            <section>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas iste, eos eveniet at deleniti
                    illum
                    doloribus qui magni esse sit in perferendis magnam possimus praesentium nihil, sunt nam hic, quos
                    officia molestias expedita nulla recusandae incidunt! Aspernatur, at! In consectetur quas voluptas,
                    dolores cupiditate eius inventore error aliquid impedit sequi?</p>
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @include('partials.toastr-script')
</body>

</html>
