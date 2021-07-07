
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 ">
                    <h3 class="dash-title">Welcome, Uva Wellassa University Notice Board</h3>
                    <hr/>
                </div>

                <div class="col-sm-9 col-md-8 " id="content">
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-12 ">
                            <div class="dash-button">
                                <a href="<?php echo base_url()?>student/dashboard" target="_blank">
                                <img src="<?php echo base_url()?>assests/img/go_dashboard.png" class="dash-image" alt="dash-image">
                                <p>Go to Notice Board</p>
                            </a>  
                            </div>

                            <div class="dash-button">
                                <a href="<?php echo base_url()?>admin/newnotice" >
                                <img src="<?php echo base_url()?>assests/img/newnotice.png" class="dash-image" alt="dash-image">
                                <p>New Notice</p>
                                </a>  
                            </div>

                            <div class="dash-button">
                                <a href="<?php echo base_url()?>admin/registration" >
                                <img src="<?php echo base_url()?>assests/img/user.png" class="dash-image" alt="dash-image">
                                <p>New Admin</p>
                                </a>  
                            </div>

                            <div class="dash-button">
                                <a href="<?php echo base_url()?>admin/noticelist" >
                                <img src="<?php echo base_url()?>assests/img/list.png" class="dash-image" alt="dash-image">
                                <p>Notice list</p>
                                </a>  
                            </div>
                        </div>
                    </div>
                    <div  class="row">
                        <div class="col-sm-12 col-md-12 ">

                            <div class="log-panel panel panel-primary ">
                            <div class="panel-heading">System Activities</div>
                                <div class="panel-body">

                                    <div class="table-responsive log-table-wrapper">
                                            <table class="table">
                                                <tr>
                                                    <th>log id</th>
                                                    <th>Activity</th>
                                                    <th>Done by</th>
                                                    <th>Date</th>
                                                </tr>

                                                <?php 
                                                foreach ($top_activities as  $activity) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $activity->system_log_Id; ?></td>
                                                    <td><?php echo $activity->activity; ?></td>
                                                    <td><?php echo $activity->user_firstname.' '.$activity->user_lastname ; ?></td>
                                                    <td><?php echo $activity->date ; ?></td>
                                                </tr>
                                                <?php } ?>
                             
                                            </table>
                                    </div> 

                                </div>
                            </div>

                        </div>
                    </div>

                    
                </div>
                <div class="col-sm-3 col-md-4 ">
                   <div class="table-responsive notice-update">
                        <table class="table">
                            <tr>
                                <th>New Notices</th>
                                <th>time</th>
                            </tr>

                            <?php 
                            foreach ($top_notices as  $notice) {
                             ?>
                            <tr>
                                <td><?php echo $notice->title; ?></td>
                                <td><?php echo $notice->update_date; ?></td>
                            </tr>
                             <?php } ?>
                            
                           
                        </table>
                   </div> 
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->




<!------ Include the above in your HEAD tag ---------->

