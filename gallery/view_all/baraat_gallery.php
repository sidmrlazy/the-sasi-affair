<?php
include 'header_main.php';
?>

<center>
    <div class="tz-gallery">
        <?php
    $all_files = glob("../../images/baraat/*.*");
    for ($i = 0; $i < count($all_files); $i++) {
      $image_name = $all_files[$i];
      $supported_format = array('gif', 'jpg', 'jpeg', 'png', 'webp');
      $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
      if (in_array($ext, $supported_format)) {
        // $file_name= explode("/",$image_name);
    ?>

        <?php
        echo '<a class="lightbox" href="' . $image_name . '">'
        ?>
        <div class="box">
            <?php
          echo '<img src="' . $image_name . '" data-echo="' . $image_name . '"/>'
          ?>
        </div>
        </a>

        <?php
      } else {
        return $image_name;
      }
    }
    ?>
    </div>
    </div>
</center>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>


<script type="text/javascript">
baguetteBox.run('.tz-gallery');
</script>

</body>

</html>