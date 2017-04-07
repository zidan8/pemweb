<!DOCTYPE html>
<html>
<head>
   <title>Belajar Membuat Form </title>
   <script type="text/javascript">
		function validasi_input(form){
  		if (form.nama.value == ""){
    	alert("nama masih kosong!");
    		form.nama.focus();
    		return (false);
  }
return (true);
}
</script>
</head>
<body>
<h1>Pendaftaran</h1>
<form action="form" method="get">

Nama: <input type="text" name="nama" value="Nama Anda" id="nama" />


<br />

Password: <input type="password" name="password" />
<br />

Jenis Kelamin : 
<input type="radio" name="jenis_kelamin" value="laki-laki" checked /> 
Laki - Laki
<input type="radio" name="jenis_kelamin" value="perempuan" /> 
Perempuan
<br />

Hobi: <input type="checkbox" name="hobi_baca" /> Membaca Buku
      <input type="checkbox" name="hobi_nulis" checked /> Menulis
      <input type="checkbox" name="hobi_mancing" /> Memancing
<br />

Asal Kota:
 <select name="asal_kota" >
     <option value="Kota Jakarta"> Jakarta</option>
     <option value="Kota Bandung"> Bandung</option>
     <option value="Kota Yogyakarta"> Yogyakarta</option>
    <option value="Kota Semarang" selected>Semarang</option>
 </select>
<br />

Komentar Anda:
<textarea name="komentar" rows="5" cols="20">
Silahkan isi komentar anda
</textarea>
<br />

<input type="submit" value="Mulai Proses!" onclick="Validasi_nInput(form)">

</form>
</body>
</html>