<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('backend.admin.components.head')
    <style>
        input {
            color: black;
            padding: 5px;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    <!-- container-scroller-starts -->
    <div class="container-scroller">
        <!--sidebar-->
        @include('backend.admin.components.sidebar')
        <!--sidebar-->
        <!-- page-body-wrapper starts -->
        <div class="container-fluid page-body-wrapper">
            <!--navbar-->
            @include('backend.admin.components.navbar')
            <!--navbar-->
            <!-- main-panel starts -->
            <div class="main-panel">
                <!-- content-wrapper start -->
                <div class="content-wrapper">
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between"
                            role="alert">
                            <strong>{{ session()->get('message') }}</strong>
                            <button type="button" class="fw-bold" data-bs-dismiss="alert" aria-label="Close">X</button>
                        </div>
                    @endif

                    <h1 class="text-center mt-0">Edit Doctors</h1>
                    <div class="container text-center" style="padding-top:10px">
                        <form action="{{ route('editDoctors',$doctor->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div style="padding: 10px;">
                                <label for="d_name">Doctor Name : </label>
                                <input type="text" name="d_name" id="d_name" class="border-0 rounded"
                                    placeholder="write the name" required="" value="{{ $doctor->d_name }}">
                            </div>
                            <div style="padding: 10px;">
                                <label for="d_phone">Phone : </label>
                                <input type="text" name="d_phone" id="d_phone" class="border-0 rounded"
                                    placeholder="write the number" required="" value="{{ $doctor->d_phone }}">
                            </div>
                            <div style="padding: 10px;">
                                <label for="d_spaciality">Spaciality : </label>
                                <input type="text" name="spaciality" id="spaciality" class="border-0 rounded"
                                    placeholder="write the spaciality" required="" value="{{ $doctor->spaciality }}">
                            </div>
                            <div style="padding: 10px;">
                                <label for="d_room">Room No : </label>
                                <input type="text" class="border-0 rounded" name="d_room" id="d_room"
                                    placeholder="write the Room No" required="" value="{{ $doctor->d_room }}">
                            </div>
                            <div style="padding: 10px;">
                                <label for="d_image" style="margin-left: -110px">Old Image : </label>
                                <img width="100" height="100"
                                    src="{{ asset('storage/doctors_images') }}/{{ $doctor->d_image }}" alt="">
                            </div>
                            <div style="padding-left: 140px;padding-top: 5px;">
                                <label for="d_image">Doctor Image : </label>
                                <input type="file" name="image" id="image" class="text-white rounded p-2">
                            </div>
                            <div style="padding-top: 15px;padding-left: 45px;">
                                <input type="submit" class="btn btn-sm btn-primary p-2" style="width: 380px;">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!--footer-->
                @include('backend.admin.components.footer')
                <!--footer-->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller-ends -->
    <!-- plugins:js:starts -->
    @include('backend.admin.components.script')
    <!-- plugins:js:ends -->
</body>

</html>
