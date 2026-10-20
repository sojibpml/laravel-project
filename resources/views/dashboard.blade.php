<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>ড্যাশবোর্ড</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Hind Siliguri', sans-serif; }
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body class="flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-lg w-full text-center">
        <div class="w-24 h-24 mx-auto mb-6 rounded-full flex items-center justify-center text-white text-4xl font-bold"
             style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>
        
        <h1 class="text-3xl font-bold text-gray-800 mb-2">
            স্বাগতম, {{ auth()->user()->name }}! 🎉
        </h1>
        <p class="text-gray-500 mb-8">{{ auth()->user()->email }}</p>

        @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 rounded-lg text-left">
                <p class="text-green-700">{{ session('success') }}</p>
            </div>
        @endif

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" 
                    class="px-8 py-3 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-xl transition-all duration-300 hover:shadow-lg">
                লগআউট করুন
            </button>
        </form>
    </div>
</body>
</html>