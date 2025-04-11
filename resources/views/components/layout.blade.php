<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Progetto hi tech</title>
</head>
<body>
{{-- navbar --}}
<x-navbar />


{{$slot}}

{{-- footer --}}
<x-footer />

</body>
</html>