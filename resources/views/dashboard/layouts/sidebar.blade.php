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
                <li><a href="{{ route('student-affairs.registration.index') }}" class="nav-link">Pendaftaran Siswa</a>
                </li>
                <li><a href="{{ route('student-affairs.students.index') }}" class="nav-link">Data Siswa</a></li>
                <li><a href="{{ route('student-affairs.parents.index') }}" class="nav-link">Data Orangtua</a></li>
            </ul>
        </li>

        <!-- Epic: Sekolah -->
        <li class="nav-item">
            <a href="#schoolMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-school"></i> Sekolah
            </a>
            <ul class="collapse list-unstyled" id="schoolMenu">
                <li><a href="{{ route('school.structure.index') }}" class="nav-link">Struktur Sekolah</a></li>
                <li><a href="{{ route('school.teachers.index') }}" class="nav-link">Data Guru</a></li>
                <li><a href="{{ route('school.staff.index') }}" class="nav-link">Data Staff</a></li>
            </ul>
        </li>

        <!-- Epic: Akademik -->
        <li class="nav-item">
            <a href="#academicMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-book"></i> Akademik
            </a>
            <ul class="collapse list-unstyled" id="academicMenu">
                <li><a href="{{ route('academics.curriculum.index') }}" class="nav-link">Kurikulum</a></li>
                <li><a href="{{ route('academics.classes.index') }}" class="nav-link">Kelas</a></li>
                <li><a href="{{ route('academics.schedules.index') }}" class="nav-link">Jadwal Kelas</a></li>
                <li><a href="{{ route('academics.calendar.index') }}" class="nav-link">Kalendar Akademik</a></li>
                <li><a href="{{ route('academics.syllabus.index') }}" class="nav-link">Silabus</a></li>
            </ul>
        </li>

        <!-- Epic: Keuangan -->
        <li class="nav-item">
            <a href="#financeMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-money-bill-wave"></i> Keuangan
            </a>
            <ul class="collapse list-unstyled" id="financeMenu">
                <li><a href="{{ route('finance.tuition-fees.index') }}" class="nav-link">SPP</a></li>
                <li><a href="{{ route('finance.other-fees.index') }}" class="nav-link">Biaya Lainnya</a></li>
            </ul>
        </li>

        <!-- Epic: Absensi -->
        <li class="nav-item">
            <a href="#attendanceMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-calendar-check"></i> Kehadiran
            </a>
            <ul class="collapse list-unstyled" id="attendanceMenu">
                <li><a href="{{ route('attendance.students.index') }}" class="nav-link">Siswa</a></li>
                <li><a href="{{ route('attendance.teachers.index') }}" class="nav-link">Guru</a></li>
                <li><a href="{{ route('attendance.staff.index') }}" class="nav-link">Staff</a></li>
                <li><a href="{{ route('attendance.notifications.index') }}" class="nav-link">Notifikasi Orangtua</a>
                </li>
            </ul>
        </li>

        <!-- Epic: Rapot -->
        <li class="nav-item">
            <a href="#reportMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-file-alt"></i> Rapot
            </a>
            <ul class="collapse list-unstyled" id="reportMenu">
                <li><a href="{{ route('reports.input-report.index') }}" class="nav-link">Manual Input</a></li>
                <li><a href="{{ route('reports.index') }}" class="nav-link">Download Rapot</a></li>
            </ul>
        </li>

        <!-- Epic: Pengumuman -->
        <li class="nav-item">
            <a href="{{ route('announcement.index') }}" class="nav-link text-white">
                <i class="fa fa-bullhorn"></i> Pengumuman
            </a>
        </li>

        <!-- Epic: Asrama -->
        <li class="nav-item">
            <a href="#dormMenu" class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse">
                <i class="fa fa-bed"></i> Asrama
            </a>
            <ul class="collapse list-unstyled" id="dormMenu">
                <li><a href="{{ route('dormitory.rooms.index') }}" class="nav-link">Pembagian Asrama</a></li>
                <li><a href="{{ route('dormitory.rooms.lessons.index') }}" class="nav-link">Jadwal Asrama</a></li>
            </ul>
        </li>
    </ul>

    <a href="{{ route('logout') }}" class="btn btn-danger mt-4">Logout</a>

</aside>
