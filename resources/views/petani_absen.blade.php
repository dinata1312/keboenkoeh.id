<x-app-layout>
    <form class="p-10 bg-white rounded shadow-xl" action="{{route('add-attendance',$schedule->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-3xl text-gray-800 font-medium pb-4">
            Tambah Kehadiran
        </p>
        <div class="">
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <input type="hidden" name="schedule_id" value="{{$schedule->id}}">
            <label class="block text-md text-gray-600" for="report">Laporan</label>
            <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-50 rounded" id="report" name="report" required=""></textarea>
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