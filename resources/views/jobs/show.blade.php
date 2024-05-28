<x-layout>
    <x-slot:heading>
        {{ $job['title'] }} Job
    </x-slot:heading>
    <h2 class="text-lg font-semibold">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>