<?php

function directoryReader ($directory, array $excludeFiles = ['.', '..']) {
    $files = [];

    if (!is_dir($directory)) {  // if this is not an existing dir, return null
        return null;
    }

    if (!($filesDirectory = opendir($directory)) !== false) { // checking whether we could open the dir
        return null;
    }

    while(($file = readdir($filesDirectory))) {  
        
        if(in_array($file, $excludeFiles)) { // continue looping if part of excluded
            continue;
        }

        $files[] = $directory . '/' . $file;
    }

    closedir($filesDirectory);

    return $files;

}