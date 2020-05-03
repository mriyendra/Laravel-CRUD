@extends('layouts.master')

@section('content')
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif
        <div class ="row">
        <div class ="col-6">
        <h1>Data Mahasiswa</h1>
        </div>
        <div class ="col-6">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#exampleModal">
  Tambah Data Mahasiswa
</button>
        </div>
            <table class="table table-hover">
                    <tr>
                <th>NAMA</th>
                <th>Jenis Kelamin</th>
                <th>NPM</th>
                <th>AGAMA</th>
                <th>ALAMAT</th>
                <th>Aksi</th>
                    </tr>
            @foreach($data_mahasiswa as $mahasiswa)
                    <tr>
                <td>{{$mahasiswa->nama_mahasiswa}}</td>
                <td>{{$mahasiswa->jenis_kelamin}}</td>
                <td>{{$mahasiswa->npm}}</td>
                <td>{{$mahasiswa->agama}}</td>
                <td>{{$mahasiswa->alamat}}</td>
                <td><a href ="/mahasiswa/{{$mahasiswa->id}}/edit" class ="btn btn-warning btn-sm">Edit</a></td>
                <td><a href ="/mahasiswa/{{$mahasiswa->id}}/delete" class ="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
            @endforeach
             </table>
        </div>
   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                    <div class="modal-body">
                        <form action ="/mahasiswa/create" method="POST">
                        {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mahasiswa">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                        <select class name="jenis_kelamin"="form-control" id="exampleFormControlSelect1">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">NPM</label>
                        <input name="npm" type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Npm">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input name="agama" type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>

@endsection