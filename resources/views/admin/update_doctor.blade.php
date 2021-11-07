
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
        <div align="center" style="padding: 100px; padding-top: 120px;">
            <form method="POST" action="{{ url('update_doctor',$data->id) }}" enctype="multipart/form-data">
                @csrf
    
                <div>
                    <x-jet-label style="color: aquamarine" for="name" value="{{ __('Name') }}" />
                    <x-jet-input style="color: black" id="name" class="block mt-1 w-full" type="text" name="name" value="{{$data->name}}" required autofocus autocomplete="name" />
                </div>
                <div>
                    <x-jet-label style="color: aquamarine" for="phone" value="{{ __('phone') }}" />
                    <x-jet-input style="color: black" id="phone" class="block mt-1 w-full" type="number" name="phone" value="{{$data->phone}}" required autofocus autocomplete="name" />
                </div>
                <div>
                    <x-jet-label style="color: aquamarine" for="espesialest" value="{{ __('espesialest') }}" />
                    <select id="address" style="color: black" class="block mt-1 w-full" type="text" name="espesialest" value="{{$data->name}}" required autofocus autocomplete="name" >
                    <option>--select--</option>
                    <option value="heart">heart</option>
                    <option value="eye">eye</option>
                    <option value="skine">skine</option>
                    <option value="nose">nose</option>
                    </select>
                </div>
                <div>
                    <x-jet-label style="color: aquamarine" for="room" value="{{ __('room_number') }}" />
                    <x-jet-input style="color: black" id="room" class="block mt-1 w-full" type="text" name="room" value="{{$data->room}}"  required autofocus autocomplete="name" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label style="color: aquamarine" for="email" value="{{ __('Email') }}" />
                    <x-jet-input style="color: black" id="email" class="block mt-1 w-full" type="email" name="email" value="{{$data->email}}" required />
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
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
   @include('admin.scriept')
    <!-- End custom js for this page -->
  </body>
</html>
