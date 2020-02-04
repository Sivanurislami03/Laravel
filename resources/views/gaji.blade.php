<!DOCTYPE html>
<html>
<head>
	<title>Penggajian</title>
</head>
<body>
	<center>Data Pegawai</center>
	@foreach ($gaji as $val)
	    @if ($val['jabatan'] == "Manager")
	        @php $jab = 5000000; @endphp
	    @elseif ($val['jabatan'] == "Sekretaris")
	        @php $jab = 3500000; @endphp
	    @elseif ($val['jabatan'] == "Staff")
	        @php $jab = 2500000; @endphp
	    @endif

	    @if ($val['jam_kerja'] > 250)
	        @php $bonus = 0.10 * $jab; @endphp
	    @elseif ($val['jam_kerja'] > 200)
	        @php $bonus = 0.05 * $jab; @endphp
	    @else
	        @php $bonus = 0; @endphp
	    @endif

	        @php $ppn = 0.025 * $jab; @endphp
	        @php $gaber = ($jab + $bonus) - $ppn; @endphp
	        Nama                : {{$val['nama']}} <br>
	        Agama               : {{$val['agama']}} <br>
	        Jabatan             : {{$val['jabatan']}} <br>
	        Jam Bekerja         : {{$val['jam_kerja']}} <br>
	        Gaji                : {{$jab}} <br>
	        Bonus               : {{$bonus}} <br>
	        PPN                 : {{$ppn}} <br>
	        Gaji Bersih         : {{$gaber}} <br>
	        <hr>
	    @endforeach
</body>
</html>