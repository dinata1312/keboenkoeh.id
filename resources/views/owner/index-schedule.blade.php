<x-app-layout>
    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <svg class="svg-inline--fa fa-list fa-w-16 mr-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path>
            </svg><!-- <i class="fas fa-list mr-3"></i> --> Penjadwalan
            &nbsp;
            @if(auth()->user()->role_id == 1)
            <a class="px-1 py-1 text-white text-sm font-light tracking-wider bg-green-500 rounded" href="/owner/add-schedule">Tambah data</a>
            @endif
        </p>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">#</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nama</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Lahan</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Hari Kerja</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Jam Mulai</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Jam Selesai</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">-</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $dt)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{$no++}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $dt->name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $dt->land }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $dt->day }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $dt->start }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $dt->finish }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a class="px-3 py-1 text-white font-light tracking-wider bg-blue-900 rounded" href="/owner/detail-attendances/users/{{$dt->user_id}}">Detail</a>
                            @if(Auth::user()->role_id == 1)
                            <a class="px-3 py-1 text-white font-light tracking-wider bg-yellow-900 rounded" href="/owner/detail-attendances/users/{{$dt->id}}/edit">Edit</a>
                            <a class="px-3 py-1 text-white font-light tracking-wider bg-red-900 rounded" href="/owner/detail-attendances/users/{{$dt->id}}/delete">Delete</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>