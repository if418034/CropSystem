@extends('layouts/app')

@section('title', 'Feedback | CropSystem')

@section('container')

<form class="mx-5">
    <h3>Leave your reply</h3>
    <div class="form-group ml-5 mr-5 mt-5">
        <label for="address">Alamat Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group ml-5 mr-5">
        <label for="fullname">Nama</label>
        <input type="name" class="form-control" id="fullname" placeholder="Nama Lengkap">
    </div>
    <div class="form-group ml-5 mr-5">
        <label for="komentar">Komentar</label>
        <textarea class="form-control" id="komentar" placeholder="Berikan komentar anda" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-secondary mx-5">Post</button>
</form>

@endsection