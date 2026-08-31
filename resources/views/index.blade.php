<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#0A0C18] text-white">
    <x-navbar></x-navbar>
    <main>
        <x-home></x-home>
        <!-- <x-skills></x-skills> -->
        <x-experience></x-experience>
        <x-projects></x-projects>
        <x-career></x-career>
    </main>
    <x-footer></x-footer>
</body>
</html>