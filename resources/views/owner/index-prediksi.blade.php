<x-app-layout>
    <h1 class="text-3xl text-black pb-6">Prediksi Harga</h1>
    @php
        $getDataPlantType = \App\Models\PlantType::all();
        // dd($averages);
        $no = 0;
    @endphp
    <div class="flex flex-wrap mt-6">
        @foreach ($getDataPlantType as $plantType)
            <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-check mr-3"></i> Prediksi harga {{ $plantType->name }}
                </p>
                <div class="p-6 bg-white">
                    <canvas id="chart{{ $no++ }}" width="400" height="200"></canvas>
                </div>
            </div>
        @endforeach
    </div>

    <div class="w-full mt-12">
        {{-- <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Latest Reports
        </p>
        <div class="bg-white overflow-auto">
        </div> --}}
    </div>
            
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        
        <?php $chart = 0; ?>
        @foreach ($getDataPlantType as $plantType)
            var myChart<?php echo $chart; ?> = new Chart(chart<?php echo $chart; ?>, {
                type: 'bar',
                data: {
                    labels: [<?php
                        $no = count($averages) - 1;
                        while($no >= 0){
                            if($averages[$no][0] == $plantType->id){
                                echo strval($averages[$no][1].', ');
                            }
                            $no--;
                        }
                        ?>],
                    datasets: [{
                        label: 'Harga',
                        data: [
                            27000,	 25000, 	 29000,
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });      
            @php $chart++; @endphp
        @endforeach
    </script>

</x-app-layout>
