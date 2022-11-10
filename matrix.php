<?php
$a=array(array(2,3,2),array(3,2,2),array(1,2,1));
$b=array(array(2,3,2),array(3,2,2),array(1,3,1));
$m=count($a);
$n=count($a[2]);
$p=count($b);
$q=count($b[1]);

echo "<center>The matrix A";
echo "<br>";
for($row=0;$row<$m;$row++)
{
for($col=0;$col<$m;$col++)
{
echo " ".$a[$row][$col];
}
echo "<br>";
}

echo "The matrix B";
echo "<br>";
for($row=0;$row<$p;$row++)
{
for($col=0;$col<$q;$col++)
{
echo " ".$b[$row][$col];
}
echo "<br>";
}

echo "<br>The transpose A";
echo "<br>";
for($row=0;$row<$m;$row++)
{
for($col=0;$col<$n;$col++)
{
echo " ".$a[$col][$row];
}
echo "<br>";
}
if($m==$p&&$n==$q)
{
echo "<br>The sum of A and B";
echo "<br>";
for($row=0;$row<$m;$row++)
{
for($col=0;$col<$n;$col++)
{
echo " ".($a[$row][$col]+$b[$row][$col]);
}
echo "<br>";
}
}
else
{
echo "<br>Addition invalid";
echo "<br>";
}
if($n==$p)
{
echo "<br>The product of A and B";
echo "<br>";
for($row=0;$row<$m;$row++)
{
for($col=0;$col<$n;$col++)
{
$res[$row][$col]=0;
for($k=0;$k<$p;$k++)
$res[$row][$col]+=$a[$row][$k]*$b[$k][$col];
}

}

for($row=0;$row<$m;$row++)
{
for($col=0;$col<$n;$col++)
{
echo " ".$res[$row][$col];
}
echo "<br>";
}
}
else
{
echo "Multiplication invalid";
}
echo "</center>";
?>
<html>
<body style="background-color: #FFE4B5;font-size:20px;">
</body>
</html>

