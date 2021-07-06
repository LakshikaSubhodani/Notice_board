<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="navbar-brand" src="<?php echo base_url()?>assests/img/logo.png" >
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Notices<span class="sr-only">(current)</span></a></li>
        <li class=""><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Sharepoint</a></li>
        <li class=""><a href="#"><i class="fa fa-address-book" aria-hidden="true"></i> Directory</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo base_url()?>assests/img/default-user.png" class="user-image" alt="user-image">
            <?php echo $log_user->user_firstname.' '.$log_user->user_lastname  ; ?><span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('student/profile')?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('student/logout')?>"><i class="fa fa-fw fa-power-off"></i>  Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="nave-bar-space">

</div>