<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Image Upload - Docker & PVC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-800">Laravel Image Upload</h2>

        @if (session('success'))
            <div class="px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="px-4 py-3 mb-4 text-red-700 bg-red-100 border border-red-400 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700">Select Image</label>
                <input type="file" name="image"
                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>
            <button type="submit"
                class="w-full px-4 py-2 font-bold text-white transition duration-200 bg-blue-600 rounded-md hover:bg-blue-700">
                Upload Image
            </button>
        </form>

        @if (session('uploaded_image'))
            <div class="mt-6 text-center">
                <p class="mb-2 text-sm text-gray-600">Uploaded Image Preview:</p>
                <img src="{{ asset('storage/' . session('uploaded_image')) }}" alt="Uploaded Image"
                    class="mx-auto rounded-lg shadow max-h-48">
            </div>
        @endif
    </div>
</body>

</html>
