<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl" action="{{ url('pengaturan-akun/'. $data->id ) }}" method="post">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Pengaturan Akun
        </p>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="email">Email</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-100 rounded" id="email" name="email" type="email" value="{{$data->email}}" readonly>
        </div>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="name">Nama Lengkap</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="name" name="name" type="text" value="{{$data->name}}" required="" >
        </div>
        {{-- <div class="mt-2">
            <label class="block text-md text-gray-600" for="old_password">Password lama</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="old_password" name="old_password" type="password" required="" >
        </div> --}}
        <hr>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="new_password">Password baru</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="new_password" name="new_password" type="password" required="" >
        </div>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="confirm_password">Konfirmasi password baru</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="confirm_password" name="confirm_password" type="password" required="" >
        </div>
        <br>
        {{-- <p class="text-md text-gray-800 font-medium py-4">Harga</p>
        <div class="">
            <label class="block text-md text-gray-600" for="cus_name">Card</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Card Number MM/YY CVC" aria-label="Name">
        </div> --}}
        <div class="mt-6">
            <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded" type="submit">perbarui</button>
        </div>
    </form>
</x-app-layout>