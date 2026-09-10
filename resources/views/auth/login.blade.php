<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-[#0A0C18] min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-sm">
        <h1 class="text-2xl font-bold text-white text-center mb-8">Login Admin</h1>

        @if($errors->any())
            <div class="bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded-lg mb-6 text-sm">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm text-gray-400 mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-2">Password</label>
                <input type="password" name="password" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit" class="w-full py-2.5 bg-blue-700 hover:bg-blue-600 rounded-full text-white font-semibold transition-colors">
                Login
            </button>
        </form>
    </div>

</body>
</html>