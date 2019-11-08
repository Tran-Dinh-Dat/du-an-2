<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
        integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- stick -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-1.8.1/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-1.8.1/slick/slick-theme.css')}}">
</head>

<body>
    @include('frontend.common.header')
    @yield('content')
    @include('frontend.common.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{asset('frontend/slick-1.8.1/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(".menu").slick({
            dots: false,
            infinite: true,
            centerMode: true,
            slidesToShow: 5,
            slidesToScroll: 3,
            autoplay: true,
            infinite: true,
            pauseOnHover: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3.5,
                        slidesToScroll: 5,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3.4,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1.4,
                        slidesToScroll: 1,
                    }
                }]

        });
        $(".product").slick({
            dots: false,
            infinite: true,
            centerMode: true,
            slidesToShow: 5,
            slidesToScroll: 3,
            autoplay: true,
            infinite: true,
            pauseOnHover: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 5,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1.2,
                        slidesToScroll: 1,
                    }
                }]
        });
    </script>
</body>

</html>