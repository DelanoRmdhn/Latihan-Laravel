@extends('partials.searchBar')
<form action="/process" method="get">
<div class="container input-group mt-5" style="width: 50%;">
    <input type="number" class="form-control" placeholder="Masukan Nomor Pengaduan disini" name="search" value="{{ request('search') }}">
    <button class="btn btn-outline-secondary" type="submit">Cari Nomor</button>
  </div>
</form>