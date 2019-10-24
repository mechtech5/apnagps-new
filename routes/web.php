<?php

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
    return view('index');
});
Route::view('/aboutus','pages.aboutus')->name('aboutus');
Route::view('/features','pages.features')->name('add_features');
Route::view('/solution','pages.apna_solution')->name('apna_solution');
Route::view('/subscription','pages.apna_subscription')->name('subscription');
Route::view('/services','pages.apna_services')->name('services');
Route::view('/ais_page','pages.ais_page')->name('ais_page');
Route::view('/servicesreq','pages.apna_servicesreq')->name('servicesreq');
Route::view('/installreq','pages.apna_installreq')->name('installreq');
Route::view('/renewablereq','pages.apna_renewablereq')->name('renewablereq');
Route::view('/servicesreq','pages.apna_servicesreq')->name('servicesreq');
// Route::view('/product{id}','pages.apna_product')->name('product');
Route::get('/fleet','EnquiryController@fleet')->name('fleet');
Route::get('/fastag','EnquiryController@fastag')->name('fastag');
Route::get('/heavyvehicle','EnquiryController@heavyvehicle')->name('heavyvehicle');
Route::get('/asitarcker','EnquiryController@asitarcker')->name('asitarcker');
Route::get('/gpstarcking','EnquiryController@gpstarcking')->name('gpstarcking');
Route::get('/bustracking','EnquiryController@bustracking')->name('bustracking');
Route::get('/apnanewtwork','EnquiryController@apnanewtwork')->name('apnanewtwork');
Route::get('/formenquiry','EnquiryController@formenquiry')->name('formenquiry');
Route::get('/formfranchise','EnquiryController@formfranchise')->name('formfranchise');
Route::get('/formbussiness','EnquiryController@formbussiness')->name('formbussiness');
Route::post('/contactus','EnquiryController@contactus')->name('contactus');
Route::post('/networkdetail','EnquiryController@networkdetail')->name('networkdetail');
Route::post('/bustarcking','EnquiryController@bustarcking')->name('bustarcking');
Route::get('/product{id}','ProductController@apna_product')->name('product');
Route::view('/contact_us','pages.contact_us')->name('contact_us');
Route::post('/enquiryform','EnquiryController@insertenquiery')->name('enquiryform');
Route::get('/getdistrict','EnquiryController@getdistrict')->name('getdistrict');
Route::get('/Product_qty','EnquiryController@Product_qty')->name('Product_qty');
Route::post('/businessstore','EnquiryController@businessstore')->name('businessstore');
Route::post('/franchisestore','EnquiryController@franchisestore')->name('franchisestore');
Route::post('/complaintstore','EnquiryController@complaintstore')->name('complaintstore');
Route::post('/allservices_store','EnquiryController@allservices_store')->name('allservices_store');
Route::post('/installinfo_store','EnquiryController@installinfo_store')->name('installinfo_store');
Route::post('/renewable_store','EnquiryController@renewable_store')->name('renewable_store');
///demo registt
Route::get('/register_newuser','EnquiryController@register_user')->name('register_newuser');
Route::post('/store_new_user','EnquiryController@storeuser')->name('storeuser');
Route::get('/loginmobileno','EnquiryController@login_mobile_no')->name('login_mobile_no');
Route::post('/logintotracking','EnquiryController@logintotracking')->name('logintotracking');
Route::post('/shippingdetails','EnquiryController@shippingdetails')->name('shippingdetails');
///admin part
Route::get('/admin','AdminController@index')->name('admin.index');
Route::post('/loginuser','AdminController@loginuser')->name('admin.loginuser');
Route::get('/enquirydetail','AdminController@enquirydetail')->name('admin.enquirydetail');
Route::get('/removeenquiry/{id}','AdminController@removeenquiry')->name('admin.removeenquiry');
Route::get('/complaintdetail','AdminController@complaintdetail')->name('admin.complaintdetail');
Route::get('/rcomPlaint/{id}','AdminController@rcomPlaint')->name('admin.rcomPlaint');
Route::get('/businessdetail','AdminController@businessdetail')->name('admin.businessdetail');
Route::get('/removebusiness/{id}','AdminController@removebusiness')->name('admin.removebusiness');
Route::get('/franchise','AdminController@franchise')->name('admin.franchise');
Route::get('/rfranchise/{id}','AdminController@rfranchise')->name('admin.rfranchise');
Route::get('/addProduct','AdminController@addProduct')->name('admin.addProduct');
Route::post('/store_Product','AdminController@storeProduct')->name('admin.storeProduct');
Route::get('/show_Product','AdminController@showProduct')->name('admin.showProduct');
Route::get('/edit_Product/{id}','AdminController@editProduct')->name('admin.editProduct');
Route::patch('/UPdate_Product/{id}','AdminController@UPdateProduct')->name('admin.UPdateProduct');
Route::get('/removeProduct/{id}','AdminController@removeProduct')->name('admin.removeProduct');
Route::get('/custservices','AdminController@custservices')->name('admin.custservices');
Route::get('/rservices/{id}','AdminController@rservices')->name('admin.rservices');
Route::get('/install_device','AdminController@installdevice')->name('admin.installdevice');
Route::get('/rinstall/{id}','AdminController@rinstall')->name('admin.rinstall');
Route::get('/renewble_device','AdminController@renewbledevice')->name('admin.renewbledevice');
Route::get('/rrenew/{id}','AdminController@rrenew')->name('admin.rrenew');
Route::get('/Product_buyer','AdminController@Productbuyer')->name('admin.Productbuyer');
Route::get('/custProductlist/{id}','AdminController@custProductlist')->name('admin.custProductlist');
Route::get('/deliverProduct/{id}','AdminController@deliverProduct')->name('admin.deliverProduct');
Route::get('/shiping_address/{id}','AdminController@shipingaddress')->name('admin.shipingaddress');
Route::get('/delivered_Product','AdminController@deliveredProduct')->name('admin.deliveredProduct');
Route::get('/Pdf_cust/{id}','AdminController@Pdf')->name('admin.Pdfcust');
Route::get('/all_Product/{id}','AdminController@all_Product')->name('admin.all_Product');
Route::get('/networkvisit','AdminController@networkvisit')->name('admin.networkvisit');
Route::get('/removevisitor/{id}','AdminController@removenet')->name('admin.removenet');
Route::get('/bustvisitor','AdminController@bustvisitor')->name('admin.bustvisitor');
Route::get('/removebvisitor/{id}','AdminController@removebus')->name('admin.removebus');
Route::get('/demovisitor','AdminController@demovisitor')->name('admin.demovisitor');
Route::get('/rdemouser/{id}','AdminController@rdemouser')->name('admin.rdemouser');
///payment
Route::post('/paytmorder','OrderController@paytmorder')->name('order.paytmorder');
///gatewaye
Route::post('/paytm-callback','OrderController@paytmcallback');
///carts funtion
Route::post('/insertcard','ProductController@insertcard')->name('ProductController.insertcard');
Route::get('/viewcart','ProductController@viewcart')->name('viewcart');
Route::post('/updatecart','ProductController@updatecart')->name('updatecart');
Route::post('/addTocart/{Product}','ProductController@addTocart')->name('addTocart');
Route::get('/viewcartdetails','ProductController@viewcartdetails')->name('viewcartdetails');
Route::post('/removeProduct','ProductController@removeProduct')->name('removeProduct');
Route::post('/updateProduct','ProductController@updateProduct')->name('updateProduct');
///cart funtion
//checkout funtion
Route::get('/checkout','PalorderController@index')->name('checkout.index');
Route::post('/storecustorder','PalorderController@custorder')->name('storecustorder');
Route::get('/getpayment','PalorderController@apna_getpayment')->name('apna_getpayment');
///mail
Route::get('/send','EnquiryController@send');
Route::get('/sendmessage','EnquiryController@sendmessage');


