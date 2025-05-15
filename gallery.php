<?php
$actualPage = basename($_SERVER['REQUEST_URI']);
$actualPage = str_replace(".php", "", $actualPage);
include ("includes/header.php")?>
<main>
    <h1>Gallery</h1>

    <p class="content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Doloribus aspernatur ea dolorem laboriosam veritatis cumque
         luptatum dicta natus quam. Porro excepturi impedit earu
          eum suscipit facilis ullam, dolor iusto quas.
    </p>

    <p class="content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Doloribus aspernatur ea dolorem laboriosam veritatis cumque
         luptatum dicta natus quam. Porro excepturi impedit earu
          eum suscipit facilis ullam, dolor iusto quas.
    </p>

    <p class="content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Doloribus aspernatur ea dolorem laboriosam veritatis cumque
         luptatum dicta natus quam. Porro excepturi impedit earu
          eum suscipit facilis ullam, dolor iusto quas.
    </p>

</main>
<?php include ("includes/footer.php")?>