<nav class="top-0 w-full h-[4.5rem] z-50 bg-white px-10 hidden sm:block fixed" style="box-shadow: 0 2px 5px 0.2px rgba(0, 0, 0, 0.296)">
    <div class="flex justify-between h-full items-center ">
        <div class="brand-name flex items-center">
            <div class="w-12 h-12 bg-main-400 mr-3 rounded-full"></div>
            <p class="text-lg font-bold tracking-wider">STARBOOK</p>
        </div>
        <div class="menu flex space-x-5 text-lg items-center">
            <a href="#">Home</a>
            <a href="#" class="text-gray-400">Category</a>
            <a href="#" class="text-gray-400">Contact Us</a>
            <a href="{{ route('books') }}" class="text-gray-400">Books</a>
            <a href="{{ route('auth.login') }}" class="w-28 py-2 bg-main-400 text-center rounded-tr-xl rounded-bl-xl font-bold hover:bg-main-500 tracking-widest duration-500">Login</a>
        </div>
    </div>
</nav>
