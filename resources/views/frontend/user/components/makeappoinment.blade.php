<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form" action="{{ route('appoinment') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" name="name" placeholder="Full name" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="email" name="email" class="form-control" placeholder="Email address.." required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control" name="date" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select" required>
                        <option value="">--select doctor--</option>
                        @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->d_name }}">{{ $doctor->d_name }} --speciality-- {{ $doctor->spaciality }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" name="phone" placeholder="Number.." required>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                </div>
            </div>
            <button type="submit" class="btn bg-primary btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div>
