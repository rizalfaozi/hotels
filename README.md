# Laravel-API-REST-Hotel

Laravel Rest Api ini diperuntukan untuk hotel sederhana  
rest api berupa data json menggunakan tehnology jwt
laravel versi 5.6 support dengan php5


#Install Composer
composer install

#setting env
sesuaikan nama database, username dan passwordnya

#migration & seeder
php artisan migrate:refresh --seed

#seeting jwt
php artisan jwt:generate















#untuk register

url : http://url/api/auth/register
type : post
input : name:xxx
		password:admin123
		email:xxx@gmail.com


{

"email":"pemilik@gmail.com",
"name":"pemilik",
"password":"admin123"

}


{

"email":"pengguna@gmail.com",
"name":"pengguna",
"password":"admin123"

}


#untuk login
url : http://url/api/auth/login
type : post
input : email:xxx@gmail.com
		password:admin123


#install jwt
- php artisan jwt:generate
- anda akan mendapatkan token jwt

#cara menjalankannya
ex : get data user yang sudah login

url : http://url/api/user
type : get

- pilih header
- bulk-edit
- isikan Authorization:bearer token yang sebelumnya anda login masukan disini
- klik send

#search
{
"search":"kamboja",
"price":"750000",
"city":"Yogyakarta"
}





		


