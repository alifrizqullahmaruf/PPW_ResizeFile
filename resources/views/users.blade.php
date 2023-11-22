<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Users</title>
    <style>
    /* Gaya tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        margin-bottom: 20px;
        font-family: 'Poppins', sans-serif;
    }

    h1 {
        font-family: 'Poppins', sans-serif;
        text-align: center;
    }

    /* Gaya header tabel */
    th {
        background-color: #ff69b4;
        color: #fff;
        padding: 10px;
        text-align: left;
        border: 1px solid #ff69b4;
    }

    /* Gaya sel data tabel */
    td {
        border: 1px solid #ddd;
        padding: 15px;
        background-color: #fff;
    }

    /* Gaya tautan tombol dalam sel data */
    .cute-button {
        display: inline-block;
        background-color: #ff69b4;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        font-size: 14px;
        cursor: pointer;
        padding: 5px 15px;
        transition: background-color 0.3s ease;
    }

    /* Hover efek untuk tombol dalam sel data */
    .cute-button:hover {
        background-color: #ff1493;
    }

    /* Gaya tombol Hapus */
    .hapus-button {
        background-color: #dc3545;
    }

    /* Hover efek untuk tombol Hapus */
    .hapus-button:hover {
        background-color: #c82333;
    }

    /* Gaya tombol Edit */
    .edit-button {
        background-color: #007bff;
    }

    /* Hover efek untuk tombol Edit */
    .edit-button:hover {
        background-color: #0056b3;
    }

    /* Gaya kontainer untuk tombol Tambah Buku */
    .tambah-buku-container {
        text-align: right;
        margin-bottom: 20px;
    }


    .tambah-buku-container a{
        background-color: violet;
        font-family: 'Poppins', sans-serif;

    }

</style>

</head>
<body>
    <h1>DATA USER</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_user as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->photo }}</td>
                <td>
                    <form action="{{ route('destroy', $user->id) }}" method="post">
                        @csrf
                        <button class="cute-button hapus-button" onClick="return confirm('Yakin mau dihapus')">Hapus</button>
                        </form>

                    <form action="{{ route('edit', $user->id) }}">
                        @csrf
                        <button class="cute-button edit-button" onClick="return confirm('Yakin mau melakukan edit')">Edit</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
