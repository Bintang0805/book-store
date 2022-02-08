<x-templates.app-layout title="Books">

    <section class="w-full h-auto py-20 px-3 sm:px-10">
        <div class="grid grid-cols-4 gap-x-3">
            <div class="card w-full min-h-[18rem] h-auto bg-main-300 py-3 px-5 rounded-lg hidden sm:block" style="box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.481)">
                <h1 class="font-bold tracking-widest"><i class="fas fa-filter mr-2"></i> Books Category</h1>
                <div class="categories w-full flex flex-wrap pt-3">
                    <a href="#" class="bg-gray-100 hover:bg-white duration-500 mx-2 my-2 py-1 px-3 rounded-full">Text Books</a>
                    <a href="#" class="bg-gray-100 hover:bg-white duration-500 mx-2 my-2 py-1 px-3 rounded-full">Novel</a>
                    <a href="#" class="bg-gray-100 hover:bg-white duration-500 mx-2 my-2 py-1 px-3 rounded-full">Comic</a>
                    <a href="#" class="bg-gray-100 hover:bg-white duration-500 mx-2 my-2 py-1 px-3 rounded-full">Ensyclopedia</a>
                    <a href="#" class="bg-gray-100 hover:bg-white duration-500 mx-2 my-2 py-1 px-3 rounded-full">Biography</a>
                    <a href="#" class="bg-gray-100 hover:bg-white duration-500 mx-2 my-2 py-1 px-3 rounded-full">Tafsir</a>
                </div>
            </div>
            <div class="col-span-4 sm:col-span-3 w-full h-auto bg-main-300 rounded-lg p-3" style="box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.481)">
                <h1 class="font-bold tracking-wider text-lg sm:text-base text-center sm:text-left">
                    <i class="fas fa-star mr-2"></i> Popular Books
                </h1>

                <div class="flex flex-col sm:flex-row space-x-0 sm:space-x-10 space-y-5 sm:space-y-0 p-3 px-8 pt-5 justify-between">
                    <div class="card h-72 sm:h-64 rounded-lg overflow-hidden cursor-pointer" style="box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.529)">
                        <img src="{{ asset('img/cover-book/dilan1990.jpg') }}" alt="" class="w-full sm:w-auto h-full">
                    </div>
                    <div class="card h-72 sm:h-64 rounded-lg overflow-hidden cursor-pointer" style="box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.494)">
                        <img src="{{ asset('img/cover-book/titanic.png') }}" alt="" class="w-full sm:w-auto h-full">
                    </div>
                    <div class="card h-72 sm:h-64 rounded-lg overflow-hidden cursor-pointer" style="box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.59)">
                        <img src="{{ asset('img/cover-book/dilan1991.jpg') }}" alt="" class="w-full sm:w-auto h-full">
                    </div>
                </div>
            </div>
        </div>
        <div class="books w-full h-auto bg-main-300 mt-3 p-3 rounded-lg" style="box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.481)">
            <div class="sort-by flex flex-col sm:flex-row space-x-3 sm:items-center border-b-2 border-white pb-3">
                <p class="font-bold"><i class="fas fa-filter mr-2"></i> Sort By</p>
                <a href="#" class="bg-gray-100 hover:bg-white duration-500 py-1 px-3 rounded-md">Newest</a>
                <a href="#" class="bg-gray-100 hover:bg-white duration-500 py-1 px-3 rounded-md mt-3 sm:mt-0">Lowest Price</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 books gap-x-3 gap-y-3 pt-3">

                <div class="card w-full h-auto bg-white rounded-xl grid grid-cols-3 overflow-hidden">

                    <div class="col-span-3 sm:col-span-1">
                        <img src="{{ asset('img/cover-book/dilan1990.jpg') }}" alt="" class="w-full h-auto">
                    </div>

                    <div class="col-span-3 sm:col-span-2 px-3 pt-1 relative">
                        <div class="book-title font-bold text-lg">
                            Dilan 1990
                        </div>
                        <div class="synopsis text-justify text-sm pb-10">
                            {{ Str::limit("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis molestiae, facere odio aliquid nam minus sint rem tempora sapiente dicta dolor sinta mayor ritas maha roma riama saki?", 100, '...') }}
                        </div>
                        <button class="relative sm:absolute bottom-3 right-0 sm:right-3 w-full sm:w-auto bg-main-300 hover:bg-main-500 hover:text-white duration-300 tracking-wider px-5 py-1 rounded-lg mt-5 sm:mt-0">
                            Details
                        </button>
                    </div>

                </div>

                <div class="card w-full h-auto bg-white rounded-xl grid grid-cols-3 overflow-hidden">

                    <div class="col-span-3 sm:col-span-1">
                        <img src="{{ asset('img/cover-book/dilan1990.jpg') }}" alt="" class="w-full h-auto">
                    </div>

                    <div class="col-span-3 sm:col-span-2 px-3 pt-1 relative">
                        <div class="book-title font-bold text-lg">
                            Dilan 1990
                        </div>
                        <div class="synopsis text-justify text-sm pb-10">
                            {{ Str::limit("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis molestiae, facere odio aliquid nam minus sint rem tempora sapiente dicta dolor sinta mayor ritas maha roma riama saki?", 100, '...') }}
                        </div>
                        <button class="relative sm:absolute bottom-3 right-0 sm:right-3 w-full sm:w-auto bg-main-300 hover:bg-main-500 hover:text-white duration-300 tracking-wider px-5 py-1 rounded-lg mt-5 sm:mt-0">
                            Details
                        </button>
                    </div>

                </div>

                <div class="card w-full h-auto bg-white rounded-xl grid grid-cols-3 overflow-hidden">

                    <div class="col-span-3 sm:col-span-1">
                        <img src="{{ asset('img/cover-book/dilan1990.jpg') }}" alt="" class="w-full h-auto">
                    </div>

                    <div class="col-span-3 sm:col-span-2 px-3 pt-1 relative">
                        <div class="book-title font-bold text-lg">
                            Dilan 1990
                        </div>
                        <div class="synopsis text-justify text-sm pb-10">
                            {{ Str::limit("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis molestiae, facere odio aliquid nam minus sint rem tempora sapiente dicta dolor sinta mayor ritas maha roma riama saki?", 100, '...') }}
                        </div>
                        <button class="relative sm:absolute bottom-3 right-0 sm:right-3 w-full sm:w-auto bg-main-300 hover:bg-main-500 hover:text-white duration-300 tracking-wider px-5 py-1 rounded-lg mt-5 sm:mt-0">
                            Details
                        </button>
                    </div>

                </div>

                <div class="card w-full h-auto bg-white rounded-xl grid grid-cols-3 overflow-hidden">

                    <div class="col-span-3 sm:col-span-1">
                        <img src="{{ asset('img/cover-book/dilan1990.jpg') }}" alt="" class="w-full h-auto">
                    </div>

                    <div class="col-span-3 sm:col-span-2 px-3 pt-1 relative">
                        <div class="book-title font-bold text-lg">
                            Dilan 1990
                        </div>
                        <div class="synopsis text-justify text-sm pb-10">
                            {{ Str::limit("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis molestiae, facere odio aliquid nam minus sint rem tempora sapiente dicta dolor sinta mayor ritas maha roma riama saki?", 100, '...') }}
                        </div>
                        <button class="relative sm:absolute bottom-3 right-0 sm:right-3 w-full sm:w-auto bg-main-300 hover:bg-main-500 hover:text-white duration-300 tracking-wider px-5 py-1 rounded-lg mt-5 sm:mt-0">
                            Details
                        </button>
                    </div>

                </div>

                <div class="card w-full h-auto bg-white rounded-xl grid grid-cols-3 overflow-hidden">

                    <div class="col-span-3 sm:col-span-1">
                        <img src="{{ asset('img/cover-book/dilan1990.jpg') }}" alt="" class="w-full h-auto">
                    </div>

                    <div class="col-span-3 sm:col-span-2 px-3 pt-1 relative">
                        <div class="book-title font-bold text-lg">
                            Dilan 1990
                        </div>
                        <div class="synopsis text-justify text-sm pb-10">
                            {{ Str::limit("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis molestiae, facere odio aliquid nam minus sint rem tempora sapiente dicta dolor sinta mayor ritas maha roma riama saki?", 100, '...') }}
                        </div>
                        <button class="relative sm:absolute bottom-3 right-0 sm:right-3 w-full sm:w-auto bg-main-300 hover:bg-main-500 hover:text-white duration-300 tracking-wider px-5 py-1 rounded-lg mt-5 sm:mt-0">
                            Details
                        </button>
                    </div>

                </div>

                <div class="card w-full h-auto bg-white rounded-xl grid grid-cols-3 overflow-hidden">

                    <div class="col-span-3 sm:col-span-1">
                        <img src="{{ asset('img/cover-book/dilan1990.jpg') }}" alt="" class="w-full h-auto">
                    </div>

                    <div class="col-span-3 sm:col-span-2 px-3 pt-1 relative">
                        <div class="book-title font-bold text-lg">
                            Dilan 1990
                        </div>
                        <div class="synopsis text-justify text-sm pb-10">
                            {{ Str::limit("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis molestiae, facere odio aliquid nam minus sint rem tempora sapiente dicta dolor sinta mayor ritas maha roma riama saki?", 100, '...') }}
                        </div>
                        <button class="relative sm:absolute bottom-3 right-0 sm:right-3 w-full sm:w-auto bg-main-300 hover:bg-main-500 hover:text-white duration-300 tracking-wider px-5 py-1 rounded-lg sm:mt-0">
                            Details
                        </button>
                    </div>

                </div>


            </div>
        </div>
    </section>


</x-templates.app-layout>
