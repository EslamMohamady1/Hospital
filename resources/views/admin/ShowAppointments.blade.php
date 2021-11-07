
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
        <div align="center" style="padding: 10px; padding-top: 120px;">
            <table>
                <tr style="background-color:rgba(14, 4, 1, 0.836); color:whitesmoke">
                    <th style="padding:10px ; font-size:20px ; color:whitesmoke">Doctor</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">Message</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">Date</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">Email</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">PhoneNumber</th>
                    <th style="padding:10px ; font-size:20px;color:whitesmoke">Statuse</th>
                    
                    <td style="padding:10px ; font-size:20px;color:whitesmoke">approved
                    </td>
                    <td style="padding:10px ; font-size:20px;color:whitesmoke">cancel Appointment
                    </td>
                    <td style="padding:10px ; font-size:20px;color:whitesmoke">sentEmail
                    </td>
                </tr>
                @foreach ($showappointments as $myappoints)
                    <tr style="background-color:rgba(14, 4, 1, 0.836); color:whitesmoke">
                        <th >{{$myappoints->name}}</th>
                        <th >{{$myappoints->message}}</th>
                        <th >{{$myappoints->data}}</th>
                        <th >{{$myappoints->email}}</th>
                        <th >{{$myappoints->phone}}</th>
                        <th >{{$myappoints->statuse}}</th>
                        
                        <td style="padding:10px ; font-size:20px;color:black"><a href="{{url('aprove_appointment', $myappoints->id)}}" onclick="return confirm('are you want to approve this appointment?')" class="btn btn-success" >approve</a> 
                        </td>
                        <td style="padding:10px ; font-size:20px;color:black"><a href="{{url('admin_cancel_appointment', $myappoints->id)}}" onclick="return confirm('are you want to delet this appointment?')" class="btn btn-danger" >cancel</a> 
                        </td>
                        <td style="padding:10px ; font-size:20px;color:black"><a href="{{url('emailview', $myappoints->id)}}"  class="btn btn-success" >sentEmail</a> 
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
