{{-- x prefix to ensure that they'r unique, not interfere with existing html tag --}}
<x-layout heading="All Jobs">
    <h1>All job listing are here.</h1>

    <ul>
        @foreach ($jobs as $job)
        <li>
           <a href="/job/{{ $job['id'] }}">
            <strong class="text-blue-500 hover:underline">{{ $job['title'] }}</strong>: The salary is {{ $job['salary'] }} per year.
           </a>
        </li>
    @endforeach
    </ul>
</x-layout>