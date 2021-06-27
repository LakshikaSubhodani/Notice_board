<div class="container">

<div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 ">

            <div id="notice-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-sm" placeholder="Search Notices.." />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-sm" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
	</div>

<div class="row">

  <div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 ">



  <?php  foreach ($notices as $notice) { ?>
    <div class="notice container">
    <?php
      $faculty = $notice->faculty_Id;

      switch ($faculty) {
        case 1:
          echo '<div class="row title" style="background-color: #AAAAAA;">';
          break;
        case 2:
          echo '<div class="row title" style="background-color: #F25287;">';
          break;
        case 3:
          echo '<div class="row title" style="background-color: #A4EBF3;">';
          break;
        case 4:
          echo '<div class="row title" style="background-color: #FFDA77;">';
          break;
        case 5:
          echo '<div class="row title" style="background-color: #16C79A;">';
          break;
        default:
          echo '<div class="row title" style="background-color: #16A596;">';
      }
    ?> 
      
        <div class="col-xs-11 nopadding " ><p><?php echo $notice->notice_type ?></p></div>
        <div class="col-xs-1 nopadding" > <img class="pull-right pin" src="<?php echo base_url()?>assests/img/pin.png" ></div>
      </div>

      <div class="row content">
        <h4 class="content-title"><?php echo $notice->title; ?></h4>
        <img class="content-img" src="<?php echo base_url()?>assests/img/notice-template.jpg" >
        <div class="content-text">
        <?php echo $notice->discription; ?> 
        </div>
        <div class="content-attach">
          <p>Attachments:</p>
            <a href="#">Assignment01.pdf <i class="fa fa-download" aria-hidden="true"></i></a>
        </div>
        <div class="content-meta">
          <p> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $notice->admin_firstname.' '.$notice->admin_lastname; ?> - <span><?php echo $notice->faculty; ?></span> &nbsp; | &nbsp; <i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $notice->update_date; ?></p>
          <p> </p>
        </div>
    
      </div>

  </div>


   <?php } ?>



  </div>

</div>

</div>