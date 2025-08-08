<h2>Tambah Siswa</h2>
<form action="{{route('siswa.store')}}" method="post">
    @csrf
    <label>Nama <input type="text" name="nama"></label>
    <label>Kelas <input type="text" name="kelas"></label>
    <label>Jurusan <input type="text" name="jurusan"></label>
    <button type="submit">simpan</button>
</form>
