<!DOCTYPE html>
<html>
    <head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
    <H1>Edit Data Mahasiswa</H1>
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif
        <div class ="row">
        <div class="co-lg-12">
        <form action ="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
                        {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mahasiswa" value="{{$mahasiswa->nama_mahasiswa}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                        <select class name="jenis_kelamin"="form-control" id="exampleFormControlSelect1">
                        <option value="L" @if($mahasiswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                        <option value="P" @if($mahasiswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">NPM</label>
                        <input name="npm" type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Npm" value="{{$mahasiswa->npm}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input name="agama" type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama"value="{{$mahasiswa->agama}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mahasiswa->alamat}}</textarea>
                    </div>
                <div>
                <button type="submit" class="btn btn-warning">Edit</button>
        </form>
                </div>
        </div>
        </body>
</html>