<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl">
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Detail Transaksi
            <a class="px-1 py-1 text-white text-sm font-light tracking-wider bg-blue-900 rounded" href="/owner/edit-keuangan/{{ $data->id }}">Edit</a>
        </p>
            <div class="">
                <label class="block text-md text-gray-600" for="title">Judul</label>
                <input class="w-full px-2 py-1 text-gray-700 bg-gray-50 rounded" id="title" name="title" type="text" readonly required="" value="{{$data->name}}">
            </div>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="detail">Keterangan</label>
            <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="detail" name="detail" readonly required="">{{ $data->notes }}</textarea> 
        </div>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="partner">Mitra</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="partner" name="partner" type="text" readonly required="">
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-md text-gray-600" for="price">Harga</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="price" name="price" type="text" readonly required=""  value="Rp{{number_format($data->price)}}">
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="amount">Jumlah</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="amount" name="amount" type="text" readonly required=""  value="{{$data->amount}} kg">
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="type">Jenis</label>
            <input class="px-2 py-2" id="type" name="type" type="radio" required="" value="expense" @if($data->type == "expense") checked @endif>&nbsp; Pengeluaran &nbsp;
            <input class="px-2 py-2" id="type" name="type" type="radio" required="" value="income" @if($data->type == "income") checked @endif>&nbsp; Pemasukan
        </div>
        <br>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-md text-gray-600" for="image">Gambar</label>
            <img src="{{ asset($data->image) }}" class="max-h-56">
        </div>
        {{-- <p class="text-md text-gray-800 font-medium py-4">Harga</p>
        <div class="">
            <label class="block text-md text-gray-600" for="cus_name">Card</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="cus_name" name="cus_name" type="text" readonly required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
        </div>
        <div class="mt-6">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">$3.00</button>
        </div> --}}
    </form>
</x-app-layout>