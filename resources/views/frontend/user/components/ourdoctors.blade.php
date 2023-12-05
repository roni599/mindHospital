<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp h1">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach ($doctors as $key=> $doctor )
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="{{ asset('storage/doctors_images') }}/{{ $doctor->d_image }}"  alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{ $doctor->d_name }}</p>
                        <span class="text-sm text-grey">{{ $doctor->spaciality }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>