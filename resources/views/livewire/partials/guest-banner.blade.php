<nav class="flex bg-white justify-between items-center p-4 border-b fixed w-full top-0 start-0 z-20">
    {{-- Branding --}}
    <a href="/" class="flex gap-3 items-center" wire:navigate>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Gallery_logo1.jpg/1280px-Gallery_logo1.jpg" alt="Logo" class="h-12">
        {{-- <span class="text-2xl font-semibold">Gallery</span> --}}
    </a>

    {{-- Sign In Button --}}
    <a href="{{ route('login') }}" class="btn btn-primary flex items-center focus:outline-none" wire:navigate>
        Sign In
        <img src="svg/login.svg" class="invert w-[25px]" alt="">
    </a>
</nav>
