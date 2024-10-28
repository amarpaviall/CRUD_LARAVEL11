<x-layout>
  <x-slot:heading>
    Job Listings
  </x-slot:heading>
  @foreach($jobs as $job)
     <div>
        <a href="/job/{{ $job['id'] }}">
          <strong>{{ $job['title'] }} : </strong> Pays {{ $job['salary']}} per year.
        </a> 
      </div>
  @endforeach
</x-layout>