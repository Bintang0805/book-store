<x-templates.app-layout title="Beranda">


    <section id="home" class="w-full h-[80vh] bg-main-300 pt-[4.5rem]">
        <div class="grid grid-cols-1 h-full">
            <div class="flex flex-col items-center h-full justify-center">
                <div class="title font-bold text-2xl sm:text-5xl tracking-wider text-center">
                    WELCOME TO STARBOOK
                </div>
                <div class="slogan text-xl sm:text-2xl pt-2 text-center">
                    this platform is a place to buy books of various categories
                </div>
                <div class="btn-trigger pt-10 flex space-x-10">
                    <button class="w-52 h-14 bg-main-400 rounded-full text-lg hover:bg-main-500 duration-500 font-bold tracking-wider">
                        Get Started
                    </button>
                    <div class="input-search hidden sm:block relative">
                        <button class="absolute right-0 top-0 w-14 h-14 bg-main-500 rounded-r-lg"><i class="fas fa-search"></i></button>
                        <input type="text" class="w-72 h-14 rounded-lg outline-0 bg-main-400 px-5 placeholder:font-bold placeholder:tracking-widest font-bold tracking-widest" placeholder="Quick Search">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Books" class="w-full h-auto pb-20 bg-gray-100 relative">
        <img src="{{ asset('img/wave/wave1.svg') }}" alt="" class="w-full h-auto absolute top-0">
        <img src="{{ asset('img/wave/wave2.svg') }}" alt="" class="w-full h-auto absolute bottom-0">

        <div class="container relative px-5 lg:px-20">
            <h1 class="text-3xl text-black font-bold tracking-wider text-center pt-[30vh] pb-10">Books Categories</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-5 gap-x-0 sm:gap-x-0 md:gap-x-3 lg:gap-x-3">
                <div class="card flex flex-col items-center justify-center h-64 p-5 cursor-pointer hover:bg-white rounded-lg duration-500">
                    <div class="img w-24 h-24 bg-gray-200 flex justify-center items-center rounded-full">
                        <img src="{{ asset('img/book-categories/book.png') }}" alt="" class="w-4/6 h-auto">
                    </div>
                    <p class="font-bold tracking-widest pt-5 text-lg">
                        Text Books
                    </p>
                    <p class="text-center text-sm font-medium">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas aliquam delectus ipsam corrupti nemo omnis obcaecati aliquid magnam nam vero?
                    </p>
                </div>
                <div class="card flex flex-col items-center justify-center h-64 p-5 cursor-pointer hover:bg-white rounded-lg duration-500">
                    <div class="img w-24 h-24 bg-gray-200 flex justify-center items-center rounded-full">
                        <img src="{{ asset('img/book-categories/book.png') }}" alt="" class="w-4/6 h-auto">
                    </div>
                    <p class="font-bold tracking-widest pt-5 text-lg">
                        Novel
                    </p>
                    <p class="text-center text-sm font-medium">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas aliquam delectus ipsam corrupti nemo omnis obcaecati aliquid magnam nam vero?
                    </p>
                </div>
                <div class="card flex flex-col items-center justify-center h-64 p-5 cursor-pointer hover:bg-white rounded-lg duration-500">
                    <div class="img w-24 h-24 bg-gray-200 flex justify-center items-center rounded-full">
                        <img src="{{ asset('img/book-categories/book.png') }}" alt="" class="w-4/6 h-auto">
                    </div>
                    <p class="font-bold tracking-widest pt-5 text-lg">
                        Comic
                    </p>
                    <p class="text-center text-sm font-medium">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas aliquam delectus ipsam corrupti nemo omnis obcaecati aliquid magnam nam vero?
                    </p>
                </div>
                <div class="card flex flex-col items-center justify-center h-64 p-5 cursor-pointer hover:bg-white rounded-lg duration-500">
                    <div class="img w-24 h-24 bg-gray-200 flex justify-center items-center rounded-full">
                        <img src="{{ asset('img/book-categories/book.png') }}" alt="" class="w-4/6 h-auto">
                    </div>
                    <p class="font-bold tracking-widest pt-5 text-lg">
                        Ensyclopedia
                    </p>
                    <p class="text-center text-sm font-medium">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas aliquam delectus ipsam corrupti nemo omnis obcaecati aliquid magnam nam vero?
                    </p>
                </div>
                <div class="card hidden lg:flex flex-col items-center justify-center h-64 p-5 cursor-pointer hover:bg-white rounded-lg duration-500">
                    <div class="img w-24 h-24 bg-gray-200 flex justify-center items-center rounded-full">
                        <img src="{{ asset('img/book-categories/book.png') }}" alt="" class="w-4/6 h-auto">
                    </div>
                    <p class="font-bold tracking-widest pt-5 text-lg">
                        Biography
                    </p>
                    <p class="text-center text-sm font-medium">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas aliquam delectus ipsam corrupti nemo omnis obcaecati aliquid magnam nam vero?
                    </p>
                </div>
                <div class="card hidden lg:flex flex-col items-center justify-center h-64 p-5 cursor-pointer hover:bg-white rounded-lg duration-500">
                    <div class="img w-24 h-24 bg-gray-200 flex justify-center items-center rounded-full">
                        <img src="{{ asset('img/book-categories/book.png') }}" alt="" class="w-4/6 h-auto">
                    </div>
                    <p class="font-bold tracking-widest pt-5 text-lg">
                        Tafsir
                    </p>
                    <p class="text-center text-sm font-medium">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas aliquam delectus ipsam corrupti nemo omnis obcaecati aliquid magnam nam vero?
                    </p>
                </div>
            </div>
        </div>


    </section>

    <section id="contact-us" class="w-full h-auto pb-20 bg-main-300">
        <div class="container px-5 md:px-10 lg:px-20 pt-20">
            <h1 class="text-3xl text-black font-bold tracking-wider pb-10 text-center sm:text-left">Contact Us</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10">
                <form action="" method="post">
                    <div class="space-y-5">
                        @csrf
                        <div class="input-group grid grid-cols-1">
                            <label class="text-black" for="full_name">Full Name</label>
                            <input type="text" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="full_name" id="full_name" placeholder="Muhammad Ikhsan Bintang">
                        </div>
                        <div class="input-group grid grid-cols-1">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="email" id="email" placeholder="Example@gmail.com">
                        </div>
                        <div class="input-group grid grid-cols-1">
                            <label class="text-black" for="phone_number">Phone Number</label>
                            <input type="number" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="phone_number" id="phone_number" placeholder="08********">
                        </div>
                        <div class="input-group grid grid-cols-1">
                            <label class="text-black" for="message">Message</label>
                            <textarea type="text" class="border-2 rounded-lg bg-trasparent pl-5 h-10 pt-2" name="message" id="message" placeholder="Why if i'm try ........." style="min-height: 5rem; max-height: 13rem"></textarea>
                        </div>
                </div>
                <div class="button flex justify-end pb-10">
                    <button class="w-full px-4 tracking-widest bg-main-400 hover:bg-main-500 duration-500 text-xl h-12 rounded-lg text-primary font-bold mt-10 shadow">
                        Send
                    </button>
                </div>
            </form>
            <div class="img-right hidden sm:flex justify-end items-center w-full">
                <img src="{{ asset('img/illustration/book.png') }}" alt="" class="w-9/12 h-auto">
            </div>
        </div>

    </section>



</x-templates.app-layout>
