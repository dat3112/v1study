<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
  define("t1", 50000);
  define("t2", 100000);
  define("t3", 200000);
  if(isset($_GET["sotien"]))
    $a =$_GET["sotien"];
  $m1 = $a/$t1;
  $m2 = $a/$t2;
  $m3 = $a/$t3; //số tờ mệnh giá 50k
?>
  <form method="post"> 
    <table width="596" border="1" cellpadding="2" cellspacing="3">
      <tr>
        <td colspan="3">Các phương án in tiền</td>
      </tr>
      <tr>
        <td width="190">50000</td>
        <td width="190">100000</td>
        <td width="190">200000</td>
        <td>
          <input type="text" name="loai1">
          <input type="text" name="loai2">
          <input type="text" name="loai3">
        </td>
      </tr>
      
    </table>
  </form>
	

  <?php  
      for ($i=0; $i<$m ; $i++) { 
          for ($j=0;$j<$m2 ; $j++) { 
              for ($k=0; $k<$m3; $k++) { 
                  if($i*t1 +$j*t2+$k*t3==$a)

                    $dem++;
                  echo "Phương án thứ :".$dem."<br>";
                  echo "Mệnh giá 500000 : ".$i."<br>";
                  echo "mệnh giá 100000 : ".$j."<br>";
                  echo "Mệnh giá 200000 : ".$k."<br>";
              }
              echo "Tổng số phương án rút tiền: ".$dem;
          }
      }
  ?>
</body>
</html>