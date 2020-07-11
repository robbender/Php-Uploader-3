<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="htdocs/Web/Practice/styles.css"> -->
  <title>File Uploader</title>
</head>

<body

<?php
include 'php_uploader_2/upload.php';
 ?>
  <div class="container">
    <div class="row align-items-center">
      <div class="col ">
        <div class="mt-5">
          <h3>Submit Your File</h3>
          <div class="">
            <form class="" action="upload.php" method="POST" enctype="multipart/form-data">
              <!-- <label for="">File Upload</label> -->
              <input id="" type="file" name="file" value="">
              <!-- <input type="submit" name="submit" value="Upload"> -->
              <span class="input-group-btn">
                <button class="btn btn-warning btn-reset" type="reset">Reset</button>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </span>
              <!-- <img id="blah" src="#" alt="your image" /> -->
              <div id="image-holder"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://use.fontawesome.com/3e83885d26.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>