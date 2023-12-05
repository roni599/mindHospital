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
                    <!--content-wrapper body-->
                   @include('backend.admin.components.maincontent')
                    <!--content-wrapper body-->
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
