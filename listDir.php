<?php

$env = parse_ini_file('.env');
$path = $env["defaultPath"];

function listDirectories($dir) {
    // Open the specified directory
    $directories = scandir($dir);

    // Filter out the current (.) and parent (..) directories
    $directories = array_filter($directories, function($item) use ($dir) {
        return is_dir($dir . '/' . $item) && $item != '.' && $item != '..';
    });

    // Display the directories
    echo '<ul>';
    foreach ($directories as $directory) {
        echo '<li id='.$directory.'>' . $directory . '</li>';
    }
    echo '</ul>';
}


// Call the function with the desired directory
listDirectories($path);
?>