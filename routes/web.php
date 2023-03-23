<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TestimonialController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FrontEnd\FrontEndController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontEndController::class)->group(function () {
    Route::get('/', 'home')->name('home.page');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'store')->name('send.email');

    Route::get('/all-course', 'allCourse')->name('all-course');
    Route::get('/blog-details/{id}', 'blogDetails')->name('blog-details');
    Route::get('/course-details/{id}', 'courseDetails')->name('course-details');
});

Auth::routes();

Route::group(['middleware'=>'disableBackBtn'],function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


/***********************Start Dashboard All Route*******************************/
Route::group(['middleware'=>'disableBackBtn'],function () {

    Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('dashboard', 'index')->name('adminDashboard');
        });

        Route::controller(HomeSliderController::class)->group(function () {
            Route::get('home-slider', 'index')->name('home-slider');
            Route::post('home-slider', 'store')->name('save-slider');

            Route::get('slider-icon1/{id}/delete', 'destroy');
            Route::get('slider-icon2/{id}/delete', 'destroy2');
            Route::get('slider-icon3/{id}/delete', 'destroy3');

        });
        Route::controller(CourseCategoryController::class)->group(function () {
            Route::get('course-header', 'header')->name('course-header');
            Route::post('course-header', 'saveHeader')->name('course-header');

            Route::get('add-course', 'course')->name('add-course');
            Route::post('save-course', 'saveCourse')->name('save-course');
            Route::get('manage-course', 'manageCourse')->name('manage-course');
            Route::get('course-status/{id}', 'courseStatus')->name('course-status');
            Route::get('course-edit/{id}', 'courseEdit')->name('course-edit');
            Route::post('course-update', 'courseUpdate')->name('course-update');
            Route::get('course-delete/{id}', 'courseDelete')->name('course-delete');

        });
        Route::controller(CourseController::class)->group(function () {
            Route::get('header-section', 'header')->name('header-section');
            Route::post('header-section', 'store')->name('save-section');

            Route::get('course-section', 'index')->name('course-section');
            Route::post('course-section', 'save')->name('save-course-section');
            Route::get('manage-section', 'manage')->name('manage-course-section');
            Route::get('course-publication-status/{id}', 'status')->name('course-publication-status');
            Route::get('edit-course/{id}', 'edit')->name('edit-course');
            Route::post('update-course/{id}', 'update')->name('update-course');

            Route::get('course-other-image/{id}/delete', 'remove')->name('remove-image');
            Route::get('delete-course/{id}', 'deleteCourse')->name('delete-course');

        });

        Route::controller(InstructorController::class)->group(function () {
            Route::get('add-instructor', 'index')->name('add-instructor');
            Route::post('add-instructor', 'save')->name('save-instructor');
            Route::get('manage-instructor', 'manageInstructor')->name('manage-instructor');
            Route::get('edit-instructor/{id}', 'editInstructor')->name('edit-instructor');
            Route::post('update-instructor', 'updateInstructor')->name('update-instructor');
            Route::get('instructor-status/{id}', 'statusInstructor')->name('instructor-status');
            Route::get('delete-instructor/{id}', 'deleteInstructor')->name('delete-instructor');


            Route::get('instructor-header', 'instructorHeader')->name('instructor-header');
            Route::post('instructor-header', 'saveHeader')->name('save-instructor-header');


        });
        Route::controller(TestimonialController::class)->group(function () {
            Route::get('add-testimonial', 'index')->name('add-testimonial');
            Route::post('save-testimonial', 'store')->name('save-testimonial');
        });

        Route::controller(EventController::class)->group(function () {
            Route::get('event-header', 'header')->name('event-header');
            Route::post('event-header', 'store')->name('save-event-header');

            Route::get('add-event', 'index')->name('add-event');
            Route::post('add-event', 'saveEvent')->name('save-event');
            Route::get('manage-event', 'manage')->name('manage-event');
            Route::get('edit-event/{id}', 'edit')->name('edit-event');
            Route::get('event-status/{id}', 'status')->name('event-status');
            Route::get('delete-event/{id}', 'deleteEvent')->name('delete-event');
        });

        Route::controller(FeaturesController::class)->group(function () {
            Route::get('features-header', 'features')->name('features-header');
            Route::post('features-header', 'store')->name('save-features');

            Route::get('features-item', 'index')->name('features-item');
            Route::post('features-item', 'saveItem')->name('save-features-item');
            Route::get('manage-features', 'manageItem')->name('manage-features');
            Route::get('features-status/{id}', 'status')->name('features-status');
            Route::get('edit-features/{id}', 'editFeaturesItem')->name('edit-features');
            Route::get('delete-features/{id}', 'deleteFeaturesItem')->name('delete-features');
        });

        Route::controller(AboutController::class)->group(function () {
            Route::get('about-header', 'header')->name('about-header');
            Route::post('about-header', 'store')->name('save-header');

            Route::get('about-left-section', 'leftSection')->name('left-section');
            Route::post('about-left-section', 'storeSection')->name('save-image');
        });

        Route::controller(BlogController::class)->group(function () {
            Route::get('add-blog', 'index')->name('add-blog');
            Route::post('add-blog', 'store')->name('save-blog');
            Route::get('manage-blog', 'manage')->name('manage-blog');
            Route::get('edit-blog/{id}', 'edit')->name('edit-blog');
            Route::get('blog-status/{id}', 'status')->name('blog-status');
            Route::get('delete-blog/{id}', 'deleteBlog')->name('delete-blog');

            Route::get('blog-header', 'header')->name('blog-header');
            Route::post('blog-header', 'saveHeader')->name('save-blog-header');
        });

        Route::controller(SettingController::class)->group(function () {
            Route::get('page-header', 'page')->name('page-header');
            Route::post('page-header', 'store')->name('save-page-header');

            Route::get('page-footer', 'footer')->name('page-footer');
            Route::post('page-footer', 'save')->name('save-page-footer');

            Route::get('account-setting', 'account')->name('account-setting');
            Route::post('account-setting', 'upload')->name('save.account.setting');

        });

        Route::controller(UserController::class)->group(function () {
            Route::get('all-user', 'user')->name('all.user');
            Route::get('role-as/{id}', 'role')->name('role-as');
            Route::get('delete-user/{id}', 'delete')->name('delete-user');
//            Route::post('page-header', 'store')->name('save-page-header');
        });
    });
});
/***********************End Dashboard All Route*******************************/

//{{date('F-j-Y',strtotime($blog->created_at))}} Date Format
