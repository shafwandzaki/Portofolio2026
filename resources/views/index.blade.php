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
        <x-home :home="$home"/>
        <x-skills :skills="$skills"/>
        <x-experience :experiences="$experiences"/>
        <x-projects :projects="$projects"/>
        <x-career :careers="$careers"/>
    </main>
    <x-footer></x-footer>
</body>
</html>