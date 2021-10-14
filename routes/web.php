<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\QuestionController;
use App\Http\Controllers\admin\SnippetsController;
use App\Http\Controllers\admin\AnswerController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', [AdminController::class, 'login'])->name('login');   
Route::post('admin-login', [AdminController::class, 'loginAttempt']);   


Route::group(['middleware' => 'auth:admin'], function(){
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard']);  
        Route::get('/edit-profile', [AdminController::class, 'editProfile']);  
        Route::post('/update-profile', [AdminController::class, 'updateProfile']); 
        Route::get('/password-reset', [AdminController::class, 'passwordReset']);
        Route::post('/password-update', [AdminController::class, 'passwordUpdate']);  
        Route::get('/logout', [AdminController::class, 'logout']); 


//////////////////////////// Category Routes ///////////////////////////////////////////////////        
        
        Route::get('/add-category', [CategoryController::class, 'addCategory']);  
        Route::post('/store-category', [CategoryController::class, 'storeCategory']); 
        Route::get('/view-category', [CategoryController::class, 'viewCategory']); 
        Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory']);  
        Route::post('/update-category', [CategoryController::class, 'updateCategory']); 
        Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory']); 

//////////////////////// Question Routes //////////////////////////////////////////////////////

         Route::get('/add-question', [QuestionController::class, 'addQuestion']); 
         Route::post('/store-question', [QuestionController::class, 'storeQuestion']); 
         Route::get('/view-question', [QuestionController::class, 'QuestionList']); 
         Route::get('/edit-question/{id}', [QuestionController::class, 'editQuestion']); 
         Route::post('/update-question', [QuestionController::class, 'updateQuestion']); 
         Route::get('/delete-question/{id}', [QuestionController::class, 'deleteQuestion']); 


///////////////////////// Snippets Routes ///////////////////////////////////////////////////////////

         Route::get('/add-snippets', [SnippetsController::class, 'addSnippets']); 
         Route::post('/store-snippets', [SnippetsController::class, 'storeSnippets']); 
         Route::get('/view-snippets', [SnippetsController::class, 'viewSnippets']); 
         Route::get('/edit-snippets/{id}', [SnippetsController::class, 'editSnippets']); 
         Route::post('/update-snippets', [SnippetsController::class, 'updateSnippets']); 
         Route::get('/delete-snippets/{id}', [SnippetsController::class, 'deleteSnippets']); 

/////////////////////// Answers Routes ////////////////////////////////////////////////////////////

         Route::get('/add-answers/{id}', [AnswerController::class, 'addAnswer']); 
         Route::post('/store-answers', [AnswerController::class, 'storeAnswer']); 
         Route::get('/view-answers/{id}', [AnswerController::class, 'viewAnswer']);
         Route::get('/edit-answers/{id}', [AnswerController::class, 'editAnswer']);
         Route::post('/update-answers', [AnswerController::class, 'updateAnswer']);
         Route::get('/delete-answers/{id}', [AnswerController::class, 'deleteAnswer']); 
 
 
 



  
 

 
     });
});