<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl" action="{{route('add-penjualan') }}" method="post">
        @csrf
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Tambah Data Keuangan
        </p>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="partner">Jenis Tanaman</label>
            {{-- <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="partner" name="partner" type="text" required=""> --}}
            <select name="plantType" id="plantType" class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded">
                <option value="">- tidak ada-</option>
                @php
                    $plantTypes = \App\Models\PlantType::all();
                @endphp
                @foreach ($plantTypes as $plantType)
                    <option value="{{ $plantType->id }}">{{$plantType->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 pr-2 w-1/2">
            <label class="block text-md text-gray-600" for="amount">Jumlah (dalam skala kg)</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="amount" name="amount" type="text" required="" >
        </div>
        <div class="inline-block mt-2 -mx-1 pl-2 w-1/2">
            <label class="block text-md text-gray-600" for="price">Harga</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="price" name="price" type="text" required="" >
        </div>
        <br>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="partner">Mitra</label>
            {{-- <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="partner" name="partner" type="text" required=""> --}}
            <select name="partner" id="partner" class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded">
                <option value="">- tidak ada-</option>
                @foreach ($partners as $partner)
                    <option value="{{ $partner->id }}">{{$partner->name}}</option>
                @endforeach
            </select>
        </div>
        {{-- <p class="text-md text-gray-800 font-medium py-4">Harga</p>
        <div class="">
            <label class="block text-md text-gray-600" for="cus_name">Card</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
        </div> --}}
        <div class="mt-6">
            <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded" type="submit">Tambahkan</button>
        </div>
    </form>
</x-app-layout>