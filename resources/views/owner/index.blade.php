<x-app-layout>
    <h1 class="text-3xl text-black pb-6">Dashboard</h1>

    <div class="flex flex-wrap mt-6">
        <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-check mr-3"></i> Harga Cabai Rawit Merah perminggu
            </p>
            <div class="p-6 bg-white">
                <canvas id="chartOne" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-check mr-3"></i> Harga Cabai Rawit Merah perhari
            </p>
            <div class="p-6 bg-white">
                <canvas id="chartTwo" width="400" height="200"></canvas>
            </div>
        </div>
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
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: [
                    '04/06/2021',	'11/06/2021',	'18/06/2021',
                    '25/06/2021',	'02/07/2021',	'09/07/2021',
                    '16/07/2021',	'23/07/2021',	'30/07/2021',
                    '06/08/2021',	'13/08/2021',	'20/08/2021',
                    '27/08/2021',	'03/09/2021',	'10/09/2021',
                    '17/09/2021',	'24/09/2021',	'01/10/2021',
                    '08/10/2021',	'15/10/2021'
                ],
                datasets: [{
                    label: 'Harga',
                    data: [
                        27000,	 25000, 	 29000,
                        46500,	 45000, 	 54000,
                        53500,	 50000, 	 30000,
                        26000,	 17500, 	 14500,
                        11000,	 13500, 	 15000,
                        15500,	 15500, 	 16500,
                        19000,	 19000
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

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: [
                    '20/09/2021',	'21/09/2021',	'22/09/2021',	
                    '23/09/2021',	'24/09/2021',	'27/09/2021',	
                    '28/09/2021',	'29/09/2021',	'30/09/2021',	
                    '01/10/2021',	'04/10/2021',	'05/10/2021',
                    '06/10/2021',	'07/10/2021',	'08/10/2021',
                    '11/10/2021',	'12/10/2021',	'13/10/2021',
                    '14/10/2021',	'15/10/2021'
                ],
                datasets: [{
                    label: 'Harga',
                    data: [
                    15500, 	 15500, 	 15500, 	 
                    15500, 	 15500, 	 15000, 	 
                    15500, 	 15500, 	 16500, 	 
                    16500, 	 16500, 	 16500, 	 
                    17500, 	 19000, 	 19000, 	 
                    17500, 	 17500, 	 17500, 	 
                    19000, 	 19000
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
    </script>

</x-app-layout>
