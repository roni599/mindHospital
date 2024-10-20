<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper  d-none d-lg-flex align-items-center justify-content-center fixed-top">
        {{-- <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ 'ui/backend' }}/assets/images/logo.svg"
                alt="logo" /></a> --}}
        <a class="sidebar-brand brand-logo text-decoration-none text-white font-bold mt-3 ms-2"
            style="letter-spacing: 0.5rem;" href="index.html">
            <h2>MIND</h2>
        </a>
        {{-- <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                src="{{ 'ui/backend' }}/assets/images/logo-mini.svg" alt="logo" /></a> --}}
        <a class="sidebar-brand brand-logo-mini text-decoration-none text-white mt-3 ms-1" href="index.html">
            <h2>M</h2>
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img width="30" height="30" class="rounded-circle object-cover"
                            src="{{ asset('profile-images/' . Auth::user()->profile_photo_path) }}"
                            alt="{{ Auth::user()->name }}" />
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                        <span>Admin</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                        class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items mb-2">
            <a class="nav-link" href="{{ route('index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item menu-items mb-2">
            <a class="nav-link" href="{{ route('add_doctors') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Add Doctors</span>
            </a>
        </li>
        <li class="nav-item menu-items mb-2">
            <a class="nav-link" href="{{ route('adminAppoinment') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Appointments</span>
            </a>
        </li>
        <li class="nav-item menu-items mb-2">
            <a class="nav-link" href="{{ route('alldoctors') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">All Doctors</span>
            </a>
        </li>
    </ul>
</nav>
