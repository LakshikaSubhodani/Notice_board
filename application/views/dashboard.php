<div class="container">

<div class="row">

  <div class="col-md-6 col-md-offset-3 col-xs-12">


  <?php  foreach ($notices as $notice) { ?>

    <div class="panel panel-primary">
      <div class="panel-heading"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <?php echo $notice->title; ?></div>
      <div class="panel-body">
          <p> <?php echo $notice->discription; ?></p>
      </div>
      <div ><i class="bi bi-bell-fill"></i></div>
  
    </div>


   <?php } ?>



  </div>

</div>

</div>