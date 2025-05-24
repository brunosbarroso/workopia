<x-layout>
    <h1>Job Listings</h1>
    <ul>
    @forelse ( $jobs as $job )
        <li>{{ $job }}</li>
        @empty
        <li>No jobs found.</li>
        @endforelse
    </ul>
</x-layout>
