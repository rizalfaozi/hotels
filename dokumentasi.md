
#perhatian semua inputan harus berupa data json

contoh :

									
	{								
									
	"email":"pemilik@gmail.com",	
	"name":"pemilik",				
	"password":"admin123"					
									
	}								
									
									


----------------------------PENGGUNA----------------------------------


#register pengguna

- url : http://url/api/auth/regpengguna
- type : post

contoh :

{

"email":"pengguna@gmail.com",
"name":"pengguna",
"password":"admin123"

}


#untuk login

- url : http://url/api/auth/login
- type : post


contoh :

{

"email":"pengguna@gmail.com",
"password":"admin123"

}


#pencarian 

- pencarian berdasarkan nama kamar / nama hotel , kota dan harga

- url : http://url/api/hotels/search
- type : post

contoh :

{

"search":"kamboja",
"price":"750000",
"city":"Yogyakarta"

}

#filter

pengururutan data berdasarkan harga dan nama kamar jumlah yang masih ready 

- url : http://url/api/hotels/filter
- type : post

contoh :

{

"name":"mawar",
"price":"750000"

}

#detail kamar

- url : http://url/api/hotels/id
- type : get



#chat dan kridit

- perhatian menggunakan akses token jwt
- harus login sebagai pengguna
- kridit akan bertambah ketika bulan tidak sama dengan
  bulan terahir menggunakan chat kridit 
- sistem membaca bulan terbaru ketika terahir menggunakan chat kridit (descending)

- url : http://url/api/credits/chat
- type : post
- header : Authorization bearer { token }

{

"description":"tes tanya"


}



--------------------------------PEMILIK-----------------------------------



#register pemilik

- url : http://url/api/auth/regpemilik
- type : post

contoh :

{

"email":"pemilik@gmail.com",
"name":"pemilik",
"password":"admin123"

}

#untuk login

- url : http://url/api/auth/login
- type : post


contoh :

{

"email":"pemilik@gmail.com",
"password":"admin123"

}

#semua list kamar room

- perhatian semua  menggunakan akses token jwt
- harus login sebagai pemilik
- header : Authorization bearer { token }
- count = jumlah kamar

- url : http://url/api/rooms
- type : get

#insert kamar room

- perhatian semua  menggunakan akses token jwt
- harus login sebagai pemilik
- header : Authorization bearer { token }

- url : http://url/api/rooms/insert
- type : post

{

"user_id":"1",
"provinces_id":"1",
"name":"kanthil",
"type":"standart",
"status":"1",
"count":"3",
"price":"25000",
"description":"tes standart"

}

#update kamar room

- perhatian semua  menggunakan akses token jwt
- harus login sebagai pemilik
- header : Authorization bearer { token }
- count = jumlah kamar

- url : http://url/api/rooms/update/id
- type : post

{

"user_id":"1",
"provinces_id":"1",
"name":"cempaka",
"type":"deluxe",
"count":"3",
"status":"1",
"price":"25000",
"description":"tes deluxe"

}


#delete kamar room	

- perhatian semua  menggunakan akses token jwt
- harus login sebagai pemilik
- header : Authorization bearer { token }

- url : http://url/api/rooms/destroy/id
- type : delete	


