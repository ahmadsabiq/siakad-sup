<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentAffairsController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\DormitoryController;
use App\Http\Controllers\ReportCardController;


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'submitlogin']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'login'])->name('logout');

// Route to register page
Route::get('/register', [AuthController::class, 'register'])->name('register');

// Student Affairs
Route::get('/student-affairs/students', [StudentAffairsController::class, 'indexStudents'])->name('student-affairs.students.index');
Route::get('/student-affairs/registration', [StudentAffairsController::class, 'createStudent'])->name('student-affairs.students.create');

Route::get('/student-affairs/register', [StudentAffairsController::class, 'indexRegistration'])->name('student-affairs.registration.index');

Route::get('/student-affairs/parents', [StudentAffairsController::class, 'indexParents'])->name('student-affairs.parents.index');

// School
Route::get('/school/structure', [SchoolController::class, 'indexStructure'])->name('school.structure.index');
Route::get('/school/structure/create', [SchoolController::class, 'createStructure'])->name('school.structure.create');

Route::get('/school/teachers', [SchoolController::class, 'indexTeachers'])->name('school.teachers.index');
Route::get('/school/teachers/create', [SchoolController::class, 'createTeacher'])->name('school.teachers.create');

Route::get('/school/staff', [SchoolController::class, 'indexStaff'])->name('school.staff.index');
Route::get('/school/staff/create', [SchoolController::class, 'createStaff'])->name('school.staff.create');

// Academics
Route::get('/academics/schedules', [AcademicsController::class, 'indexSchedules'])->name('academics.schedules.index');
Route::get('/academics/schedules/create', [AcademicsController::class, 'createSchedule'])->name('academics.schedules.create');

Route::get('/academics/classes', [AcademicsController::class, 'indexClasses'])->name('academics.classes.index');
Route::get('/academics/classes/create', [AcademicsController::class, 'createClass'])->name('academics.classes.create');

Route::get('/academics/curriculum', [AcademicsController::class, 'indexCurriculum'])->name('academics.curriculum.index');
Route::get('/academics/curriculum/create', [AcademicsController::class, 'createCurriculum'])->name('academics.curriculum.create');

Route::get('/academics/calendar', [AcademicsController::class, 'indexCalendar'])->name('academics.calendar.index');
Route::get('/academics/calendar/create', [AcademicsController::class, 'createCalendar'])->name('academics.calendar.create');

Route::get('/academics/Syllabus', [AcademicsController::class, 'indexSyllabus'])->name('academics.syllabus.index');
Route::get('/academics/Syllabus/create', [AcademicsController::class, 'createSyllabus'])->name('academics.syllabus.create');

// Finance
Route::get('/finance/tuition-fees', [FinanceController::class, 'indexTuitionFees'])->name('finance.tuition-fees.index');
Route::get('/finance/other-fees', [FinanceController::class, 'indexOtherFees'])->name('finance.other-fees.index');

// Attendance
Route::get('/attendance/students', [AttendanceController::class, 'indexStudentAttendance'])->name('attendance.students.index');
Route::get('/attendance/teachers', [AttendanceController::class, 'indexTeacherAttendance'])->name('attendance.teachers.index');
Route::get('/attendance/staff', [AttendanceController::class, 'indexStaffAttendance'])->name('attendance.staff.index');
Route::get('/attendance/notifications', [AttendanceController::class, 'showNotification'])->name('attendance.notifications.index');

// Reports
Route::get('/reports/input-report', [ReportCardController::class, 'indexInputReport'])->name('reports.input-report.index');
Route::get('/reports', [ReportCardController::class, 'indexReportCard'])->name('reports.index');
Route::get('/reports/create', [ReportCardController::class, 'createReportCard'])->name('reports.create');

// Announcement
Route::get('/announcement', [AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');
Route::get('/announcement/create', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');

// Dormitory
Route::get('/dormitory/rooms', [DormitoryController::class, 'indexRoomAllocation'])->name('dormitory.rooms.index');
Route::get('/dormitory/rooms/create', [DormitoryController::class, 'createRoomAllocation'])->name('dormitory.rooms.create');
Route::get('/dormitory/lessons', [DormitoryController::class, 'indexLessonSchedule'])->name('dormitory.rooms.lessons.index');
Route::get('/dormitory/lessons/create', [DormitoryController::class, 'createLessonSchedule'])->name('dormitory.rooms.lessons.create');

// ----------------------- Bawaan Laravel Breeze -----------------------

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
*/