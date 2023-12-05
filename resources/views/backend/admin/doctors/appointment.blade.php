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
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Doctor</th>
                              <th>Status</th>
                              <th>Approve</th>
                              <th>Cancel</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse ($appoinment as $key=> $appoinments)
                            <tr>
                                <td>{{ $appoinments->id }}</td>
                                <td>{{ $appoinments->name }}</td>
                                <td>{{ $appoinments->email }}</td>
                                <td>{{ $appoinments->phone }}</td>
                                <td>{{ $appoinments->doctor }}</td>
                                <td>{{ $appoinments->status }}</td>
                                <th><a href="{{ route('approve',$appoinments->id) }}" class="btn btn-sm btn-primary">Approve</a></th>
                                <th><a href="{{ route('cancel',$appoinments->id) }}" class="btn btn-sm btn-primary">Cancel</a></th>
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
