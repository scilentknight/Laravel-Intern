<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
<div class="max-w-md mx-auto mt-12 bg-white p-6 rounded shadow">
    <h1 class="text-2xl mb-4 text-center text-black">Register</h1>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-50 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label class="block mb-2">
            <span class="text-gray-700">Name</span>
            <input type="text" name="name" value="{{ old('name') }}" required
                   class="mt-1 block w-full border rounded p-2">
        </label>

        <label class="block mb-2">
            <span class="text-gray-700">Username (optional)</span>
            <input type="text" name="username" value="{{ old('username') }}"
                   class="mt-1 block w-full border rounded p-2">
        </label>

        <label class="block mb-2">
            <span class="text-gray-700">Phone (optional)</span>
            <input type="text" name="phone" value="{{ old('phone') }}"
                   class="mt-1 block w-full border rounded p-2">
        </label>

        <label class="block mb-2">
            <span class="text-gray-700">Email</span>
            <input type="email" name="email" value="{{ old('email') }}" required
                   class="mt-1 block w-full border rounded p-2">
        </label>

        <label class="block mb-2">
            <span class="text-gray-700">Password</span>
            <input type="password" name="password" required
                   class="mt-1 block w-full border rounded p-2">
        </label>

        <label class="block mb-4">
            <span class="text-gray-700">Confirm Password</span>
            <input type="password" name="password_confirmation" required
                   class="mt-1 block w-full border rounded p-2">
        </label>

        <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded">Register</button>
    </form>

    <p class="mt-4 text-sm">
        Already have an account? <a href="{{ route('login') }}" class="text-blue-600">Login</a>
    </p>
</div>
</body>
</html>
