<h2>Data siswa</h2>
<a href="{{route('siswa.create')}}">Tambah siswa</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($data as $siswa )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$siswa->nama}}</td>
            <td>{{$siswa->kelas}}</td>
            <td>{{$siswa->jurusan}}</td>
            <td>
                <a href="{{route('siswa.edit',$siswa->id)}}">Edit</a>
                <form action="{{route('siswa.destroy',$siswa->id)}}" method="post" style="display: inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confrim('yakin?')">Hapus</button>

                </form>
            </td>
        </tr>
    @endforeach
</table>
