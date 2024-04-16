<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('dashboard') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin Panel</h3>
        </a>
        <div class="border-bottom mb-3" style="width: 100%">
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="{{ asset('adminAssets') }}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Prime Admin</h6>
                    <span>Admin</span>
                </div>
            </div>
        </div>

        <div class="navbar-nav w-100">
            <ul class="nav">
                <li class="ms-4 py-2">
                    <h6>Core</h6>
                </li>
            </ul>
            <a href="{{ route('dashboard') }}" class="nav-item nav-link border-bottom active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <ul class="nav">
                <li class="ms-4 py-2">
                    <h6>Department Module</h6>
                </li>
            </ul>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseItem"><i class="fa fa-laptop me-2"></i>Department</a>
                <div class=" collapse bg-transparent border" id="collapseItem">
                    <a href="{{ route('departments.create') }}" class="dropdown-item py-3">Create Department</a>
                    <a href="{{ route('departments.index') }}" class="dropdown-item py-3">Manage Department</a>
                </div>
            </div>

            <ul class="nav">
                <li class="ms-4 py-3">
                    <h6>Teacher Module</h6>
                </li>
            </ul>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseItem2"><i class="fa fa-user me-2"></i>Teacher</a>
                <div class=" collapse bg-transparent border" id="collapseItem2">
                    <a href="{{ route('teachers.create') }}" class="dropdown-item py-3">Add Teacher</a>
                    <a href="{{ route('teachers.index') }}" class="dropdown-item py-3">Manage Teacher</a>
                </div>
            </div>

            <ul class="nav">
                <li class="ms-4 py-3">
                    <h6>Other Module</h6>
                </li>
            </ul>
            <a href="" class="nav-item nav-link border-bottom"><i class="fa fa-th me-2"></i>Manage Course</a>
            <a href="" class="nav-item nav-link border-bottom"><i class="fa fa-users me-2"></i>Manage Student</a>
            <a href="" class="nav-item nav-link border-bottom"><i class="fa fa-file-alt me-2"></i>Manage Enroll</a>

            <ul class="nav">
                <li class="ms-4 py-3">
                    <h6>Admin Module</h6>
                </li>
            </ul>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseItem3"><i class="fa fa-star"></i> Admin</a>
                <div class=" collapse bg-transparent border" id="collapseItem3">
                    <a href="" class="dropdown-item py-3"> New Admin</a>
                    <a href="" class="dropdown-item py-3">Manage Admin</a>
                </div>
            </div>
        </div>
    </nav>
</div>
