@extends('master')
@section('content')
<div style="background-color:#CFD6CC;">
<!doctype html>
 <br>
<div align='right'> 
 <html lang="en"> 
    <head>
       <meta charset="utf-8">
       <title>Judul Halaman Saya</title>
       <style type="text/css">
         
         .search {
             padding:8px 15px;
             background:rgba(50, 50, 50, 0.2);
             border:0px solid #C7D1DA;
         }
         .button {
             position:relative;
             padding:6px 15px;
             left:-8px;
             border:2px solid #508CC3;
             background-color:#508CC3;
             color:#fafafa;
         }
         .button:hover  {
             background-color:#fafafa;
             color:#508CC3;
         }
                   
         ::-webkit-input-placeholder { /* For WebKit browsers */
             color:    #dd3333;
                         font-family:Helvetica Neue;
                         font-weight:bold;
         }
         :-moz-placeholder { /* For Mozilla Firefox 4 to 18 */
             color:    #dd3333;
                         font-family:Helvetica Neue;
                         font-weight:bold;
         }
         ::-moz-placeholder { /* For Mozilla Firefox 19+ */
             color:    #dd3333;
                         font-family:Helvetica Neue;
                         font-weight:bold;
         }
         :-ms-input-placeholder { /* For Internet Explorer 10+ */
             color:    #dd3333;
                         font-family:Helvetica Neue;
                         font-weight:bold;
         }	  
     </style>
    </head>
 <body>
 <form>
     <input class="search" type="text" placeholder="Cari..." required>
     <input class="button" type="button" value="Cari">		
 </form>
 </body>
 </html>
</div>

 <div align='center'> 
    <img src="https://cdn-icons.flaticon.com/png/128/2248/premium/2248315.png?token=exp=1641748299~hmac=02f27515f8ed4f0d1f36f6c966945490"/>
    <br>
    <br>
   <h1>REKOMENDASI</h1>
   <h1>TEMPAT WISATA</h1>
   <h1>DI SUMEDANG</h1>
<br>
<img src="https://cdn-icons-png.flaticon.com/128/5860/5860851.png"/>
<br>
<br>
</div>
</div>
@endsection