<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl"  action="{{route('edit-partner') }}" method="post" enctype="multipart/form-data">
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Edit Mitra #{{$data->id}}
        </p>
        <div class="">
            <label class="block text-md text-gray-600" for="name">Mitra</label>
            <input class="w-full px-2 py-1 text-gray-700 bg-gray-50 rounded" id="name" name="name" type="text" readonly required="" value="{{$data->name}}">
        </div>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="email">Email</label>
            <input class="w-full px-2 py-1 text-gray-700 bg-gray-50 rounded" id="email" name="email" type="email" required="" value="{{ $data->email }}">
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-md text-gray-600" for="middleman">Perantara</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="middleman" name="middleman" type="text" readonly required="" value="{{$data->middleman}}">
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-md text-gray-600" for="phone_number">Nomor yang dapat dihubungi</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="phone_number" name="phone_number" type="text" readonly required="" value="{{ $data->phone_number }}">
        </div>
        <br>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="address">Alamat</label>
            <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="address" name="address" type="text" readonly required="">{{$data->address}}</textarea>
        </div>
        <br>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="image">Gambar</label>
            <img src="{{ asset($data->image) }}" class="max-h-56">
        </div>
        <div class="mt-6">
            <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded" type="submit">Ubah</button>
        </div>
    </form>
</x-app-layout>