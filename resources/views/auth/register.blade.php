<x-templates.app-layout title="Login">

    <div class="w-full h-screen bg-main-100">
        <div class="flex justify-center items-center flex-col h-full px-3">
            <div class="w-16 h-16 bg-main-500 rounded-full mb-5 hidden sm:block"></div>
            <div class="login-card w-full sm:w-full md:w-4/6 lg:w-2/6 h-auto py-5 bg-main-500 z-10 rounded-xl p-4">
                <div class="title">
                    <h1 class="text-2xl text-white font-bold tracking-wider text-center">
                        STARBOOK
                    </h1>
                    <h5 class="text-gray-100 text-center text-sm">
                        Enter your data for new account
                    </h5>
                </div>
                <div class="login-form">
                    <form action="">
                        <div class="input-group flex flex-col pt-4">
                            <label for="email" class="pb-2 text-white font-bold tracking-widest">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter Your Email" class="w-full h-10 bg-transparent rounded-lg px-3 text-white placeholder:text-white outline-none" style="border: 1px solid white">
                        </div>
                        <div class="input-group flex flex-col pt-4">
                            <label for="password" class="pb-2 text-white font-bold tracking-widest">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter Your Password" class="w-full h-10 bg-transparent rounded-lg px-3 text-white placeholder:text-white outline-none" style="border: 1px solid white">
                        </div>
                        <div class="input-group flex flex-col pt-4">
                            <label for="v_password" class="pb-2 text-white font-bold tracking-widest">Verify Password</label>
                            <input type="password" id="v_password" name="v_password" placeholder="Enter Your Password" class="w-full h-10 bg-transparent rounded-lg px-3 text-white placeholder:text-white outline-none" style="border: 1px solid white">
                        </div>
                        <div class="btn pt-10">
                            <button class="w-full h-10 bg-main-100 hover:bg-white duration-500 rounded-xl font-bold tracking-widest text-lg">
                                Regist
                            </button>
                        </div>
                        <p class="flex justify-center pt-2 pb-3">
                            <span class="text-white">Already Have Account ?&nbsp;<a href="{{ route('auth.login') }}" class="text-gray-200 hover:text-white duration-500">Login Now</a></span>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-templates.app-layout>
