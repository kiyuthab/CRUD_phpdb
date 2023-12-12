<?php
    //koneksi kedatabase menggunakan conn    
    $conn = mysqli_connect("localhost", "root", "", "db_siswa");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $wadah = [];
        while($baju = mysqli_fetch_assoc($result)){
            $wadah[] = $baju;
        }
        return $wadah;
    }

    function tambah($data){
        global $conn; 
        // htmlspecialchars untuk blok tag elemen html
        // simpan data ke dalam variable superglobal $_POST
        $img = htmlspecialchars($data["gambar"]);
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $merk_laptop = htmlspecialchars($data["merk_laptop"]);
        $cita_cita = htmlspecialchars($data["cita_cita"]);
        $gambar = upload();
        if( !$gambar ) {
            return false;
        }

        // data yang disimpan di $_POST masukkan ke database
        $query = "INSERT INTO students
                    VALUES
                ('','$nama', '$nis', '$rombel', '$rayon', '$status', '$hobi', '$alamat', '$merk_laptop', '$cita_cita', 'gambar')
            ";
        mysqli_query($conn, $query);

        // yang akan dikembalikkan nilai 1 atau -1 untuk menghasilkan pesan
        return mysqli_affected_rows($conn);
    }
   

    // yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
    return mysqli_affected_rows($conn);

    function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
                document.location.href= 'tambah.php';
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
                document.location.href= 'tambah.php';
			  </script>";
		return false;
	}

	// max 2mb
	if( $ukuranFile > 2000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
                document.location.href= 'tambah.php';
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}


    function hapus( $id ){
        global $conn;
        mysqli_query($conn, "DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah( $data ){
        global $conn; 
        // htmlspecialchars untuk blok tag elemen html
        // simpan data ke dalam variable superglobal $_POST
        $id = $data["id"];
        $img = htmlspecialchars($data["gambar"]);
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $merk_laptop = htmlspecialchars($data["merk_laptop"]);
        $cita_cita = htmlspecialchars($data["cita_cita"]);

        // data yang disimpan di $_POST masukkan ke database
        $query = "UPDATE students SET
            gambar = '$img', 
            nama = '$nama',
            nis = '$nis',
            rombel = '$rombel',
            rayon = '$rayon',
            status = '$status',
            hobi = '$hobi',
            alamat = '$alamat',
            merk_laptop = '$merk_laptop',
            cita_cita = '$cita_cita'
            WHERE id = $id
        ";
        mysqli_query($conn, $query);

        // yang akan dikembalikkan nilai 1 atau -1 untuk menghasilkan pesan
        return mysqli_affected_rows($conn);
    }
?>  