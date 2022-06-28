<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Data Anggota</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Anggota IPMY - <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/home/anggota" class="btn btn-danger">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/home/anggota/store" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nomor Anggota</label>
                        <input type="text" name="id_anggota" class="form-control" placeholder="Nomor Anggota ..">

                        @if($errors->has('id_anggota'))
                        <div class="text-danger">
                            {{ $errors->first('id_anggota')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota ..">

                        @if($errors->has('nama_anggota'))
                        <div class="text-danger">
                            {{ $errors->first('nama_anggota')}}
                        </div>
                        @endif

                    </div>


                    <div class="form-group">
                        <label>Status Di Jogja</label>

                        <select class="form-control" id="status_di_jogja" name="status_di_jogja">

                        <option value="Masih Dijogja">Masih Dijogja</option>

                        <option value="Diluar Jogja">Diluar Jogja</option>

                    </select>

                    @if($errors->has('status_di_jogja'))
                        <div class="text-danger">
                            {{ $errors->first('status_di_jogja')}}
                        </div>
                        @endif

                    </div>


                    <div class="form-group">
                        <label>Alamat Tinggal</label>
                        <input type="text" name="alamat_tinggal" class="form-control" placeholder="Alamat Tinggal ..">

                        @if($errors->has('alamat_tinggal'))
                        <div class="text-danger">
                            {{ $errors->first('alamat_tinggal')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat Domisili</label>
                        <input type="text" name="alamat_domisili" class="form-control" placeholder="Alamat Domisili ..">

                        @if($errors->has('alamat_domisili'))
                        <div class="text-danger">
                            {{ $errors->first('alamat_domisili')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email ..">

                        @if($errors->has('email'))
                        <div class="text-danger">
                            {{ $errors->first('email')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon ..">

                        @if($errors->has('nomor_telepon'))
                        <div class="text-danger">
                            {{ $errors->first('nomor_telepon')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Motto</label>
                        <input type="text" name="motto" class="form-control" placeholder="Motto ..">

                        @if($errors->has('motto'))
                        <div class="text-danger">
                            {{ $errors->first('motto')}}
                        </div>
                        @endif

                    </div>

                    <label>Input Foto Anggota</label>
                    <div class="input-group control-group">
                        <div class="custom-file">
                            <input type="file" class="form-control" name="foto_anggota" accept=".jpg,.png,.jpeg" id="file">
                            @if($errors->has('foto_anggota'))
                            <div class="text-danger">
                            {{ $errors->first('foto_anggota')}}
                            </div>
                            @endif
                        </div>
                        </div>
                        </br>

                        <div class="form-group">
                            <label>Status Keaktifan</label>

                            <select class="form-control" id="status_aktif" name="status_aktif">


                            <option value="Aktif">Aktif</option>


                            <option value="Tidak Aktif">Tidak Aktif</option>


                        </select>
                        @if($errors->has('status_di_jogja'))
                        <div class="text-danger">
                            {{ $errors->first('status_di_jogja')}}
                        </div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control" id="jabatan"
                            name="id_jabatan">
                            @foreach($jabatan as $stat)
                            <option value="{{$stat->id}}">{{$stat->nama_jabatan}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('id_jabatan'))
                        <div class="text-danger">
                            {{ $errors->first('id_jabatan')}}
                        </div>
                        @endif

                    </div>

            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Simpan">
            </div>

        </form>

    </div>
</div>
</div>
<script type="text/javascript">
var uploadField = document.getElementById("file");

uploadField.onchange = function() {
    if(this.files[0].size > 2000000){
       alert("File Max Is 2MB");
       this.value = "";
    };
};
</script>
</body>

</html>
