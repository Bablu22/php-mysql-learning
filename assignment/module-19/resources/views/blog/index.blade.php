<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Blog Posts</h1>

        <div class="space-y-6">
            @foreach ($blogs as $blog)
                <div class="bg-white rounded-lg shadow-lg flex">
                    <img class="w-1/3 h-48 object-cover object-center rounded-l-lg"
                         src="{{ $blog->image }}"
                         alt="Blog Image">

                    <div class="p-6 flex-1">
                        <h2 class="text-xl font-bold mb-2">{{ $blog->title }}</h2>
                        <p class="text-gray-600 text-sm">{{ $blog->created_at->format('F j, Y') }}</p>
                        <p class="text-gray-800">{{ $blog->content }}</p>
                        <a href="{{ route('show', $blog) }}"
                           class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg transition duration-200">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>

       <div class="mt-4">
        {{ $blogs->links() }}
       </div>
    </div>

</body>
</html>
