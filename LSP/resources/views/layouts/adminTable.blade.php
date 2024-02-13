@extends('partials.table')

@section('dataTittle')
    <th scope="col" class="table-header">Nomor Pengaduan</th>
    <th scope="col" class="table-header">NIS Pelapor</th>
    <th scope="col" class="table-header">Aspirasi</th>
    <th scope="col" class="table-header">Kategori Aspirasi</th>
    <th scope="col" class="table-header">Gambar Bukti</th>
    <th scope="col" class="table-header">Lokasi Kejadian</th>
    <th scope="col" class="table-header">Status Penyelesaiaan</th>
    <th scope="col" class="table-header">Edit Data</th>
@endsection

@section('dataContent1')
    <td>Mark</td>
    <td>Otto</td>
    <td>Otto</td>
    <td>Otto</td>
    <td>Otto</td>
@endsection

@section('status')
    <td>
        <select class="form-select form-sett" id="status" name="status">
          <option value="pending">Pending</option>
          <option value="diproses">Diproses</option>
          <option value="selesai">Selesai</option>
        </select>
      </td>
      @endsection
      
      @section('editData')
      <td>
        <button type="button" class="btn btn-dark">Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </td>
      @endsection

@section('dataContent2')
<td>Mark</td>
<td>Otto</td>
<td>Otto</td>
<td>Otto</td>
<td>Otto</td>
@endsection

@section('status')
    <td>
        <select class="form-select form-sett" id="status" name="status">
          <option value="pending">Pending</option>
          <option value="diproses">Diproses</option>
          <option value="selesai">Selesai</option>
          
        </select>
    </td>
@endsection
