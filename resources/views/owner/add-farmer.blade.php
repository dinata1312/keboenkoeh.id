<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl" action="{{route('add-farmer') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Tambah Akun
        </p>
        <div class="">
            <input type="hidden" name="role" id="role" value="3">
            <label class="block text-md text-gray-600" for="name">Nama</label>
            <input class="w-full px-2 py-1 text-gray-700 bg-gray-50 rounded" id="name" name="name" type="text" required="">
        </div>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="email">Email</label>
            <input class="w-full px-2 py-1 text-gray-700 bg-gray-50 rounded" id="email" name="email" type="email" required="">
        </div>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="password">Password</label>
            <input class="w-full px-2 py-1 text-gray-700 bg-gray-50 rounded" id="password" name="password" type="password" required="">
        </div>
        <br>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="role">Akses</label>
            {{-- <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="partner" name="partner" type="text" required=""> --}}
            <select name="role" id="role" class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded">
                <option value="">- tidak ada-</option>
                @php
                    $roles = \App\Models\Role::all();
                @endphp
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-6">
            <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded" type="submit">Tambahkan</button>
        </div>
    </form>
</x-app-layout>