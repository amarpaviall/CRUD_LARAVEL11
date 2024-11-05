<x-layout>
  <x-slot:heading>
   Log In
  </x-slot:heading>
    <form method="POST" action="/login">
      @csrf
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <x-form-fieldouter>
              <x-form-label for="email">Email Id</x-form-label>
              <div class="mt-2">                       
              <x-form-input type="email" name="email" id="email" required/>                     
                <x-form-error name="email"/>
              </div>
          </x-form-fieldouter>

          <x-form-fieldouter>
              <x-form-label for="password">Password</x-form-label>         
              <div class="mt-2">             
                  <x-form-input type="password" name="password" id="password" required/>
                  <x-form-error name="password"/>
              </div>
            </x-form-fieldouter>
        
        </div>

        
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <x-form-button>Log In</x-form-button>
      </div>
    </form>

</x-layout>