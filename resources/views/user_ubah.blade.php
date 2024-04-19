<body>
    <h1>form tambah user</h1>
    <a href="{{ route('/user') }}">Kembali</a>
    <form action="{{ route('/user/tambah_simpan') }}" method="post">
        @csrf
       <label>Username</label>
        <input type="text" name="username" placeholder="username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="password">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" id="level_id">
        <br>
        <input type="submit" name="btn btn-success" value="Simpan">
    </form>
</body>