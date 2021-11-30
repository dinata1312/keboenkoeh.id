<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl"  action="{{route('add-partner') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Tambah Mitra
        </p>
            <div class="">
                <label class="block text-md text-gray-600" for="name">Mitra</label>
                <input class="w-full px-2 py-1 text-gray-700 bg-gray-50 rounded" id="name" name="name" type="text" required="">
            </div>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="email">Email</label>
            <input class="w-full px-2 py-1 text-gray-700 bg-gray-50 rounded" id="email" name="email" type="email" required="">
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-md text-gray-600" for="middleman">Perantara</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="middleman" name="middleman" type="text" required="">
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-md text-gray-600" for="phone_number">Nomor yang dapat dihubungi</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="phone_number" name="phone_number" type="text" required="">
        </div>
        <br>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="address">Alamat</label>
            <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="address" name="address" required=""></textarea>
        </div>
        <br>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="image">Gambar</label>
            <input type="file" name="image" class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded">
        </div>
        <div class="mt-6">
            <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded" type="submit">Tambahkan</button>
        </div>
    </form>
</x-app-layout>