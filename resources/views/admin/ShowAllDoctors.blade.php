
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
        <div align="center" style="padding: 1px; padding-top: 120px;">
            <table>
                <tr style="background-color:rgba(14, 4, 1, 0.836); color:whitesmoke">
                    <th style="padding:10px ; font-size:20px ; color:whitesmoke">Doctor</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">specialest</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">room</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">Email</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">PhoneNumber</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">image</th>
                    
                    <td style="padding:10px ; font-size:20px;color:whitesmoke">approved
                    </td>
                    <td style="padding:10px ; font-size:20px;color:whitesmoke">cancel Appointment
                    </td>
                </tr>
                @foreach ($ShowAllDoctors as $doctors)
                    <tr style="background-color:rgba(14, 4, 1, 0.836); color:whitesmoke">
                        <th >{{$doctors->name}}</th>
                        <th >{{$doctors->specialest}}</th>
                        <th >{{$doctors->room}}</th>
                        <th >{{$doctors->email}}</th>
                        <th >{{$doctors->phone}}</th>
                        <th ><img src="doctorimage/{{$doctors->image}}"/></th>
                        
                        <td style="padding:10px ; font-size:20px;color:black"><a href="{{url('admin_update_doctor', $doctors->id)}}"  class="btn btn-success" >update</a> 
                        </td>
                        <td style="padding:10px ; font-size:20px;color:black"><a href="{{url('admin_delet_doctor', $doctors->id)}}" onclick="return confirm('are you want to delet this doctor?')" class="btn btn-danger" >cancel</a> 
                        </td>
                    </tr>
                @endforeach
                
                
            </table>
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
