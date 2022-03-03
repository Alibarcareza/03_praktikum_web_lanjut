@extends('master.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="card-header">{{ __('Halaman Utama') }}</div>

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('Welcome!') }}
</div>
</div>
</div>
</div>
</div>
<div class="jumbotron">
  <div class="container">
    <h1 class="text-center"><b>Selamat Datang Di Website Saya</h1> </b>    
  </div>
</div>
          <div class="card bg-primary">
    <div class="card-body">
      <p class="card-text text-center"><b>Product</p></b>
      <ul>
          <li>kolak-kids-songs</li>
          <li>marbel-and-friends-kids-game</li>
          <li>marbel-edu-game</li>
          <li>riri-story-books</li>
      </ul>
    </div>
  </div>

  <div class="card bg-success">
    <div class="card-body text-center">
      <p class="card-text"><b>News</p></b>
    </div>
  </div>

  <div class="card bg-warning">
    <div class="card-body">
      <p class="card-text text-center"><b>Program</p></b>
      <ul>
          <li>Karir</li>
          <li>Magang</li>
          <li>Kunjungan Industri</li>
      </ul>
    </div>
  </div>

  <div class="card bg-danger">
    <div class="card-body text-center">
      <p class="card-text"><b>About US</p></b>
    </div>
  </div>

  <div class="card bg-light">
    <div class="card-body text-center">
      <p class="card-text"><b>Contact US</p></b>
    </div>
  </div>

</div>

</body>
     
@endsection
