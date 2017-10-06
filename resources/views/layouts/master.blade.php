<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meilink Design</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset("/resources/assets/css/layout.css") }}">

    <!-- Ubuntu font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700" rel="stylesheet">
</head>

<body>
    @include('layouts.nav')

    <section class="hero">
        <h1 class="hero-title">Meilink Design</h1>
    </section>

    <section class="features">
        <div class="features-group">
            <div class="features-item">
                <h1 class="text">Grafisch ontwerp</h1>
            </div>
            <div class="features-item">
                <h1 class="text">Webdesign</h1>
            </div>
            <div class="features-item">
                <h1 class="text">Social media</h1>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="portfolio-group">
            <div class="portfolio-group-left">
                <p class="portfolio-text">
                    <img src="{{ URL::asset("/resources/meilinkdesign_logo_text.svg") }}" width="150px">
                </p>
            </div>
            <div class="portfolio-group-right">
                <h2>Portfolio</h2>
                <p class="portfolio-text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                </p>
            </div>
        </div>
    </section>
</body>
</html>