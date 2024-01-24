       <?php include('main_header/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
         <?php include('left_sidebar/sidebar.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pagehader  -->
                <!-- ============================================================== -->
           <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Overview </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
                <!-- ============================================================== -->
                <!-- pagehader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- metric -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        
                               <?php 
                                    $conn = new class_model();
                                    $cstudent = $conn->count_numberofstudents();
                               ?>
                               <?php foreach ($cstudent as $row): ?>
                                <div class="d-inline-block">
                                    <h5 class="text-muted">Students</h5>
                                    <h2 class="mb-0"><?= $row['count_students']; ?></h2>
                                </div>
                                <div class="float-right  bg-info-light mt-1">
                                    
                                </div>
                                <?php endforeach;?>
                          
                    </div>
                    <!-- /. metric -->
                    <!-- metric -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                       
                              <?php 
                                    $conn = new class_model();
                                    $cstudent = $conn->count_numberoftotalrequest();
                               ?>
                               <?php foreach ($cstudent as $row): ?>
                                <div class="d-inline-block">
                                    <h5 class="text-muted"> Total requests</h5>
                                    <h2 class="mb-0"><?= $row['count_request']; ?></h2>
                                </div>
                                <div class="float-right  bg-info-light mt-1">
                                    
                                </div>
                                 <?php endforeach;?>
                         
                    </div>
                    <!-- /. metric -->
                    <!-- metric -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        
                               <?php 
                                    $conn = new class_model();
                                    $cstudent = $conn->count_numberoftotalpending();
                               ?>
                               <?php foreach ($cstudent as $row): ?>
                                <div class="d-inline-block">
                                    <h5 class="text-muted"> Pending requests</h5>
                                    <h2 class="mb-0"><?= $row['count_pending']; ?></h2>
                                </div>
                                <div class="float-right  bg-info-light mt-1">
                                    
                                </div>
                                 <?php endforeach;?>
                       
                    </div>
                    <!-- /. metric -->
                    <!-- metric -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        
                              <?php 
                                    $conn = new class_model();
                                    $cstudent = $conn->count_numberoftotalreceived();
                               ?>
                               <?php foreach ($cstudent as $row): ?>
                                <div class="d-inline-block">
                                    <h5 class="text-muted">Completed requests</h5>
                                    <h2 class="mb-0"><?= $row['count_received']; ?></h2>
                                </div>
                                <div class="float-right bg-info-light mt-1">
                                   
                                </div>
                                 <?php endforeach;?>
                         
                    </div>
                    <!-- /. metric -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstrap bundle js-->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chartjs js-->
    <script src="../assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="../assets/vendor/charts/charts-bundle/chartjs.js"></script>
   
    <!-- main js-->
    <script src="../assets/libs/js/main-js.js"></script>
     <!-- dashboard sales js-->
    <script src="../assets/libs/js/dashboard-sales.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
</body>
 
</html>