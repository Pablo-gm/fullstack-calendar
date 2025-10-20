<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="/resources/css/beer.min.css" />
    <link rel="stylesheet" href="/resources/css/theme.css" />
</head>
<body class="surface-container-low">
    <header>
        <nav>
            <button class="circle transparent" onclick="toggleNav()">
                <i>menu</i>
            </button>
            <h6 class="max center-align">Headline</h6>
            <button class="circle transparent">
                <i>today</i>
            </button>
            <button class="circle transparent">
                <i>more_vert</i>
            </button>
        </nav>
    </header>
    <main>
        <div class="row top-align">
            <div>
                <nav id="main-nav" class="m l max left transparent no-padding">
                    <a>
                        <i>home</i>
                        <span>Install</span>
                    </a>
                    <a>
                        <i>widgets</i>
                        <span>Explore</span>
                    </a>
                </nav>
            </div>
            <div class="max surface-bright square right-margin small-elevate">
                Calendar here
            </div>
        </div>
    </main>

    <script src="/resources/js/site.js"></script>
</body>
</html>