<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl" action="{{ url('store-penjualan') }}" method="post">
        @csrf
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Detail Hasil Penjualan Tanaman
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
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="price" type="text" value="@if ($data->price <= 0) {{ $data->price; }}@else{{'Belum panen' }} @endif" readonly>
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="amount">Jumlah (dalam skala kg)</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="amount" type="number" value="{{ $data->amount }}" readonly>
        </div>
        <br>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-md text-gray-600" for="started">Dimulai</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="started" type="date" value="{{ $data->started }}" readonly>
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="started">Dipanen</label>
            @if ($data->harvest != null)
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="harvest" type="date" value="{{ $data->harvest }}" readonly>
            @else
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" name="harvest" type="text" value="Belum dipanen" readonly>
            @endif
        </div>
        {{-- <p class="text-md text-gray-800 font-medium py-4">Harga</p>
        <div class="">
            <label class="block text-md text-gray-600" for="cus_name">Card</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
        </div> --}}
    </form>
</x-app-layout>