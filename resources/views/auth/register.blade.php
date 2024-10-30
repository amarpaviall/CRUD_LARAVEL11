<x-layout>
  <x-slot:heading>
   Registration
  </x-slot:heading>
    <form method="POST" action="/register">
      @csrf
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
           <x-form-fieldouter>
              <x-form-label for="name">Name</x-form-label>
              <div class="mt-2">                       
              <x-form-input name="name" id="name" required/>                     
                <x-form-error name="name"/>
              </div>
          </x-form-fieldouter>
          
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
        
            <x-form-fieldouter>
              <x-form-label for="password_confirm">Confirm Password</x-form-label>         
              <div class="mt-2">             
                  <x-form-input type="password" name="password_confirm" id="password_confirm" required/>
                  <x-form-error name="password_confirm"/>
              </div>
            </x-form-fieldouter>

        </div>

        
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
        <x-form-button>Register</x-form-button>
      </div>
    </form>

</x-layout>