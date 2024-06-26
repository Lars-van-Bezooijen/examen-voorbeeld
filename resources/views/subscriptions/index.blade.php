<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscriptions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                <a href="{{ route('subscriptions.create') }}" class="bg-blue-500 rounded-md p-2 text-white font-bold mx-4">Create</a>

                    <ul>
                        @forelse($subscriptions as $subscription)
                            <li class="m-4 border-2 p-4 text-gray-900">
                                <a href="{{route('subscriptions.show', $subscription->id)}}">
                                    {{$subscription->customer->name}} {{ $subscription->customer->address }} <br>
                                    type systeem: <b>{{ $subscription->solarPanelSystem->name }}</b> <br>
                                    aantal panelen: <b>{{ $subscription->panels->count() }}</b>
                                </a>

                            </li>
                        @empty
                            <li><i>Momenteel geen subscriptions</i></li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
