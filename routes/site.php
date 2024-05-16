<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('site.home');

Route::get('/sobre/grupo-vat', [SiteController::class, 'aboutGroup'])->name('about.group');
Route::get('/sobre/cases', [SiteController::class, 'aboutCases'])->name('about.cases');
Route::get('/sobre/premios', [SiteController::class, 'aboutAwards'])->name('about.awards');
Route::get('/sobre/videos', [SiteController::class, 'aboutVideos'])->name('about.videos');
Route::get('/sobre/politica-de-privacidade', [SiteController::class, 'aboutPrivacyPolicy'])->name('about.privacypolicy');

Route::get('/solucoes/plataforma-iptv', [SiteController::class, 'solutionsIptv'])->name('solutions.platform-iptv');
Route::get('/solucoes/whitelabel', [SiteController::class, 'solutionsWhitelabel'])->name('solutions.whitelabel');
Route::get('/solucoes/plataforma-ava', [SiteController::class, 'solutionsAva'])->name('solutions.platform-ava');
Route::get('/solucoes/studio-pack', [SiteController::class, 'solutionsStudioPack'])->name('solutions.studiopack');

Route::get('/produtora', [SiteController::class, 'producer'])->name('producer.home');

Route::get('/compliance', [SiteController::class, 'compliance'])->name('compliance.home');

Route::get('/entre-em-contato', [SiteController::class, 'contact'])->name('contact.home');
