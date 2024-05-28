{{-- x prefix to ensure that they'r unique, not interfere with existing html tag --}}
<x-layout heading="All Jobs">
    <h1>All job listing are here.</h1>

    <div class="space-y-4 py-2.5">
        @foreach ($jobs as $job)
           <a href="/job/{{ $job['id'] }}" class=" block px-4 py-6 border border-gray-200 rounded-lg">
            <div class="font-bold">
                {{ $job->employer->name }}
            </div>
            <div>
                <strong class="text-blue-500 hover:underline">{{ $job['title'] }}</strong>: The salary is {{ $job['salary'] }} per year.
            </div>
           </a>
    @endforeach
    </div>

    <div>
        {{-- creating pagination buttons automatically --}}
        {{ $jobs->links() }}
    </div>
</x-layout>