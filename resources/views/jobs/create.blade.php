<x-layout>
  <x-slot:heading>
   Create New Job
  </x-slot:heading>
<form method="POST" action="/job">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Create New Job</h2>
      
      <x-form-fieldouter>
          <x-form-label for="title">Title</x-form-label>
          <div class="mt-2">                       
          <x-form-input name="title" id="title" placeholder="Shift Leader" required/>                     
            <x-form-error name="title"/>
          </div>
        </x-form-fieldouter>

      <x-form-fieldouter>
          <x-form-label for="salary">Salary</x-form-label>         
          <div class="mt-2">             
              <x-form-input name="salary" id="salary" placeholder="50000" required/>
              <x-form-error name="salary"/>
          </div>
        </x-form-fieldouter>
    
    </div>

    
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <x-form-button>Save</x-form-button>
  </div>
</form>

</x-layout>