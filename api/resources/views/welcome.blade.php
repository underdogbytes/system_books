<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Booklist, enjoy it :)">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Beatriz Lima">

        <title>Booklist</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet">


        <!-- animation: aos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        <!-- AUTH -->
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <!-- OLD STUFF -->
        <div>
            <!-- navbar -->
            <div class="nav">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>Welcome!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header -->
            <header>
                <p class="title--main" data-aos="fade-right" data-aos-duration="900" data-aos-easing="ease-in-sine">My 2021 booklist</p>
            </header>

            <!-- about the project -->
            <div class="container pt-5">
                <div class="row">
                    <div class="col-12">
                        <p class="about-the-project__title">About the project</p>
                    </div>
                    <div class="col-12">
                        <p>In quis neque, tempor, pellentesque. Tortor ac enim, arcu vitae vitae, sed. Eleifend eget odio lectus nulla vitae. Sapien leo praesent fringilla suspendisse interdum. Sagittis, id duis enim auctor euismod velit pretium. Cras neque lectus vulputate cursus magna. Felis risus viverra natoque ipsum tincidunt ultrices pharetra. Amet nisl orci convallis varius. Justo pellentesque a senectus ultricies. Dolor, laoreet nibh iaculis proin gravida odio sit tortor purus. Pellentesque aliquam aliquet sit a morbi. Rutrum urna tortor, mus arcu aliquet orci nec viverra tincidunt. Ornare amet, nam rutrum penatibus purus augue laoreet neque. Pulvinar viverra eget tristique magna phasellus erat quis.</p>
                    </div>
                </div>
            </div>

            <!-- cards -->
            <div class="container pt-5">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card mt-3 mb-3 mt-md-0 mb-md-0" onclick="filterSelection('read')">
                            <div class="card-body">
                                <p class="card__title">Read</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card mt-3 mb-3 mt-md-0 mb-md-0" onclick="filterSelection('reading')">
                            <div class="card-body">
                                <p class="card__title">Reading</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card mt-3 mb-3 mt-md-0 mb-md-0" onclick="filterSelection('will-read')">
                            <div class="card-body">
                                <p class="card__title">I will read</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- books -->
            <div class="container pt-5 pb-5">
                <div class="row d-flex justify-content-around p-3 p-md-0">
                    <div class="col-12 col-md-2 m-3 duotone-card__filter duotone-card__img filterDiv-read" style="background-image: url('{{asset('img/the-subtle-art-of-not-giving-a-fuck.jpg')}}')">
                        <div class="duotone-card__content">
                            <p class="m-0">The subtle art of not giving a fuck</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 m-3 duotone-card__filter duotone-card__img filterDiv-reading" style="background-image: url('{{asset('img/the-hound-of-the-baskervillers.jpg')}}')">
                        <div class="duotone-card__content">
                            <p class="m-0">Hound of the Baskervilles</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <footer class="pt-3 pb-2">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12">
                            <p>My Book List 2021</p>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="{{ URL::asset('js/index.js') }}"></script>

            <!-- animation: aos -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
        </div>
    </body>
</html>
