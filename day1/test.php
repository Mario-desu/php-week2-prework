
<!DOCTYPE html>
<html>
<body >
<?php
$str = "\t\t\n PHP Validators are useful tools\n\t ";
echo "Original value:" . $str . "\n" ;
echo "<br>";
echo  "Trimmed value:" . trim($str);

echo "<br>";
$test_var_a = "<p><a href='file.php'>PHP Validators</a></p><br>";
$test_var_b = "<p><a href='file.php'>PHP Validators</a></p><br>";
$test_var_c = "<?php echo 'strip_tags remove php too'?>";
strip_tags($test_var_a); // it will return:  PHP Validators;
strip_tags($test_var_b); // it will return:  PHP Validators<br>;
var_dump(strip_tags($test_var_c)); //it will return " ";

echo "<br>";
$test_var_a = "<br><p><a href='file.php'>PHP Validators</a></p>";
$test_var_b = "<br><p><a href='file.php'>PHP Validators</a></p>";
echo htmlspecialchars($test_var_a);
//it will return <br><p><a href='file.php'>PHP Validators</a></p>
echo htmlspecialchars($test_var_b);
//it will return <br><p><a href='file.php'>PHP Validators</a></p>

echo "<br>";


echo filter_var($email = 'johndoe@mail.com', FILTER_VALIDATE_EMAIL);
//it will return johndoe@mail.com
echo filter_var($email = 'johndoe@mail', FILTER_VALIDATE_EMAIL);
//it will return false, '.com' is missing
echo filter_var($email = '1-*johndoe123@mail.com', FILTER_VALIDATE_EMAIL);
//it will return 1-*johndoe123@mail.com, special chars allowed
echo filter_var($email = '1john&doe\123@mail.com', FILTER_VALIDATE_EMAIL);
//it will return false, special chars '&' and '\' not allowed


echo "<br>";


$url = "https://www.codefactory.wien";
$url = (filter_var($url, FILTER_VALIDATE_URL)?"valid":"invalid");
echo $url;

?>
</body >
</html>