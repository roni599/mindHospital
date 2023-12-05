<!DOCTYPE html>
<html lang="en">

<head>
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

                    <h1 class="text-center mt-2">Add Doctors</h1>
                    <div class="container text-center" style="padding-top:12px">
                        <form action="{{ route('create_doctors') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div style="padding: 15px;">
                                <label for="d_name">Doctor Name : </label>
                                <input type="text" name="d_name" id="d_name" class="border-0 rounded"
                                    placeholder="write the name" required="">
                            </div>
                            <div style="padding: 15px;">
                                <label for="d_phone">Phone : </label>
                                <input type="text" name="d_phone" id="d_phone" class="border-0 rounded"
                                    placeholder="write the number" required="">
                            </div>
                            <div style="padding: 15px;">
                                <label for="d_spaciality">Spaciality : </label>
                                <select name="spaciality" id="spaciality" style="width: 210px;"
                                    class="p-2 border-0 rounded" required="">
                                    <option value="">--Select--</option>
                                    <option value="skin">skin</option>
                                    <option value="medecine">medecine</option>
                                    <option value="cardiology">cardiology</option>
                                </select>
                            </div>
                            <div style="padding: 15px;">
                                <label for="d_room">Room No : </label>
                                <input type="text" class="border-0 rounded" name="d_room" id="d_room"
                                    placeholder="write the Room No" required="">
                            </div>
                            <div style="padding-left: 140px;padding-top: 5px;">
                                <label for="d_image">Doctor Image : </label>
                                <input type="file" name="image" id="image" class="text-white rounded p-2" required="">
                            </div>
                            <div style="padding-top: 25px;padding-left: 45px;">
                                <input type="submit" class="btn btn-sm btn-primary p-2" style="width: 380px;" required="">
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
