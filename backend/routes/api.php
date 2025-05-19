<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\API\CandidateController;
use App\Http\Controllers\API\CandidateEducationController;
use App\Http\Controllers\API\CandidateExperienceController;
use App\Http\Controllers\API\CandidateSkillController;
use App\Http\Controllers\API\CandidateLanguageController;
use App\Http\Controllers\API\AuthController;

use App\Http\Controllers\Api\JobPostController;
use App\Http\Controllers\API\EmployerAuthController;
use App\Http\Controllers\API\MailController;

Route::prefix('v1')->group(function () {
    Route::apiResource('candidates', CandidateController::class);
    Route::apiResource('candidate-educations', CandidateEducationController::class);
    Route::apiResource('candidate-experiences', CandidateExperienceController::class);
    Route::apiResource('candidate-skills', CandidateSkillController::class);
    Route::apiResource('candidate-languages', CandidateLanguageController::class);

    Route::post('signup', [AuthController::class, 'signup']);
    Route::post('send-otp', [AuthController::class, 'sendOtp']);
    Route::post('verify-otp', [AuthController::class, 'verifyOtp']);


Route::post('job-posts', [JobPostController::class, 'store']);

Route::post('employer/signup', [EmployerAuthController::class, 'signup']);
Route::post('employer/send-otp', [EmployerAuthController::class, 'sendOtp']);

Route::post('employer/verify-otp', [EmployerAuthController::class, 'verifyOtp']);
Route::post('employer/login', [EmployerAuthController::class, 'login']);
Route::get('/jobs/employer/{id}', [JobPostController::class, 'getByEmployer']);

Route::get('/jobs', [JobPostController::class, 'index']);

Route::middleware('auth:employer-api')->get('employer/profile', [EmployerAuthController::class, 'profile']);



Route::post('/send-lead-notification', [MailController::class, 'sendLeadNotification']);


});