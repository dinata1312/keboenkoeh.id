<x-app-layout>
    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <svg class="svg-inline--fa fa-list fa-w-16 mr-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path>
            </svg>
            <!-- <i class="fas fa-list mr-3"></i> --> Penjualan Hasil Panen
            &nbsp;
            <a class="px-1 py-1 text-white text-sm font-light tracking-wider bg-green-500 rounded" href="{{ url('add-penjualan') }}">Tambah data</a>
        </p>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">#</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Jenis Tanaman</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Jumlah</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Harga</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">-</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($datas as $data)
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-6 border-b border-grey-light">{{ $no++ }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php
                                    $plantName = \App\Models\PlantType::where('id', $data->plant_id)->first();
                                    echo $plantName->name;
                                @endphp
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ number_format($data->amount) }} Kg</td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @if ($data->price == 0)
                                    [Belum panen]
                                @else
                                    Rp{{ number_format($data->price) }}</td>
                                @endif
                            <td class="py-4 px-6 border-b border-grey-light">
                                <a class="px-4 py-1 text-white font-light tracking-wider bg-blue-900 rounded" href="{{ url('detail-penjualan/'. $data->id ) }}">Detail</a>
                                <a class="px-4 py-1 text-white font-light tracking-wider bg-green-900 rounded" href="{{ url('edit-penjualan/'. $data->id ) }}">edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>