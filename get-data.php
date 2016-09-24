<?php

	$i = 0; 
    $dir = 'cards/img/';
	$dir2 = 'cards/txt/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    $files['filenames'] = scandir($dir, 1);
	$files['title'] = scandir($dir2, 2);
	
    



?>