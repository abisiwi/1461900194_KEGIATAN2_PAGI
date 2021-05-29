<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
   @include('navbar0194')<br><br>
   <center><h4>Select Where</h4></center><br>
   <div class=" container">
   <table class="table">
     <tr>
       <td>no</td>
       <td>kode buku</td>
       <td>kode kategori</td>
       <td>kode penerbit</td>
       <td>judul buku</td>
       <td>jumlah buku</td>
       <td>pengarang buku</td>
       <td>tahun penerbit buku</td>
     </tr>
       @foreach ($data2 as $buku )
       <tr>
         <td>{{$no2++}}</td>
         <td>{{$buku->kode_buku}}</td>
         <td>{{$buku->kode_kategori}}</td>
         <td>{{$buku->kode_penerbit}}</td>
         <td>{{$buku->judul_buku}}</td>
         <td>{{$buku->jumlah_buku}}</td>
         <td>{{$buku->pengarang_buku}}</td>
         <td>{{$buku->tahun_terbit_buku}}</td>
       </tr>
       
       @endforeach
  </table>

  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>

</html>