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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 115 115" class="feature1" width="70px" height="70px">
                    <g>
                        <path id="feature_icon" d="M89.43,34.31s-9.09-9.61-15.35-4.22,1.22,13,2.49,14.32S88,53.47,92.79,47.49,89.43,34.31,89.43,34.31Z"/>
                        <path id="feature_icon" d="M74.11,46.64c-1.13-1.17-6.35-6.5-6-11.83L68,34.67,50.66,52.47l-5,23.1,22.77-5.64L85.51,52.82C80.32,51.71,75.08,47.64,74.11,46.64ZM53.17,71.14a2.37,2.37,0,0,0-1-2.13,6.48,6.48,0,0,0-2.27-1.22l1.93-8.83a47.47,47.47,0,0,0,4.64,5.66,52.79,52.79,0,0,0,5.41,4.08Z"/>
                        <path id="feature_icon" d="M77.57,87.94H29.73V44.45l17.4-17.4H68.87l-3.81,5.44H51.7A3.49,3.49,0,0,0,48.21,36V46.63H37.54a3.47,3.47,0,0,0-3.47,3.47V82.51H72.13V72.72l5.44-5.41Z"/>
                        <rect id="feature_icon2" x="2" y="2" width="111" height="111" rx="8.75" ry="8.75"/>
                    </g>
                </svg>
                <h1 class="text">Grafisch ontwerp</h1>
            </div>

            <div class="features-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 93 80" class="feature1" width="70px" height="70px">
                    <g>
                        <path id="feature_icon" d="M62.32,77.3c-2-2-5.32-4.75-5.32-4.75v-2.7s.86-.85.3-.85H37.16c-.55,0-.16.85-.16.85v2.7s-3.08,2.75-5.08,4.75-.17,2.7-.17,2.7h31S64.32,79.31,62.32,77.3Z"/>
                        <path id="feature_icon" d="M93,3.82A3.82,3.82,0,0,0,89.18,0H3.82A3.82,3.82,0,0,0,0,3.82V62.18A3.82,3.82,0,0,0,3.82,66H89.18A3.82,3.82,0,0,0,93,62.18ZM89,54H5V5H89Z"/>
                    </g>
                </svg>
                <h1 class="text">Webdesign</h1>
            </div>

            <div class="features-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 111 111" class="feature1" width="70px" height="70px">
                    <g>
                        <path id="feature_icon" d="M111,6.49A6.49,6.49,0,0,0,104.51,0h-98A6.49,6.49,0,0,0,0,6.49v98A6.49,6.49,0,0,0,6.49,111h98a6.49,6.49,0,0,0,6.49-6.49ZM94,35H85.27a9.53,9.53,0,0,0-5.78,2.95A7.65,7.65,0,0,0,77,43.75V53H94.22L91,70H77v41H59V70H45V53H59.44V40.56s-.58-6.75,4.28-14.46C69.26,17.31,79.08,17,79.08,17H94Z"/>
                    </g>
                </svg>
                <h1 class="text">Social media</h1>
            </div>
        </div>
    </section>

   @include('layouts.portfolio')
</body>
</html>