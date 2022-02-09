<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title != null ? env("APP_NAME"). " | Admin | " . $title : env("APP_NAME") }}</title>
</head>

<body class="font-poppins" id="body">

    <main id="main">

        <section class="grid grid-cols-12">
            <div id="sidebar" class="col-span-2 bg-main-500 h-screen relative z-50">
                <div class="copyright absolute bottom-3 w-full text-center text-[0.6rem] tracking-wider text-white">
                    © Muhammad Ikhsan Bintang
                </div>
                <div class="header h-16 flex items-center border-b-2 border-main-100 px-3">
                    <div class="logo w-12 h-12 bg-white rounded-full mr-3"></div>
                    <h1 class="text-xl font-bold tracking-wider text-white">
                        STARBOOK
                    </h1>
                </div>
                <div class="menu">
                    <div class="flex flex-col">
                        <p class="py-4 px-3 font-bold text-black tracking-widest bg-main-800">
                            Main Navigation
                        </p>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center py-4 px-3 font-bold text-white tracking-widest border-b-[1px] border-main-100 text-sm">
                            <i class="fas fa-chart-line text-lg mr-2"></i> Dashboard
                        </a>
                        <a href="{{ route('admin.managementUsers') }}" class="flex items-center py-4 px-3 font-bold text-white tracking-widest border-b-[1px] border-main-100 text-sm">
                            <i class="fas fa-users text-lg mr-1"></i> Management Users
                        </a>
                        <a href="{{ route('admin.managementBooks') }}" class="flex items-center py-4 px-3 font-bold text-white tracking-widest border-b-[1px] border-main-100 text-sm">
                            <i class="fas fa-book text-lg mr-3"></i> Management Books
                        </a>
                    </div>
                </div>
            </div>
            <div id="content" class="col-span-10 bg-main-100">
                <div class="header bg-main-300 h-16 w-full flex items-center justify-between px-3">
                    <div class="header-left flex">
                        <i class="fas fa-bars text-4xl cursor-pointer" onclick="hiddenSidebar()"></i>
                        <div class="input-search relative ml-5">
                            <button class="absolute right-0 top-0 w-10 h-10 bg-main-500 rounded-r-lg"><i class="fas fa-search"></i></button>
                            <input type="text" class="w-80 h-10 rounded-lg outline-0 bg-main-400 px-5 placeholder:font-bold placeholder:tracking-widest placeholder:text-base text-base font-bold tracking-widest pr-12" placeholder="Quick Search">
                        </div>
                    </div>

                    <div class="header-title">
                        <h1 class="font-bold text-xl tracking-widest">{{ $title }}</h1>
                    </div>

                    <div class="header-right">
                        <a href="" class="px-8 py-2 bg-main-500 rounded-tr-xl rounded-bl-xl rounded-tl-sm rounded-br-sm"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>

                <div class="content w-full h-[90.2vh] overflow-auto p-3">

                    {{ $slot }}

                </div>
            </div>
        </section>

    </main>

    <script src="{{ asset('js/font-awesome/all.js') }}"></script>
    <script src="{{ asset('js/admin/sidebar.js') }}"></script>
</body>

</html>
