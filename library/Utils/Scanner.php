<?php

class Utils_Scanner
{
    public static function scanner($directory, $extension, $recursive = false) {
        $files = array();

        $subdirectories = @scandir($directory);
        if ($subdirectories) {
            foreach ($subdirectories as $file) {
                if (($file <> '.') && ($file <> '..') && ($file <> 'lost+found')) {
                    $path = "$directory/$file";
                    if (is_dir($path)) {
                        if ($recursive) {
                            $files = @array_merge($files, $this->scan_files($path));
                        } else {
                            $files[] = array(
                                'directory' => $directory,
                                'file' => $file,
                            );
                        }
                    } else if (is_file($path)) {
                        if (substr(strtolower($file), -1 * strlen($extension)) == $extension) {
                            $files[] = array(
                                'directory' => $directory,
                                'file' => $file,
                            );
                        }
                    }
                }
            }
        }

        return $files;
    }
}
