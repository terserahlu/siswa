<h2>Tambah Siswa</h2>
<form action="{{route('siswa.update',$siswa->id)}}" method="post">
    @csrf @method('PUT')
    <label>Nama <input type="text" name="nama" value="{{$siswa->nama}}"></label>
    <label>Kelas <input type="text" name="kelas" value="{{$siswa->kelas}}"></label>
    <label>Jurusan <input type="text" name="jurusan" value="{{$siswa->jurusan}}"></label>
    <button type="submit">ganti</button>
</form>
