<?php include("header.php");?>

<?php
$csv = array_map('str_getcsv', file('datos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
$la_url = $_GET['url'];
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="site-heading">
                <h1><?php echo($csv[$la_url]["titulo"])?></h1>
                <hr class="small">
                <span class="subheading"><?php echo($csv[$la_url]["tags"]);?></span>
            </div>
        </div>
    </div>
</div>
</header>


    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <h2><?php echo($csv[$la_url]["apa"])?></h2>
                <?php echo($csv[$la_url]["texto"])?>
              <img src="<?php echo $csv[$a]['imagen'];?>"class="img-responsive">
             <p><a href="<?php echo $csv[$a]['vinculo'];?>">Artículo</a></p>
             <h4><?php echo($csv[$la_url]["tags"])?></h4>


              </div>
            </div>
        </div>
    </article>

    <hr>

    <?php include("footer.php");?>
