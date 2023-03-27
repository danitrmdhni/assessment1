<!-- proses.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // ambil nilai dari input form
  $angka1 = $_POST['angka1'];
  $operator = $_POST['operator'];
  $angka2 = $_POST['angka2'];

  // proses operasi aritmatika
  switch ($operator) {
    case '+':
      $hasil = $angka1 + $angka2;
      break;
    case '-':
      $hasil = $angka1 - $angka2;
      break;
    case '*':
      $hasil = $angka1 * $angka2;
      break;
    case '/':
      $hasil = $angka1 / $angka2;
      break;
    default:
      echo "Operator tidak valid";
      exit;
  }

  // tampilkan hasil
  echo "Hasil: " . $hasil;
}
?>