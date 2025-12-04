<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Visitor Counter</title>
<style>
body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
h1 { color: #333; }
p { font-size: 1.2em; }
</style>

</head>
<body>
    <h4>v seetharama mugeraya 4mw23cs177</h4>
<?php
$file = 'counter.txt';
$count = file_exists($file) ? (int)file_get_contents($file) : 0;
file_put_contents($file, ++$count);
?>
    <h4>v seetharama mugeraya 4mw23cs177</h4>
<h1>Visitor Counter</h1>
<p>Number of Visitors: <strong><?php echo $count; ?></strong></p>
</body>
</html>
