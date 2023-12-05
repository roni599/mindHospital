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

    <!--healthwelcome-->
    @include('frontend.user.components.healthwelcome')
    <!--healthwelcome-->

    <!--our doctors-->
    @include('frontend.user.components.ourdoctors')
    <!--our doctors-->

    <!--latest news-->
    @include('frontend.user.components.latestnews')
    <!--latest news-->

    <!--make appoinment-->
    @include('frontend.user.components.makeappoinment')
    <!--make appoinment-->

    <!-- .banner-home -->
    @include('frontend.user.components.banner')
    <!-- .banner-home -->

    <!--footer-->
    @include('frontend.user.components.footer')
    <!--footer-->

    <!--script-->
    @include('frontend.user.components.script')
    <!--script-->
</body>

</html>
