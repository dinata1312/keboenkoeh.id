<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl" action="{{route('edit-schedule', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Tambah Penjadwalan
        </p>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="user_id">Pekerja</label>
            <select name="user_id" id="user_id" class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" disabled>
                    <option value="{{ $data->id }}">{{$data->name}}</option>
            </select>
        </div>
        <div class="mt-2">
            <label class="block text-md text-gray-600" for="lahan">Lahan</label>
            <input class="w-full px-2 py-1 text-gray-700 bg-gray-50 rounded" id="lahan" name="land" type="text" value="{{$data->land}}" required="">
        </div>
        <div class="inline-block mt-2 w-1/3 pr-1">
            <label class="block text-md text-gray-600" for="day">Hari</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="day" name="day" type="text"value="{{$data->day}}" required="">
        </div>
        <div class="inline-block mt-2 w-1/3 pr-1">
            <label class="block text-md text-gray-600" for="start">Jam Mulai</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="start" name="start" type="time" value="{{$data->start}}" required="">
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/3">
            <label class="block text-md text-gray-600" for="finish">Jam Selesai</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="finish" name="finish" type="time" value="{{$data->finish}}" required="" >
        </div>
        <div class="mt-6">
            <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded" type="submit">Perbarui</button>
        </div>
    </form>
</x-app-layout>