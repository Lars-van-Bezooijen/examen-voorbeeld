<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Abonnement van {{ $subscription->customer->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="customer-data">
                        <p>Naam: {{ $subscription->customer->name }}</p>
                        <p>Adres: {{ $subscription->customer->address }}</p>
                        <p>Postcode: {{ $subscription->customer->zip }}</p>
                        <p>Stad: {{ $subscription->customer->city }}</p>
                        <p>Telefoonnummer: {{ $subscription->customer->phone }}</p>
                        <p>Email: {{ $subscription->customer->email }}</p>
                        <p>Systeem: {{ $subscription->solarPanelSystem->name }}</p>
                    </div>
                    <h3 class="text-2xl">Zonne panelen</h3>
                    @livewire('panel-switcher', ['subscription' => $subscription])

                    <div>
                        <p>Weather type: <span id="weatherType"></span></p>
                        <img src="" id="weatherImg" alt="">
                        <p id="weatherTemp"></p>
                        <p>Verwachte opbrengst van vandaag: <span id="panelsKwh"></span>kwh</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        // 6485f382b6a341ca9d495540240503
        // http://api.weatherapi.com/v1/current.json?key=6485f382b6a341ca9d495540240503&q=Belgium

        fetch('http://api.weatherapi.com/v1/current.json?key=6485f382b6a341ca9d495540240503&q=Breda&aqi=no')
            .then(response => response.json())
            .then(data => {
                console.log(data);
                document.getElementById('weatherType').innerText = data.current.condition.text;
                document.getElementById('weatherImg').src = data.current.condition.icon;
                document.getElementById('weatherTemp').innerText = data.current.temp_c + '°C';
                document.getElementById('panelsKwh').innerText = calculatePanelEnergy(data.current.temp_c, data.current.condition.text, {{ $subscription->panels->count() }});
            });

            function calculatePanelEnergy(temp, type, panelCount) {
                    
            }
    </script>
</x-app-layout>
