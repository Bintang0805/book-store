<x-templates.admin-layout title="Management Books">


    <div class="section">
        <div class="btn pb-5">
            <button
                class="text-black bg-main-500 px-5 py-2 font-bold tracking-wider rounded-xl hover:bg-main-800 hover:text-white duration-300" onclick="openModal('main-modal')">
                Create New Books
            </button>
        </div>



            <table class="text-left w-full border-collapse bg-white rounded-lg overflow-x-auto">
                <thead>
                  <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-main-600">Title</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-main-600">Synopsis</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-main-600">Price</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-main-600">Category</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-main-600">Writer</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-main-600">Publisher</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-main-600">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-main-400">Mariposa</td>
                    <td class="py-4 px-6 border-b border-main-400">{{ Str::limit("
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, ducimus quas porro quisquam inventore delectus magnam in quasi quaerat debitis ullam voluptatibus, provident reiciendis. Hic asperiores suscipit distinctio ab, adipisci praesentium laboriosam, repudiandae inventore sapiente aliquid architecto quia dolorem nostrum delectus nam. Labore voluptate autem recusandae at sed qui. Rerum sapiente repellendus eveniet consequatur! Necessitatibus eos magnam reiciendis ab, quibusdam saepe ut reprehenderit repellat dolore, vero earum sint deserunt placeat possimus quos et voluptates assumenda perspiciatis minus eum sequi ea ipsam praesentium! Fugit voluptas voluptates reprehenderit earum suscipit deserunt quaerat repellendus doloribus, quasi eum maxime delectus facere debitis hic nesciunt.", 100, '...') }}  </td>
                    <td class="py-4 px-6 border-b border-main-400">Rp. 100.000,-</td>
                    <td class="py-4 px-6 border-b border-main-400">Novel</td>
                    <td class="py-4 px-6 border-b border-main-400">Bintang</td>
                    <td class="py-4 px-6 border-b border-main-400">Gramedia</td>
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
            <div class="grid grid-cols-1">

                <div class="grid grid-cols-2 gap-x-2">
                    <div class="input-group grid grid-cols-1 w-full">
                        <label class="text-black" for="title">Title</label>
                        <input type="text" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="title" id="title" placeholder="Enter title of book">
                    </div>
                    <div class="input-group grid grid-cols-1 w-full">
                        <label class="text-black" for="category">Category</label>
                        <input type="text" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="category" id="category" placeholder="Enter category of book">
                    </div>

                </div>
                <div class="grid grid-cols-2 gap-x-2">
                    <div class="input-group grid grid-cols-1 w-full">
                        <label class="text-black" for="writer">Writer</label>
                        <input type="text" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="writer" id="writer" placeholder="Enter writer of book">
                    </div>
                    <div class="input-group grid grid-cols-1 w-full">
                        <label class="text-black" for="publisher">Publisher</label>
                        <input type="text" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="publisher" id="publisher" placeholder="Enter publisher of book">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-x-2">
                    <div class="input-group grid grid-cols-1 w-full">
                        <label class="text-black" for="synopsis">Synopsis</label>
                        <textarea name="synopsis" id="synopsis" class="border-2 rounded-lg bg-trasparent pl-5 min-h-[2.5rem] h-2.5rem max-h-[10rem]" placeholder="Enter synopsis of book"></textarea>
                    </div>
                    <div class="input-group grid grid-cols-1 w-full">
                        <label class="text-black" for="price">Price</label>
                        <input type="number" class="border-2 rounded-lg bg-trasparent pl-5 h-10" name="price" id="price" placeholder="Enter price of book">
                    </div>
                </div>

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

