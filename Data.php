
<?php
$data = array(
    'nama' => '',
    'gender' => '',
    'agama' => '',
    'hobi' => array(),
    'komentar' => ''
);
?>
<html>
<head>
<title>Latihan Form Berbasis Input Proses dan Output</title>
</head>
<body bgcolor="#999999">
<table width="50%" border="0" align="center">
<tr>
<td width="35%">
<table border="0" width="100%" bgcolor="#00CCFF">
<tr>
<td><h3><font face="Times New Roman, Times, serif"><p align="center">FORM INPUT DATA</p></font></h3></td>
</tr>
</table>
<form method="post" action="tangkap.php">
<table border="0" width="100%" bgcolor="#FFFFFF">
<tr>
<td><P align="right">NAMA</P></td>
<td width="10">:</td>
<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
</tr>
<tr>
<td><P align="right">JENIS KELAMIN</P></td>
<td width="10">:</td>
<td>
<input type="radio" name="gender" value="Pria" <?php if($data['gender'] == 'Pria') echo 'checked'; ?>> Pria
<input type="radio" name="gender" value="Wanita" <?php if($data['gender'] == 'Wanita') echo 'checked'; ?>>Wanita
</td>
</tr>
<tr>
<td><P align="right">AGAMA</P></td>
<td width="10">:</td>
<td>
<select name="agama">
<option selected="selected" value="">-Pilih -</option>
<option <?php if($data['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
<option <?php if($data['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
<option <?php if($data['agama'] == 'Katholik') echo 'selected'; ?>>Katholik</option>
<option <?php if($data['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
<option <?php if($data['agama'] == 'Buddha') echo 'selected'; ?>>Buddha</option>
</select>
</td>
</tr>
<tr>
<td><P align="right">HOBI</P></td>
<td width="10">:</td>
<td>
<input type="checkbox" name="hobi[]" value="Membaca" <?php if(in_array('Membaca', $data['hobi'])) echo 'checked'; ?>>Membaca
<input type="checkbox" name="hobi[]" value="Menulis" <?php if(in_array('Menulis', $data['hobi'])) echo 'checked'; ?>>Menulis
<input type="checkbox" name="hobi[]" value="Menyanyi" <?php if(in_array('Menyanyi', $data['hobi'])) echo 'checked'; ?>>Menyanyi
</td>
</tr>
<tr>
<td><P align="right">KOMENTAR</P></td>
<td width="10">:</td>
<td><textarea name="komentar"><?php echo $data['komentar']; ?></textarea></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="kirim" value="KIRIM"> || <input type="reset" name="reset" value="CANCEL"></td>
</tr>
</table>
</form>
</table>
</body>
</html>

<?php
if(isset($_POST['kirim'])) {
    $data['nama'] = $_POST['nama'];
    $data['gender'] = $_POST['gender'];
    $data['agama'] = $_POST['agama'];
    $data['hobi'] = $_POST['hobi'];
    $data['komentar'] = $_POST['komentar'];
    echo "Nama : " . $data['nama'] . "<br>";
    echo "Jenis Kelamin : " . $data['gender'] . "<br>";
    echo "Agama : " . $data['agama'] . "<br>";
    echo "Hobi : " . implode(", ", $data['hobi']) . "<br>";
    echo "Komentar : " . $data['komentar'] . "<br>";
}
?>
```
