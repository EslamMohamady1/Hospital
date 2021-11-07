
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public"/>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
           
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                    </x-slot>
            
                    <x-jet-validation-errors class="mb-4" />
                   <!--
                    @if(session()->has('massege'))
                        <div class="alert alert-success">
                            <button type="button" class="close"  data-dismiss = "alert"> 
                                x 
                            </button>
                            {{session()->get('massege')}}
                        </div>

                    @endif
                                    -->
                    <form method="POST" action="{{ url('send_email',$data->id) }}" >
                        @csrf
            
                        <div>
                            <x-jet-label style="color: aquamarine" for="greeting" value="{{ __('greeting') }}" />
                            <x-jet-input style="color: black" id="greeting" class="block mt-1 w-full" type="text" name="greeting" :value="old('greeting')"  />
                        </div>
                        <div>
                            <x-jet-label style="color: aquamarine" for="body" value="{{ __('body') }}" />
                            <x-jet-input style="color: black" id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')"  />
                        </div>
                       
                        <div>
                            <x-jet-label style="color: aquamarine" for="action_text" value="{{ __('action_text') }}" />
                            <x-jet-input style="color: black" id="action_text" class="block mt-1 w-full" type="text" name="action_text"   />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label style="color: aquamarine" for="action_url" value="{{ __('action_url') }}" />
                            <x-jet-input style="color: black" id="action_url" class="block mt-1 w-full" type="text" name="action_url" :value="old('action_url')" required />
                        </div>
                      
                        <div class="mt-4">
                            <x-jet-label style="color: aquamarine" for="End_Part" value="{{ __('End_Part') }}" />
                            <x-jet-input style="color: black" id="End_Part" class="block mt-1 w-full" type="text" name="End_Part" :value="old('End_Part')" required />
                        </div>
                      
                      
                       
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>
            
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif
            
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
            
                            <x-jet-button class="ml-4">
                                {{ __('Register') }}
                            </x-jet-button>
                        </div>
                    </form>
           
            
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    <!-- inject:js -->
   @include('admin.scriept')
    <!-- End custom js for this page -->
  </body>
</html>
