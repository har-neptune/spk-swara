@section('content')
<h1>Daftar Kriteria</h1>
<a href="{{ route('admin.criteria.create') }}">+ Tambah Kriteria</a>
<table>
    <tr>
        <th>Nama</th>
        <th>Bobot</th>
        <th>Aksi</th>
    </tr>
    @foreach($criteria as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->weight }}</td>
        <td>
            <a href="{{ route('admin.criteria.edit', $item->id) }}">Edit</a>
            <form action="{{ route('admin.criteria.destroy', $item->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
