<!-- resources/views/layouts/sidebar.blade.php -->
<aside class="sidebar bg-dark text-white p-3">
    <h2>SIAKAD SUP</h2>
    <ul class="nav flex-column">

        <!-- Epic: Dashboard -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link text-white">
                <i class="fa fa-tachometer-alt"></i> Dashboard
            </a>
        </li>

        <!-- Epic: Kesiswaan -->
        <li class="nav-item">
            <a href="#kesiswaanMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-user"></i> Kesiswaan
            </a>
            <ul class="collapse list-unstyled" id="kesiswaanMenu">
                <li><a href="{{ route('student-affairs.registration.index') }}" class="nav-link">Student
                        Registration</a>
                </li>
                <li><a href="{{ route('student-affairs.students.index') }}" class="nav-link">Student Data</a></li>
                <li><a href="{{ route('student-affairs.parents.index') }}" class="nav-link">Parent Data</a></li>
            </ul>
        </li>

        <!-- Epic: Sekolah -->
        <li class="nav-item">
            <a href="#schoolMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-school"></i> School
            </a>
            <ul class="collapse list-unstyled" id="schoolMenu">
                <li><a href="{{ route('school.structure.index') }}" class="nav-link">School Structure</a></li>
                <li><a href="{{ route('school.teachers.index') }}" class="nav-link">Teacher Data</a></li>
                <li><a href="{{ route('school.staff.index') }}" class="nav-link">Staff Data</a></li>
            </ul>
        </li>

        <!-- Epic: Akademik -->
        <li class="nav-item">
            <a href="#academicMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-book"></i> Academic
            </a>
            <ul class="collapse list-unstyled" id="academicMenu">
                <li><a href="{{ route('academics.curriculum.index') }}" class="nav-link">Curriculum</a></li>
                <li><a href="{{ route('academics.classes.index') }}" class="nav-link">Classes</a></li>
                <li><a href="{{ route('academics.schedules.index') }}" class="nav-link">Class Schedule</a></li>
                <li><a href="{{ route('academics.calendar.index') }}" class="nav-link">Academic Calendar</a></li>
                <li><a href="{{ route('academics.syllabus.index') }}" class="nav-link">Syllabus</a></li>
            </ul>
        </li>

        <!-- Epic: Keuangan -->
        <li class="nav-item">
            <a href="#financeMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-money-bill-wave"></i> Finance
            </a>
            <ul class="collapse list-unstyled" id="financeMenu">
                <li><a href="{{ route('finance.tuition-fees.index') }}" class="nav-link">SPP</a></li>
                <li><a href="{{ route('finance.other-fees.index') }}" class="nav-link">Other Fees</a></li>
            </ul>
        </li>

        <!-- Epic: Absensi -->
        <li class="nav-item">
            <a href="#attendanceMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-calendar-check"></i> Attendance
            </a>
            <ul class="collapse list-unstyled" id="attendanceMenu">
                <li><a href="{{ route('attendance.students.index') }}" class="nav-link">Students</a></li>
                <li><a href="{{ route('attendance.teachers.index') }}" class="nav-link">Teachers</a></li>
                <li><a href="{{ route('attendance.staff.index') }}" class="nav-link">Staff</a></li>
                <li><a href="{{ route('attendance.notifications.index') }}" class="nav-link">Parent Notifications</a>
                </li>
            </ul>
        </li>

        <!-- Epic: Rapot -->
        <li class="nav-item">
            <a href="#reportMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-file-alt"></i> Report Cards
            </a>
            <ul class="collapse list-unstyled" id="reportMenu">
                <li><a href="{{ route('reports.input-report.index') }}" class="nav-link">Manual Input</a></li>
                <li><a href="{{ route('reports.index') }}" class="nav-link">Download Report</a></li>
            </ul>
        </li>

        <!-- Epic: Pengumuman -->
        <li class="nav-item">
            <a href="{{ route('announcement.index') }}" class="nav-link text-white">
                <i class="fa fa-bullhorn"></i> Announcements
            </a>
        </li>

        <!-- Epic: Asrama -->
        <li class="nav-item">
            <a href="#dormMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-bed"></i> Dormitory
            </a>
            <ul class="collapse list-unstyled" id="dormMenu">
                <li><a href="{{ route('dormitory.rooms.index') }}" class="nav-link">Dorm Assignment</a></li>
                <li><a href="{{ route('dormitory.rooms.lessons.index') }}" class="nav-link">Dorm Schedules</a></li>
            </ul>
        </li>
    </ul>

    <a href="{{ route('logout') }}" class="btn btn-danger mt-4">Logout</a>

</aside>
