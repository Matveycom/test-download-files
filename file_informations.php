<?php

$files_info = files_informations();

function files_informations() {
  $files = scandir('./files/');

  foreach ($files as $key => $file) {
    if ($file != "." && $file != "..") {
      $file_path = ('./files/' . $file);
      $files_info[$key] = pathinfo($file_path);
      $files_info[$key]['size'] = filesize($file_path).' bytes';
    }
  }
  return $files_info;
}
