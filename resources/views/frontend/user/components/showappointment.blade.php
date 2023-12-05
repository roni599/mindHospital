<!DOCTYPE html>
<html lang="en">
<!--head-->

<head>
    @include('frontend.user.components.head')
</head>
<!--head-->

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <!--header-->
    <header>
        @include('frontend.user.components.header')
    </header>
    <!--header-->
    <div class="container mt-4">
        <h1 class="text-center h1 fw-bold mb-4">My Appointment Table</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User_ID</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($appointment as $key=> $appointment )
                <tr>
                    <td>{{$appointment->user_id }}</td>
                    <td>{{ $appointment->doctor }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->message }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td><a href="{{ route('delete_appoinment',$appointment->id) }}" onclick="return confirm('Are you want to sure cancel Appointment')" class="btn btn-primary btn-sm">Cancel</a></td>
                </tr>
                @empty
                <td colspan="6"><h5 class="text-center fw-bold h5">No Appoinment Found</h5></td>
                @endforelse
                
            </tbody>
        </table>
    </div>


    <!--script-->
    @include('frontend.user.components.script')
    <!--script-->
</body>

</html>
