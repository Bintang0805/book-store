<x-templates.admin-layout title="Management Users">


    <div class="section">
        <div class="btn pb-5">
            <button
                class="text-black bg-main-500 px-5 py-2 font-bold tracking-wider rounded-xl hover:bg-main-800 hover:text-white duration-300" onclick="openModal('main-modal')">
                Create New User
            </button>
        </div>



        <table class="text-left w-full border-collapse bg-white rounded-lg">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-main-600">Email</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-main-600">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-main-400 w-[75%]">ikhsanbintang3292@gmail.com</td>
                <td class="py-4 px-6 border-b border-main-400">
                  <a href="#" class="px-3 py-1 rounded-md bg-green-400">Edit</a>
                  <a href="#" class="px-3 py-1 rounded-md bg-red-400">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
    </div>



    @push('modal')
        <form action="" method="post" class="w-full">
            @csrf
            <div class="input-group grid grid-cols-1 w-full">
                <label class="text-black" for="email">Email</label>
                <input type="email" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="email" id="email" placeholder="Enter Email User">
            </div>
            <div class="input-group grid grid-cols-1 w-full pt-2">
                <label class="text-black" for="password">Password</label>
                <input type="password" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="password" id="password" placeholder="Enter New Password">
            </div>
            <div class="input-group grid grid-cols-1 w-full pt-2">
                <label class="text-black" for="v_password">Password</label>
                <input type="password" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="v_password" id="v_password" placeholder="Enter Verify Password">
            </div>
            <div class="flex justify-end pt-8 space-x-14">
                <button
                    class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" type="button" onclick="modalClose('main-modal')">Cancel</button>
                <button
                    class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" type="submit">Confirm</button>
            </div>
        </form>
    @endpush

</x-templates.admin-layout>

