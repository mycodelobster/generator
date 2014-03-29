<?php
$name = $argv[1];

// Create Controller
$file_name = '../application/controllers/'.$name.'.php';

if(file_exists($file_name))
{
	exit('Controller exists');
}


$handle = fopen($file_name, 'w') or die('Cannot open file:  '.$file_name);
$data = file_get_contents('template/controller_template.php');
$data = str_replace('NAMETOP', ucfirst($name), $data);
$data = str_replace('NAMEBOTTOM', $name, $data);
fwrite($handle, $data);

// Create Model
$file_name = '../application/models/'.$name.'_model.php';
$handle = fopen($file_name, 'w') or die('Cannot open file:  '.$file_name);
$data = file_get_contents('template/model_template.php');
$data = str_replace('NAMETOP', ucfirst($name).'_model', $data);
$data = str_replace('NAMEBOTTOM', $name.'_model', $data);
fwrite($handle, $data);


// Create View
mkdir('../application/views/'.$name);

// Create Listing View
$file_name = '../application/views/'.$name.'/listing.php';
$handle = fopen($file_name, 'w') or die('Cannot open file:  '.$file_name);
$data = file_get_contents('template/view_template.php');
$data = str_replace('NAMETOP', ucfirst($name), $data);
$data = str_replace('NAMEBOTTOM', $name, $data);
fwrite($handle, $data);


// Create Update View
$file_name = '../application/views/'.$name.'/update.php';
$handle = fopen($file_name, 'w') or die('Cannot open file:  '.$file_name);
$data = file_get_contents('template/view_template.php');
$data = str_replace('NAMETOP', ucfirst($name), $data);
$data = str_replace('NAMEBOTTOM', $name, $data);
fwrite($handle, $data);

// Create Add View
$file_name = '../application/views/'.$name.'/add.php';
$handle = fopen($file_name, 'w') or die('Cannot open file:  '.$file_name);
$data = file_get_contents('template/view_template.php');
$data = str_replace('NAMETOP', ucfirst($name), $data);
$data = str_replace('NAMEBOTTOM', $name, $data);
fwrite($handle, $data);


// Create Detail View
$file_name = '../application/views/'.$name.'/detail.php';
$handle = fopen($file_name, 'w') or die('Cannot open file:  '.$file_name);
$data = file_get_contents('template/view_template.php');
$data = str_replace('NAMETOP', ucfirst($name), $data);
$data = str_replace('NAMEBOTTOM', $name, $data);
fwrite($handle, $data);

?>

