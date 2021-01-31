<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hasil Generate</title>
</head>
<body>
<align="center">
  <?php
if (isset($_POST['JumlahColum']) AND isset($_POST['JumlahCell']))
{
   $columns=(int) $_POST['JumlahColum'];
   $cells=(int) $_POST['JumlahCell'];
}
else
{
   echo("<h3>Akses dari file table.php</h3>");
}
?>
  <?php
    $width = $columns * 30;
    echo "<table width=".$width." border=1>";
    $baris = 0;
    $sel = 1;
    while ($baris < $sel && $sel <= $cells)
    {
        echo "<tr>";
        $cl = 0;
        while ($cl < $columns)
        {
            if ($sel <= $cells)
            {
                echo "<td><div align=center>".$sel."</div></td>";
                $sel++;
            }
            $cl++;
        }
        echo "</tr>";
        $baris++;
    }
    echo "</table>";
?>
</body>
</html>