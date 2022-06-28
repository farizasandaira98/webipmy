<html>
<head>
	<title>Cetak Data Anggota IPMY</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 8pt;
		}
	</style>

	<table width="100%">
    <tr>
    <td width="25" align="center"><img src="logo.png" width="60%"></td>
    <td width="50" align="left"><h5>Ikatan Pelajar Mahasiswa Yahukimo</h5><h6>Daerah Istimewa Yogyakarta</h6></td>
    </tr>
    </table>
    <hr>
    <h6 align="center">Data Anggota</h6>
	<table class='table table-bordered'>
		<thead>
                <tr style="text-align: center;">
                      <th>No</th>
                      <th>Foto</th>
                      <th>Detail Diri</th>
                    </tr>
              </thead>
              <tbody>
              @foreach($anggota as $ang)
                    <tr>
                    <td style="width:5%;">{{ $loop->iteration }}</td>
                    <td style="width:15%;"><img src="foto_anggota/{{$ang->foto_anggota}}" style='width:140px; height:160px;'></td>
                    <td>
                        Nomor Keanggotaan : {{ $ang->id_anggota }}<br/>
                        Nama : {{ $ang->nama_anggota }}<br/>
                        Status Di Jogja : {{ $ang->status_di_jogja }}<br/>
                        Alamat Asal : {{ $ang->alamat_tinggal }}<br/>
                        Alamat Domisili : {{ $ang->alamat_domisili }}<br/>
                        Email : {{ $ang->email }}<br/>
                        Nomor Telpon : {{ $ang->nomor_telepon }}<br/>
                        Motto : {{ $ang->motto }}<br/>
                        Status Aktif : {{ $ang->status_aktif }}<br/>
                        Jabatan : {{ $ang->struktur->nama_jabatan }}
                        </td>
                    </tr>
                    @endforeach
              </tbody>
	</table>
</body>
</html>
