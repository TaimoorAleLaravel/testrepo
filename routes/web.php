
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PayPalController;
use App\Models\Client;
use App\Models\ClientProfile;
use App\Models\CourseReason;
use App\Models\Court;
use App\Models\DebtStructure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserManagementController;
use App\Http\Controllers\CounselorController;
use App\Http\Controllers\CounslerUserManagement;

Route::get('/{locale?}', function () {
    return redirect(app()->getLocale() . '/home');
});

// Routes with locale prefix
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|es']], function () {
    Route::view('/home', 'home')->name('home');
    Route::get('/pricing', function () {
        return "pricing";
    })->name('pricing');

    // admin route 
    Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/counsler/login', [CounselorController::class, 'login'])->name('counsler.login');



    // Client Routes

    Route::get('/client/register', [ClientController::class, 'register'])->name('client.register');
    Route::get('/client/login', [ClientController::class, 'login'])->name('client.login');
    Route::get('/client/logout', function () {
        session()->forget('client_id');
        return redirect()->route('client.login', ['locale' => app()->getLocale()]);
    })->name('client.logout');

    Route::post('/login-store', [ClientController::class, 'login'])->name('client.login.store');
    Route::post('/register-store',   [ClientController::class, 'register'])->name('client.register.store');

    Route::group([
        'prefix' => 'client',
        // 'middleware' => 'clientAuth'
        'middleware' => 'clientAuth:client'
    ], function () {
        Route::get('/court-district', [ClientController::class, 'Court_District'])->name('client.court_district');
        Route::get('/household-size', [ClientController::class, 'Household_size'])->name('client.household_size');
        Route::get('/account-type', [ClientController::class, 'account_type'])->name('client.account_type');
        Route::get('/client-information', [ClientController::class, 'client_information'])->name('client.client_information');
        Route::get('/client-information2', [ClientController::class, 'client_information2'])->name('client.client_information2');
        Route::get('/attorney-information', [ClientController::class, 'atorney_information'])->name('client.attorney_information');
        Route::get('/have-attorney', [ClientController::class, 'have_attorney'])->name('client.have_attorney');
        Route::get('/price-package', [ClientController::class, 'price_package'])->name('client.price_package');
        Route::get('/optional-services', [ClientController::class, 'optional_services'])->name('client.optional_services');
        Route::get('/payment-method', [ClientController::class, 'payment_method'])->name('client.payment_method');
        Route::get('payment-verification', [ClientController::class, 'payment_verify'])->name('client.payment_verify');


        Route::post('/court-district-store', [ClientController::class, 'Court_District'])->name('client.court_district.store');
        Route::post('/household-size-store', [ClientController::class, 'Household_size'])->name('client.household_size.store');
        Route::post('/account-type-store', [ClientController::class, 'account_type'])->name('client.account_type.store');
        Route::post('/client-information-store', [ClientController::class, 'client_information'])->name('client.client_information.store');
        Route::post('/attorney-information-store', [ClientController::class, 'atorney_information'])->name('client.attorney_information.store');
        Route::post('/have-attorney-store', [ClientController::class, 'have_attorney'])->name('client.have_attorney-store');
        Route::post('/price-package-store', [ClientController::class, 'price_package'])->name('client.price_package.store');
        Route::post('/optional-services-store', [ClientController::class, 'optional_services'])->name('client.optional_services.store');
        Route::post('/payment-method-store', [ClientController::class, 'payment_method'])->name('client.payment_method.store');

        // Route::post('/client-information-store', [ClientController::class, 'client_information'])->name('client.client_information.store');
        Route::post('/client-information2-store', [ClientController::class, 'client_information2'])->name('client.client_information2.store');
    });

    // Course Routes
    Route::group(['prefix' => 'course'], function () {
        Route::view('/start_course', 'course.start_course')->name('course.start_course');
        Route::view('/course_intro', 'course.course_intro')->name('course.course_intro');
        Route::get('/seeking_reason', [CourseController::class, 'seeking_reason'])->name('course.seeking_reason');
        Route::get('/seeking_reason_explain', [CourseController::class, 'seeking_reason_explain'])->name('course.seeking_reason_explain');
        Route::view('/debt_structure', 'course.debt_structure')->name('course.debt_structure');
        Route::view('/budget_calculator', 'course.budget_calculator')->name('course.budget_calculator');
        Route::view('/budget_chart', 'course.budget_chart')->name('course.budget_chart');
        Route::view('/dti_calculator', 'course.dti_calculator')->name('course.dti_calculator');
        Route::view('/alter_bankruptcy', 'course.alter_bankruptcy')->name('course.alter_bankruptcy');
        Route::view('/consumer_laws', 'course.consumer_laws')->name('course.consumer_laws');
        Route::view('/rebuild_credit', 'course.rebuild_credit')->name('course.rebuild_credit');
        Route::view('/visual_identification', 'course.visual_identification')->name('course.visual_identification');
        Route::view('/chat_session', 'course.chat_session')->name('course.chat_session');
        Route::view('/visual_identification_camera', 'course.visual_identification_camera')->name('course.visual_identification_camera');
        Route::get('/chat', [CourseController::class, 'chat'])->name('course.chat')->middleware('clientAuth:client');

        Route::post('/submit_form', [CourseController::class, 'submitForm'])->name('form.submit');
        Route::post('/course_intro_form', [CourseController::class, 'course_intro'])->name('form.course_intro');
        Route::post('/seeking_reason_form', [CourseController::class, 'seeking_reason'])->name('form.seeking_reason');
        Route::post('/seeking_reason_explain_form', [CourseController::class, 'seeking_reason_explain'])->name('form.seeking_reason_explain');
        Route::post('/debt_structure_form', [CourseController::class, 'debt_structure'])->name('form.debt_structure');
        Route::patch('/budget_calculator_form', [CourseController::class, 'budget_calculator'])->name('form.budget_calculator');
        Route::get('/editBudget', [CourseController::class, 'editBudget'])->name('course.editBudget');
        Route::post('/updateBudget', [CourseController::class, 'updateBudget'])->name('course.editbudgetInfo');

        Route::post('/visual_identity_form', [CourseController::class, 'visual_identity'])->name('form.visual_identity');
        Route::post('/visual_identification_camera', [CourseController::class, 'visual_identity_camera'])->name('course.visual_identification_camera_store');
    });

    Route::post('/login/admin', [AdminController::class, 'logn'])->name('admin.login.store');

    // Admin Routes
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'clientAuth:admin'
    ], function () {
        // Route::view('/login', 'admin.login')->name('admin.login');

        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/clientprofile/{id}', [AdminController::class, 'show'])->name('admin.clientprofile');
        Route::post('/addcounsler', [AdminController::class, 'addcounselor'])->name('admin.addcounsler');
        Route::get('/addcounslerpage', [AdminController::class, 'addcounslerpage'])->name('admin.add-Counselor');

        // counslermanagement

        Route::view('/addCounselor', 'admin.add-Counselor')->name('admin.addcounselor');
        // Route::view('/counslerdashboard', 'counselor.dashboard ')->name('admin.addcounselor');

        Route::get('/viewCounselor', [AdminController::class, 'viewcounsler'])->name('admin.viewcounsler');
        Route::get('/editcounsler/{id}', [AdminController::class, 'editcounsler'])->name('admin.editcounsler');
        Route::post('/updatecounsler/{id}', [AdminController::class, 'updatecounsler'])->name('admin.updatecounsler');
        Route::delete('/deletecounselor/{id}', [AdminController::class, 'deletecounsler'])->name('admin.deletecounselor');


        // user mangement
        Route::post('/editcoursereason', [AdminController::class, 'editcoursereason'])->name('admin.editcoursereason');
        Route::post('/editdebtstructure', [AdminController::class, 'editdebtstructure'])->name('admin.editdebtstructure');
        Route::post('/editclientRatio', [AdminController::class, 'editclientRatio'])->name('admin.editclientRatio');
        Route::post('/editaccountInfo', [AdminController::class, 'editaccountInfo'])->name('admin.editaccountInfo');
        Route::post('/editpersonalInfo', [AdminController::class, 'editpersonalInfo'])->name('admin.editpersonalInfo');
        Route::post('/editattorneyInfo', [AdminController::class, 'editattorneyInfo'])->name('admin.editattorneyInfo');
        Route::post('/editpaymentInfo', [AdminController::class, 'editpaymentInfo'])->name('admin.editpaymentInfo');
        Route::post('/editoptionalService', [AdminController::class, 'editoptionalService'])->name('admin.editoptionalService');
        Route::post('/editbudgetInfo', [AdminController::class, 'editbudgetInfo'])->name('admin.editbudgetInfo');
        Route::post('/editCourseInfo', [AdminController::class, 'editCourseInfo'])->name('admin.editCourseInfo');

        // filters

        Route::get('/applyfilter', [AdminController::class, 'applyFilter'])->name('admin.applyfilter');
        Route::get('/applyFilterCounsler', [AdminController::class, 'applyFilterCounsler'])->name('admin.applyFilterCounsler');
    });

    // Counsler Routes
    Route::group(['prefix' => 'counsler'], function () {

        Route::get('/', [CounselorController::class, 'index'])->name('counsler.admin-layout');
        Route::post('/loggedIn', [CounselorController::class, 'logn'])->name('counsler.login.store');

        Route::get('/clientprofile/{id}', [CounselorController::class, 'show'])->name('counsler.clientprofile');
        // Route::view('/dashboard', 'counselor.admin-layout')->name('counselor.admin-layout');


        // user mangement
        Route::post('/editcoursereason', [CounselorController::class, 'editcoursereason'])->name('counsler.editcoursereason');
        Route::post('/editdebtstructure', [CounselorController::class, 'editdebtstructure'])->name('counsler.editdebtstructure');
        Route::post('/editclientRatio', [CounselorController::class, 'editclientRatio'])->name('counsler.editclientRatio');
        Route::post('/editaccountInfo', [CounselorController::class, 'editaccountInfo'])->name('counsler.editaccountInfo');
        Route::post('/editpersonalInfo', [CounselorController::class, 'editpersonalInfo'])->name('counsler.editpersonalInfo');
        Route::post('/editattorneyInfo', [CounselorController::class, 'editattorneyInfo'])->name('counsler.editattorneyInfo');
        Route::post('/editpaymentInfo', [CounselorController::class, 'editpaymentInfo'])->name('counsler.editpaymentInfo');
        Route::post('/editoptionalService', [CounselorController::class, 'editoptionalService'])->name('counsler.editoptionalService');
        Route::post('/editbudgetInfo', [CounselorController::class, 'editbudgetInfo'])->name('counsler.editbudgetInfo');
        Route::post('/editCourseInfo', [CounselorController::class, 'editCourseInfo'])->name('counsler.editCourseInfo');

        // filters

        Route::get('/applyfilter', [CounselorController::class, 'applyFilter'])->name('counsler.applyfilter');
        
    });


    // Download Route
    Route::get('/download/follow', function () {
        $file = public_path() . "/assets/Follow Along Document_english.pdf";
        $headers = ['Content-Type' => 'application/pdf'];
        return Response::download($file, 'Follow Along Document_english.pdf', $headers);
    })->name('download.followPdf');
});

// Payment Gateway Routes
Route::group(['prefix' => 'payment'], function () {
    Route::get('checkout', [StripeController::class, 'checkout'])->name('stripe.checkout');
    Route::post('charge', [StripeController::class, 'charge'])->name('stripe.charge');
    Route::get('paypal-checkout', [PayPalController::class, 'pay'])->name('paypal.checkout');
    Route::get('paypal-success', [PayPalController::class, 'success'])->name('paypal.success');
    Route::get('paypal-cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');
});




Route::post('resource_id_handler', [CourseController::class, 'resourceId_handler'])->name('resource_id')->middleware('clientAuth:client');




Route::group(['prefix' => 'en/admin/edit'], function () {
    Route::get('client_reason', [AdminUserManagementController::class, 'clientReason'])->name('admin.edit.client_reason');
    Route::get('client_debtStructure', [AdminUserManagementController::class, 'clientDebtStructure'])->name('admin.edit.client_debtStructure');
    Route::get('client_ratio', [AdminUserManagementController::class, 'clientRatio'])->name('admin.edit.client_ratio');
    Route::get('foreclosure', [AdminUserManagementController::class, 'foreclosure'])->name('admin.edit.foreclosure');
    Route::get('client_garnishment', [AdminUserManagementController::class, 'clientGarnishment'])->name('admin.edit.client_garnishment');
    Route::get('client_lawsuit', [AdminUserManagementController::class, 'clientLawsuit'])->name('admin.edit.client_lawsuit');
    Route::get('client_accountInfo', [AdminUserManagementController::class, 'clientAccountInfo'])->name('admin.edit.client_accountInfo');
    Route::get('client_personalInfo', [AdminUserManagementController::class, 'clientPersonalInfo'])->name('admin.edit.client_personalInfo');
    Route::get('client_attorney', [AdminUserManagementController::class, 'clientAttorney'])->name('admin.edit.client_attorney');
    Route::get('client_courseInfo', [AdminUserManagementController::class, 'clientCourseInfo'])->name('admin.edit.clientCourseInfo');
    Route::get('client_optionalServices', [AdminUserManagementController::class, 'clientOptionalServices'])->name('admin.edit.client_optionalServices');
    Route::get('client_payment', [AdminUserManagementController::class, 'clientPayment'])->name('admin.edit.client_payment');
    Route::get('client_budget', [AdminUserManagementController::class, 'clientBudget'])->name('admin.edit.client_budget');
    Route::get('client_courseInfo', [AdminUserManagementController::class, 'client_courseInfo'])->name('admin.edit.course_info');
});
Route::group(['prefix' => 'en/counsler/edit'], function () {
    Route::get('client_reason', [CounslerUserManagement::class, 'clientReason'])->name('counsler.edit.client_reason');
    Route::get('client_debtStructure', [CounslerUserManagement::class, 'clientDebtStructure'])->name('counsler.edit.client_debtStructure');
    Route::get('client_ratio', [CounslerUserManagement::class, 'clientRatio'])->name('counsler.edit.client_ratio');
    Route::get('foreclosure', [CounslerUserManagement::class, 'foreclosure'])->name('counsler.edit.foreclosure');
    Route::get('client_garnishment', [CounslerUserManagement::class, 'clientGarnishment'])->name('counsler.edit.client_garnishment');
    Route::get('client_lawsuit', [CounslerUserManagement::class, 'clientLawsuit'])->name('counsler.edit.client_lawsuit');
    Route::get('client_accountInfo', [CounslerUserManagement::class, 'clientAccountInfo'])->name('counsler.edit.client_accountInfo');
    Route::get('client_personalInfo', [CounslerUserManagement::class, 'clientPersonalInfo'])->name('counsler.edit.client_personalInfo');
    Route::get('client_attorney', [CounslerUserManagement::class, 'clientAttorney'])->name('counsler.edit.client_attorney');
    Route::get('client_courseInfo', [CounslerUserManagement::class, 'clientCourseInfo'])->name('counsler.edit.clientCourseInfo');
    Route::get('client_optionalServices', [CounslerUserManagement::class, 'clientOptionalServices'])->name('counsler.edit.client_optionalServices');
    Route::get('client_payment', [CounslerUserManagement::class, 'clientPayment'])->name('counsler.edit.client_payment');
    Route::get('client_budget', [CounslerUserManagement::class, 'clientBudget'])->name('counsler.edit.client_budget');
    Route::get('client_courseInfo', [CounslerUserManagement::class, 'client_courseInfo'])->name('counsler.edit.course_info');
});



// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

require __DIR__ . '/auth.php';
