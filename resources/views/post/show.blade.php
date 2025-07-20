<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">{{ $post->title }}</h1>
                <!-- User Avatar -->
                <div class="flex gap-4">
                    @if ($post->user->image)
                        <img src="{{ $post->user->imageUrl() }}" alt="{{ $post->user->name }}"
                            class="w-12 h-12 rounded-full">
                    @else
                        <img src="https://lh3.googleusercontent.com/proxy/Bhp_fiwdRmWY8hQO8QSXvaHHvGmbJT0cBcPqLLyVN882133hhVSU7Yi1GBFzADRHn58lq9lXH8FH4EfrCUMNhfnFcdzciZb9exeCi2fDSVG6nWmY3kgZMa8MSwKiYDZkLdtltyyN7NNDEko1"
                            alt="Dummy avatar" class="w-12 h-12 rounded-full">
                    @endif
                    <div>
                        <div class="flex gap-2">
                            <h3>{{ $post->user->name }}</h3>
                            &middot;
                            <a href="#" class="text-green-600">Follow</a>
                        </div>
                        <div class="flex gap-2 text-sm text-gray-500">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                    <!-- User Avatar -->


                </div>
                <!-- User Avatar -->

                <!-- Clap Section -->
                <div></div>
                <!-- Clap Section -->

                <!-- Content Section -->
                <div>
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full">

                    <div class="mt-4">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
