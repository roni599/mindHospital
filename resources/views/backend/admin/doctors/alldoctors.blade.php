<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.admin.components.head')
</head>

<body>
    
    <div class="container-scroller">
        <!-- sidebar-->
        @include('backend.admin.components.sidebar')
        <!--sidebar-->
        <!-- page-body-wrapper-->
        <div class="container-fluid page-body-wrapper">
            <!--navbar-->
            @include('backend.admin.components.navbar')
            <!--navbar-->
            <!-- main-panel-->
            <div class="main-panel">
                <div class="content-wrapper">
                    <h2 class="text-center h2 mb-4">Appointment Table</h2>
                    <div class="mt-4">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Doctor Name</th>
                              <th>Doctor Phone</th>
                              <th>Spaciality</th>
                              <th>Doctor Room</th>
                              <th>Doctor Image</th>
                              <th>Delete</th>
                              <th>Update</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse ($doctor as $key=> $doctors)
                            <tr>
                                <td>{{ $doctors->id }}</td>
                                <td>{{ $doctors->d_name }}</td>
                                <td>{{ $doctors->d_phone }}</td>
                                <td>{{ $doctors->spaciality }}</td>
                                <td>{{ $doctors->d_room }}</td>
                                <td><img src="{{ asset('/doctors_images') }}/{{ $doctors->d_image }}" alt=""></td>
                                <th><a href="{{ route('deleteDoctors',$doctors->id) }}" onclick="return confirm('are you sure want to dele this doctor')" class="btn btn-sm btn-primary">Delete</a></th>
                                <th><a href="{{ route('updateDoctors',$doctors->id) }}"  class="btn btn-sm btn-primary">Update</a></th>
                              </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center fw-bold">No data Found</td>
                                </tr>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                </div>
                <!--footer-->
                @include('backend.admin.components.footer')
                <!--footer-->
            </div>
            <!-- main-panel-->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('backend.admin.components.script')
</body>

</html>
