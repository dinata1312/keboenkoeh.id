<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl" action="{{ url('edit-penjualan/'. $data->id) }}" method="post">
        
        @csrf
        <input type="hidden" name="id" value="{{ encrypt($data->id)}}">
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Edit Hasil Penjualan Tanaman
        </p>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="partner">Jenis Tanaman</label>
            @php
                $plantType = \App\Models\PlantType::where('id', $data->plant_id)->first();
            @endphp
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="name" type="text" value="{{ $plantType->name }}" readonly>
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-md text-gray-600" for="price">Harga Penjualan</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="price" type="text" value="{{$data->price}}" >
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="amount">Jumlah (dalam skala kg)</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="amount" type="number" value="{{ $data->amount }}" >
        </div>
        <br>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-md text-gray-600" for="started">Dimulai</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="started" type="date" value="{{ $data->started }}" readonly>
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="started">Dipanen</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="harvest" type="date" value="{{ $data->harvest }}">
        </div>
        <div class="mt-6">
            <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded" type="submit">Simpan</button>
        </div>
    </form>
</x-app-layout>