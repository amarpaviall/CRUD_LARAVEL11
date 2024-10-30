<x-layout>
  <x-slot:heading>
   Update Job
  </x-slot:heading>
<form method="POST" action="/job/{{ $job->id }}">
   @csrf
   @method('PATCH')
   
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">            
              <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="Shift Leader" value="{{ $job->title }}" required>
            </div>

            <div class="text-xs text-red-500 font-semibold mt-1">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
          </div>
        </div>      
      </div>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">            
              <input type="text" name="salary" id="salary" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="50000" value="{{ $job->salary }}" required>
            </div>

            <div class="text-xs text-red-500 font-semibold mt-1">
                @error('salary')
                    {{ $message }}
                @enderror
            </div>
          </div>
        </div>      
      </div>
    </div>

    
  </div>

  <div class="mt-6 flex items-center justify-between gap-x-6">
     <div class="flex items-center gap-x-6">
     <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
     </div>
    <div class="flex items-center gap-x-6">
     <a href="/job/{{ $job->id }}" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
      </div>
  </div>
</form>
<form method="POST" action="/job/{{ $job->id }}" id="delete-form" class="hidden">
  @csrf
  @method('DELETE')
</form>
</x-layout>