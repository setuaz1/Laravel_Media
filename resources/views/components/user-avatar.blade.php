@props(['user', 'size' => 'w-12 h-12'])

@if ($user->image)
    <img src="{{ $user->imageUrl() }}" alt="{{ $user->name }}" class="{{ $size }} rounded-full">
@else
    <img src="https://lh3.googleusercontent.com/proxy/Bhp_fiwdRmWY8hQO8QSXvaHHvGmbJT0cBcPqLLyVN882133hhVSU7Yi1GBFzADRHn58lq9lXH8FH4EfrCUMNhfnFcdzciZb9exeCi2fDSVG6nWmY3kgZMa8MSwKiYDZkLdtltyyN7NNDEko1"
        alt="Dummy avatar" class="{{ $size }} rounded-full">
@endif
