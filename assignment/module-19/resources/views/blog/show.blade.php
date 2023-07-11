<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto p-8">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="h-64 bg-cover bg-center" style="background-image: url('{{ $blog->image }}')"></div>
            <div class="p-6">
                <h1 class="text-3xl font-bold mb-4">{{ $blog->title }}</h1>
                <p class="text-gray-600 text-sm mb-6">{{ $blog->created_at->format('F j, Y') }}</p>
                <p class="text-gray-800">{{ $blog->body }}</p>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Comments</h2>

            <div class="h-80 bg-white rounded-lg shadow-lg p-6 overflow-y-scroll">
                @forelse ($blog->comments as $comment)
                    <div class="mb-6 border-b">
                        <p class="text-gray-800">{{ $comment->comment }}</p>
                        <div class="flex items-center mt-2">
                            <div class="ml-4">
                                <p class="text-gray-600 text-sm">{{ $comment->created_at->format('F j, Y') }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No comments yet.</p>
                @endforelse
            </div>
        </div>

        <a href="{{ route('blogs.index') }}" class="absolute top-0 left-0 mt-8 ml-8 px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold  transition duration-200">Go Back</a>
    </div>

</body>
</html>
