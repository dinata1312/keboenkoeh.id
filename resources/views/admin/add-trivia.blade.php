<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl" action="{{route('add-trivia') }}" method="post">
        @csrf
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Tambah Konten
        </p>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="title">Judul Konten</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="title" name="title" type="text" required="">
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="content">Deskripsi</label>
            <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="content" name="content" required="" ></textarea>
        </div>
        <br>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="image">Gambar</label>
            <input type="file" name="image" class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded">
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="status">Gambar</label>
            <input type="radio" value="1" name="status" class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded"> Publish &nbsp;
            <input type="radio" value="0" name="status" class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded"> Draft &nbsp;
        </div>
        <div class="mt-6">
            <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded" type="submit">Simpan</button>
        </div>
    </form>
</x-app-layout>