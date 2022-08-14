<a href="/warga/create">Add Warga</a>
<table border="i">
    <th>
        <td>NAMA</td>
        <td>NIK</td>
        <td>NO KK</td>
        <td>JENIS KELAMIN</td>
        <td>ALAMAT</td>
        <td>ACTION</td>
    </th>
    @foreach($warga as $w)
    <tr>
        <td>{{ $w->id }}</td>
        <td>{{ $w->nama }}</td>
        <td>{{ $w->nik }}</td>
        <td>{{ $w->no_kk }}</td>
        <td>{{ $w->jenis_kelamin }}</td>
        <td>{{ $w->alamat }}</td>
        <td>
            <a href="/warga/{{ $w->id }}/edit">Edit</a>
            <form action="/warga/{{ $w->id }}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>