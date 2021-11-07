
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
                    <form method="POST" action="{{ url('upload_doctor') }}" enctype="multipart/form-data">
                        @csrf
            
                        <div>
                            <x-jet-label style="color: aquamarine" for="name" value="{{ __('Name') }}" />
                            <x-jet-input style="color: black" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div>
                            <x-jet-label style="color: aquamarine" for="phone" value="{{ __('phone') }}" />
                            <x-jet-input style="color: black" id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autofocus autocomplete="name" />
                        </div>
                        <div>
                            <x-jet-label style="color: aquamarine" for="espesialest" value="{{ __('espesialest') }}" />
                            <select id="address" style="color: black" class="block mt-1 w-full" type="text" name="espesialest" :value="old('address')" required autofocus autocomplete="name" >
                            <option>--select--</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="skine">skine</option>
                            <option value="nose">nose</option>
                            </select>
                        </div>
                        <div>
                            <x-jet-label style="color: aquamarine" for="room" value="{{ __('room_number') }}" />
                            <x-jet-input style="color: black" id="room" class="block mt-1 w-full" type="text" name="room"  required autofocus autocomplete="name" />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label style="color: aquamarine" for="email" value="{{ __('Email') }}" />
                            <x-jet-input style="color: black" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
                        <div class="mt-4">
                            <x-jet-label style="color: aquamarine" for="image" value="{{ __('image') }}" />
                            <x-jet-input style="color: black" id="image" class="block mt-1 w-full" type="file" name="image"  required />
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
