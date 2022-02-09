<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
    <title>{{ $title != null ? env("APP_NAME"). " | Admin | " . $title : env("APP_NAME") }}</title>
</head>

<body class="font-poppins" id="body">

    <div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
        <div class="border border-blue-500 modal-container bg-white w-6/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-4">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold text-gray-500">Create</p>
                    <div class="modal-close cursor-pointer z-50" onclick="modalClose('main-modal')">
                        <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!--Body-->
                <div class="my-5 flex justify-center">
                    @stack('modal')
                </div>
            </div>
        </div>
    </div>


    <main id="main">

        <section class="grid grid-cols-12">
            <div id="sidebar" class="col-span-2 bg-main-500 h-screen relative z-40">
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

                <div class="content w-full h-[90.2vh] overflow-y-auto overflow-x-hidden p-3">

                    {{ $slot }}

                </div>
            </div>
        </section>

    </main>




    <script>
        all_modals = ['main-modal']
        all_modals.forEach((modal)=>{
            const modalSelected = document.querySelector('.'+modal);
            modalSelected.classList.remove('fadeIn');
            modalSelected.classList.add('fadeOut');
            modalSelected.style.display = 'none';
        })
        const modalClose = (modal) => {
            const modalToClose = document.querySelector('.'+modal);
            modalToClose.classList.remove('fadeIn');
            modalToClose.classList.add('fadeOut');
            setTimeout(() => {
                modalToClose.style.display = 'none';
            }, 500);
        }

        const openModal = (modal) => {
            const modalToOpen = document.querySelector('.'+modal);
            modalToOpen.classList.remove('fadeOut');
            modalToOpen.classList.add('fadeIn');
            modalToOpen.style.display = 'flex';
        }


    </script>
    <script src="{{ asset('js/font-awesome/all.js') }}"></script>
    <script src="{{ asset('js/admin/sidebar.js') }}"></script>


</body>



</html>
