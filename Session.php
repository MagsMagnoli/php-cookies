<?php
session_start();
?>
<?php
$_SESSION['Name'] = 'Anon';
$Name = $_SESSION['Name'];
echo $Name;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Session</title>
</head>

<body>
</body>

</html>