<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Upload files site</title>
  <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="upload">
  <form action='#' method=post enctype=multipart/form-data>
    <input type=file name=uploadfile value=Загрузить>
    <input type=submit value=Загрузить class="load-file">
  </form>
</div>
<div class="table">
  <?php if (isset($files_info)): ?>
    <table class="info-table">
      <tr>
        <th class="number">№</th>
        <th class="dir">Directory name</th>
        <th class="full">Full name</th>
        <th class="extencion">Extencion</th>
        <th class="name">File name</th>
        <th class="size">Size</th>
      </tr>
      <?php foreach ($files_info as $file_info): ?>
        <tr>
          <th><?php $i += 1;
            echo $i ?>
          </th>
          <?php foreach ($file_info as $key => $value): ?>
            <th>
              <?php echo $value ?>
            </th>
          <?php endforeach; ?>
        <th class="delete">
            <form action="index.php" method="POST" class="delete-form">
              <button name="delete" value="<?php echo $file_info['basename'] ?>">delete</button>
            </form>
          </th>
          <th class="download">
            <p><a href="index.php?file=<?php echo urlencode($file_info['basename']) ?>">download</a>
            </p>
          </th>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>
</div>
</body>
</html>

