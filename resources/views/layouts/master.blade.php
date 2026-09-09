<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APIIT</title>
    <!------Expects a stylesheet or link to tailwind.css file to be included here------>
</head>
<body>
    <x-navbar />
    <main>
        <!---Content will be injected here from the child views--->
        @yield('content')
</main>
</body>

<x-footer />

</html>