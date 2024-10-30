<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    {{-- <h1>{{ $job['employer']['name'] }}</h1> --}}
    <h2>{{ $job->title}}</h2>
    <p>{{ $job->salary }}</p>
    
    <p class="mt-6">
      <x-button href="/job/{{ $job->id}}/edit">Edit Job</x-button>
    </p>
</x-layout>