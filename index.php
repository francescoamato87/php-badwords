<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HELLO</title>
</head>
<body>

<?php
$name = 'Francesco';
$paragrafo = 'PHP (acronimo ricorsivo di "PHP: Hypertext Preprocessor", preprocessore di ipertesti; originariamente acronimo di "Personal Home Page") è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.';
echo strlen($paragrafo);
$censura = '********';
$parola= $_GET['censura'];
$paragrafo2 = str_replace($parola, $censura, $paragrafo); 
?>



<h1>Welcome <?php echo $name; ?> </h1>

<h3> <?php echo $paragrafo2;?> </h3>
<h4><?php echo $parola; ?></h4>




<?php 
// single line comment

#single line comment

/*Multi
Line
Comment
*/

?>




</body>
</html>