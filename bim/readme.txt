//Create Model with migration
php artisan make:model Gallery -m

//set fields in migration
//save the migration file.
//migrate the migration file.
php artisan migrate

//set fields as fillable or guarded in model
protected $guarded = [];

//create controller
php artisan make:controller GalleryController

//create controller with functions
php artisan make:controller GalleryController --model=Gallery

//create routes in web.php
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery.index');