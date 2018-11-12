<?php

if (isset($_FILES['uploadfile']['name'])) {
  upload_files();
}

function upload_files() {
  $uploaddir = './files/';
  $uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);

  if (!empty($_FILES['uploadfile']['name'])) {
    if (file_exists($uploadfile)) {
      echo "<h3>File is already uploaded to server</h3>";
    }
    else {
      copy($_FILES['uploadfile']['tmp_name'], $uploadfile);
      if (file_exists($uploadfile)) {
        echo "<h3>File successfully uploaded to server</h3>";
      }
    }
  }
  else {
    echo "<h3>Error! Failed to upload file to server!</h3>";
  }
}
