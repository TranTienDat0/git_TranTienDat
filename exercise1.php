<?php

function checkValidString($str)
{
  if (strpos($str, 'book') || strpos($str, 'restaurant')) {
    return true;
  } else {
    return false;
  }
}
// cau 1
$cau1 = checkValidString('this is');
if ($cau1 == true) {
  echo "<p>Chuỗi hợp lệ</p>";
} else {
  echo "<p>Chuỗi ko hợp lệ</p>";
}
//cau 2
$myfile1 = fopen("file1.txt", "r") or die("Unable to open file!");
$content = fread($myfile1, filesize('file1.txt'));
$cau21 = checkValidString($content);
if ($cau21 == true) {
  $sentences = explode('.', $content);
  $num_sentences = count($sentences) - 1;
  echo "<p>Chuỗi hợp lệ. Chuỗi bao gồm " . $num_sentences . " câu</p>";
} else {
  echo "<p>Chuỗi ko hợp lệ</p>";
}
fclose($myfile1);

$myfile2 = fopen("file2.txt", "r") or die("Unable to open file!");
$content1 = fread($myfile2, filesize('file2.txt'));
$cau22 = checkValidString($content1);
if ($cau22 == true) {
  $sentences1 = explode('.', $content1);
  $num_sentences1= count($sentences1) - 1;
  echo "<p>Chuỗi hợp lệ. Chuỗi bao gồm " . $num_sentences1 . " câu</p>";
} else {
  echo "<p>Chuỗi ko hợp lệ</p>";
}
fclose($myfile2);
?>
