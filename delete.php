<?php

if (isset($_POST['delete'])) {
  delete_file();
}

function delete_file() {
  $filename = $_POST['delete'];
  unlink('./files/' . $filename);
  echo "<h3>File $filename successfully removed from the server!</h3>";
}
