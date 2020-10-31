<?php

use App\Models\Article;
use App\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/send_email', function () {
    $body = '<p style="text-align:center">&nbsp;</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="https://skipperfly.com/blog/storage/articles/dazt85ACm96g3g8cZDb9ZzHAIPw7assEqQOJuwaq.jpeg" style="width:580px" /></p>

<p style="margin-left:240px">&nbsp;</p>

<p style="margin-left:240px">&nbsp;</p>

<p><span style="font-size:16px"><span style="color:#000080"><strong><em>Thanks! for joining our blog and Tourism community!</em></strong></span></span></p>

<p><strong><span style="color:#333333"><em>In future, you will receive emails having links to new Tourism articles containing travel experiences you won&rsquo;t like to miss.</em></span></strong></p>

<p><strong><span style="color:#333333"><em>Thanks in advance for sharing the blog with your friends and those who are interested in Tourism.</em></span></strong></p>

<p><strong><span style="color:#333333"><em>Have a nice day!</em></span></strong></p>

<p><br />
<span style="font-size:14px"><span style="color:#000080"><em><strong>Skipperfly Team</strong></em></span></span></p>

<p style="text-align:left">&nbsp;</p>

<p style="text-align:center"><a href="mailto:info@skipperfly.com"><img alt="" src="https://skipperfly.com/blog/storage/articles/wuXW9bPxSFRZAvakNgEkopYFWjaocSZqCSu8mzAN.png" style="height:30px; width:30px" /></a>&nbsp;&nbsp;<a href="https://www.facebook.com/skipperflyco"><img alt="" src="https://skipperfly.com/blog/storage/articles/cokyYFhzNWs8FF74jRRGcHAo8z5eic5cH93TudLP.png" style="height:30px; width:30px" /></a>&nbsp;&nbsp;<a href="https://twitter.com/skipperflyco"><img alt="" src="https://skipperfly.com/blog/storage/articles/62zG7SVsdtaW0eOqYF6q9GfbDkKUAoPX0bksmHNV.png" style="height:30px; width:30px" /></a>&nbsp;&nbsp;<a href="https://www.instagram.com/skipperflyco"><img alt="" src="https://skipperfly.com/blog/storage/articles/VDj84kWLDUP2OTzogCsjTsjn424S2PvXlfZBYwPf.png" style="height:30px; width:30px" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.linkedin.com/in/skipperflyco"><img alt="" src="https://skipperfly.com/blog/storage/articles/Mkbmuk0jnIQUOD1sYc2cN24vdYO2w5MxG52EJ4gQ.png" style="height:28px; width:28px" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://skipperfly.com/blog/en"><img alt="" src="https://skipperfly.com/blog/storage/articles/e8q0iO1d67hIO2eWzcguompZtsA34KgxPwDth4K7.png" style="height:28px; width:28px" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/channel/UC7hFaF-KxZg0ewIItZ3ZNtQ/featured"><img alt="" src="https://skipperfly.com/blog/storage/articles/tyHbBG9XYSFVudkc00IYwtYpzF0rzqMYf7IU2odE.png" style="height:28px; width:28px" /></a></p>

<div>
<table border="0" cellpadding="0" cellspacing="0" class="MsoNormalTable" style="background:white; width:99.08%">
	<tbody>
		<tr>
			<td style="height:121.85pt; width:428.05pt">
			<div>
			<table border="0" cellpadding="0" cellspacing="0" class="MsoNormalTable" style="width:100%">
				<tbody>
					<tr>
						<td style="height:10.0pt">
						<div>
						<table border="0" cellpadding="0" cellspacing="0" class="MsoNormalTable" style="width:100%">
							<tbody>
								<tr>
									<td style="height:10.05pt">
									<table border="0" cellpadding="0" cellspacing="0" class="MsoNormalTable" style="width:100%">
										<tbody>
											<tr>
												<td style="height:9.0pt">
												<table align="left" border="0" cellpadding="0" cellspacing="0" class="MsoNormalTable" style="width:100%">
													<tbody>
														<tr>
															<td style="background-color:rgb(241, 243, 244); height:8.05pt">
															<p style="text-align:center"><em><span style="color:#656565; font-family:helvetica,sans-serif; font-size:9.0pt">Copyright &copy; 2020&nbsp; Skipperfly, Swedish&nbsp;</span></em><em><span style="color:#656565; font-family:helvetica,sans-serif; font-size:9.0pt">Company, All rights reserved.</span></em><br />
															<span style="color:#656565; font-family:helvetica,sans-serif; font-size:9.0pt">Registered Office: Gustavstorpsv&auml;gen 6,&nbsp;M&ouml;rrum, 37534&nbsp;</span></p>

															<p style="text-align:center"><span style="font-size:12px">Want to change how you receive these emails?<br />
															You can <u><strong>unsubscribe </strong></u>from this list</span><br />
															<span style="color:#656565; font-family:helvetica,sans-serif; font-size:9.0pt"><!--[if !supportLineBreakNewLine]--><br />
															<!--[endif]--></span></p>
															</td>
														</tr>
													</tbody>
												</table>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</div>
						</td>
					</tr>
				</tbody>
			</table>
			</div>
			</td>
		</tr>
	</tbody>
</table>
</div>
';


    dd(\Illuminate\Support\Str::replaceLast('unsubscribe', 'testtttte', $body));

});
//Route::get('/send_email', function (){
//    $user = User::first();
//    $article = Article::first();
////    \Mail::to($user->email)
////        ->send(new \App\Mail\ArticleEmail($user , $article))
////
////    ;
//
//    \Mail::to($user->email)
//        ->send(new \App\Mail\WelcomeEmail($user))
//
//    ;
//
//    \App\Models\Subscribe::chunk(50,function ($data) use ($article){
//
//        dispatch(new  \App\Jobs\SendNewArticleMailJob($data,$article));
//
//    });
//});
//Route::get('/test', function (){
//////    \Illuminate\Support\Facades\App::setLocale('ar');
////
////
////    $tag = \App\Models\Tag::latest()->first();
////    echo ' local :' . $tag->title .'<br> ';
////    echo ' translate en :"' . $tag->translate('en')->title .'<br> ';
////
////    app()->setLocale('ar');
////    echo ' local ar:' . $tag->title .'<br> ';
////    echo ' translate ar :"' . $tag->translate('ar')->title .'<br> ';
//
//
//    \Illuminate\Support\Facades\Artisan::call('schedule:run');
//dd(1);
//
//});

//Route::get('migrate',function (){
//   \Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed');
//});
//
Route::get('test_email', function () {
    $article = Article::first();

    $email = \App\Models\Subscribe::first()->email;
//    $Subscribes = \App\Models\Subscribe::get();
//    dd($Subscribes);

    /*    \App\Models\Subscribe::chunk(50,function ($data) use ($article){
    //        foreach ($data as $email_data)
    //            \Mail::to($email_data->email)
    //                ->send(new \App\Mail\ArticleEmail($article,$email_data->email));

            new  \App\Jobs\SendNewArticleMailJob($data,$article);

        });*/
    return view('emails.new_article', compact('article', 'email'));
});
//Route::get('storage_link',function (){
//   \Illuminate\Support\Facades\Artisan::call('storage:link');
//});
Route::namespace('Dashboard')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::middleware('guest')->group(function () {

        Route::get('/login', 'AuthController@login_page');
        Route::post('/login', 'AuthController@login')->name('login');

    });

    Route::middleware(['admin_middleware', 'role:superadministrator'])->group(function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::post('/logout', 'AuthController@logout')->name('logout');

        Route::resource('tag', 'TagController')->except('show');
//      Route::get('subscribers','SubscribeController@index')->name('subscribers.index');
//      Route::Delete('subscribers','SubscribeController@index')->name('subscribers.index');
        Route::resource('subscribers', 'SubscribeController')->only('index', 'destroy');
        Route::resource('category', 'CategoryController')->except('show');
        Route::resource('article', 'ArticleController')->except('show');
        Route::resource('admin', 'AdminController')->except('show');
        Route::resource('user', 'UserController')->except('show');
        Route::resource('setting', 'SettingController')->only('index', 'store');
        Route::resource('image', 'ImageController')->only('index', 'create', 'store', 'destroy');
    });


});

Route::namespace('Dashboard')->middleware('auth')->group(function () {
    Route::put('/edit-profile', 'AuthController@edit_profile')->name('edit_profile');
    Route::put('/change-password', 'AuthController@change_password')->name('change-password');
});


Route::namespace('Website')->name('website.')->prefix(LaravelLocalization::setLocale())
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->group(
        function () {
            Route::get('/', 'HomeController@index')->name('index');
            Route::get('/article/{slug}', 'ArticleController@show')->name('article.show');
            Route::post('/article/add_to_favorite/{article}', 'ArticleController@add_to_favorite')->name('article.add_to_favorite');

            Route::get('/category/{slug}', 'HomeController@show_category')->name('category.show');
            Route::get('/tag/{slug}', 'HomeController@show_tag')->name('tag.show');
            Route::post('/subscribe/create', 'SubscribeController@store')->name('subscribe.create');
            Route::get('/unsubscribe', 'SubscribeController@unsubscribe')->name('unsubscribe');

            Route::post('/comment/create', 'CommentController@store')->name('comment.create');
            Route::post('/comment/add_to_favorite/{comment}', 'CommentController@add_to_favorite')->name('comment.add_to_favorite');

            Route::post('/login', 'AuthController@login')->name('login');
            Route::post('/register', 'AuthController@register')->name('register');
            Route::post('/logout', 'AuthController@logout')->name('logout');


        });

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


