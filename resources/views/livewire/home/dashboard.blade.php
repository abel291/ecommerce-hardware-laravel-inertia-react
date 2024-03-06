@section('title', 'Dashboard')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-neutral-800 dark:text-neutral-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="grid grid-cols-1 lg:grid-cols-8 gap-6 ">

    <div class="lg:col-span-8">
        <x-home.filter-tab :active-tab="$activeTab" :filter-time="$filterTime" />
    </div>
    <div class="lg:col-span-2">
        <x-stat label="Total ingresos">
            @money($totalIncome)
        </x-stat>
    </div>

    <div class="lg:col-span-2">
        <x-stat label="Productos vendidos">
            {{ number_format($productsQuantity) }}
        </x-stat>
    </div>
    <div class="lg:col-span-2">
        <x-stat label="Ordenes Completadas">
            {{ $ordersCompleted }}
        </x-stat>
    </div>
    <div class="lg:col-span-2">
        <x-stat label="Usuarios registrados">
            {{ $registeredUserCount }}
        </x-stat>
    </div>

    <x-content class="lg:col-span-4">
        <x-title>
            Ventas por categoria
            <div class="mt-6 chart-container  ">
                <canvas id="chart-order" class="w-full lg:h-96 relative"></canvas>
            </div>
        </x-title>
    </x-content>

    <x-content class="lg:col-span-4">
        <x-title>
            Nuevos usuarios
            <div class="mt-6 chart-container ">
                <canvas id="chart-users" class="w-full lg:h-96 relative"></canvas>
            </div>
        </x-title>
    </x-content>

    <div class="lg:col-span-6">
        <x-home.order-list :orders-recent="$ordersRecent" />
    </div>

    {{-- <div class="lg:col-span-2">
        <x-home.popular-room :room="$popularRoom" />
    </div> --}}

    {{-- <script>
        window.addEventListener("updateChart", () => {
            console.log(123)
        })
    </script> --}}
</div>


@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('livewire:load', function() {
            const chartUsers = document.getElementById('chart-users');
            const chartOrders = document.getElementById('chart-order');

            const options = {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
            }

            const chart1 = new Chart(chartOrders, {
                type: 'bar',
                data: {
                    labels: @this.productCategory.labels,
                    datasets: [{
                        label: 'Ventas',
                        data: @this.productCategory.data,
                        backgroundColor: ['#0284c7']

                    }]
                },
                options: options
            });

            const chart2 = new Chart(chartUsers, {
                type: 'bar',
                data: {
                    labels: @this.usersChart.labels,
                    datasets: [{
                        label: 'Ventas',
                        data: @this.usersChart.data,
                        backgroundColor: ['#0284c7']

                    }]
                },
                options: options
            });
            document.addEventListener('livewire:update', function() {

                chart1.data.labels = @this.productCategory.labels;
                chart1.data.datasets[0].data = @this.productCategory.data;

                chart1.update();

                chart2.data.labels = @this.usersChart.labels;
                chart2.data.datasets[0].data = @this.usersChart.data;
                chart2.update();
            })
        })
    </script>
@endpush
