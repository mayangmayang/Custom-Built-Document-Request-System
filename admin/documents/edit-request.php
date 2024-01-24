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
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                             <h2 class="pageheader-title">Edit Request </h2>
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
                <!-- end pageheader -->
                <!-- ============================================================== -->
                  <?php 
                    include '../init/model/config/connection2.php';
                    $GET_reqid = intval($_GET['request']);
                    $student_number = $_GET['student-number'];
                    $sql = "SELECT * FROM `tbl_documentrequest` WHERE `request_id`= ? AND studentID_no = ?";
                    $stmt = $conn->prepare($sql); 
                    $stmt->bind_param("is", $GET_reqid, $student_number);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                   ?>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card influencer-profile-data">
                                        <div class="card-body">
                                             <div class="" id="message"></div>
                                            <form id="validationform" name="docu_forms" data-parsley-validate="" novalidate="" method="POST">
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-file"></i> Request Info</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Control No.</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="text" value="<?= $row['control_no']; ?>" name="control_no" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Student ID</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" value="<?= $row['studentID_no']; ?>" name="studentID_no" type="text" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Document Name</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <select data-parsley-type="alphanum" type="text" id="document_name" required="" placeholder="" class="form-control">
                                                    <option value="" <?= ($row['document_name'] == '') ? 'selected' : ''; ?>>&larr;Select Document &rarr;</option>
                                                            <option value="Certified true copy f137 g10" <?= ($row['document_name'] == 'Certified true copy f137 g10') ? 'selected' : ''; ?>>Certified true copy f137 g10</option>
                                                            <option value="Certified true copy f137 g11" <?= ($row['document_name'] == 'Certified true copy f137 g11') ? 'selected' : ''; ?>>Certified true copy g11</option>
                                                            <option value="Certified true copy g10" <?= ($row['document_name'] == 'Certified true copy g10') ? 'selected' : ''; ?>>Certified true copy g10</option>
                                                            <option value="Good Moral" <?= ($row['document_name'] == 'Good Moral') ? 'selected' : ''; ?>>Good Moral</option>
                                                            <option value="Cert. Of GWA" <?= ($row['document_name'] == 'Cert. Of GWA') ? 'selected' : ''; ?>>Cert. Of GWA</option>
                                                            <option value="Cert. Of Marticulation" <?= ($row['document_name'] == 'Cert. Of Marticulation') ? 'selected' : ''; ?>>Cert. Of Marticulation</option>
                                                            <option value="Cert. Of Graduation" <?= ($row['document_name'] == 'Cert. Of Graduation') ? 'selected' : ''; ?>>Cert. Of Graduation</option>
                                                            <option value="Cert. Of Grades" <?= ($row['document_name'] == 'Cert. Of Grades') ? 'selected' : ''; ?>>Cert. Of Grades</option>
                                                            <option value="Cert. Of Completion" <?= ($row['document_name'] == 'Cert. Of Completion') ? 'selected' : ''; ?>>Cert. Of Completion</option>
                                                            <option value="Cert. Of Enrollment" <?= ($row['document_name'] == 'Cert. Of Enrollment') ? 'selected' : ''; ?>>Cert. Of Enrollment</option>
                                                            <option value="CAF (GM)" <?= ($row['document_name'] == 'CAF (GM)') ? 'selected' : ''; ?>>CAF (GM)</option>
                                                            <option value="CAF (COE)" <?= ($row['document_name'] == 'CAF (COE)') ? 'selected' : ''; ?>>CAF (COE)</option>
                                                            <option value="Form 137" <?= ($row['document_name'] == 'Form 137') ? 'selected' : ''; ?>>Form 137</option>
                                                       </select>
                                                    </div>
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">No. of Copies</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <select data-parsley-type="alphanum"  type="text" id="no_ofcopies" required="" placeholder="" class="form-control">
                                                    <option value="" <?= ($row['no_ofcopies'] == '') ? 'selected' : ''; ?>>&larr; Add Copies &rarr;</option>
                                                        <option value="1" <?= ($row['no_ofcopies'] == '1') ? 'selected' : ''; ?>>1</option>
                                                        <option value="2" <?= ($row['no_ofcopies'] == '2') ? 'selected' : ''; ?>>2</option>
                                                        <option value="3" <?= ($row['no_ofcopies'] == '3') ? 'selected' : ''; ?>>3</option>
                                                        <option value="4" <?= ($row['no_ofcopies'] == '4') ? 'selected' : ''; ?>>4</option>
                                                        <option value="5" <?= ($row['no_ofcopies'] == '5') ? 'selected' : ''; ?>>5</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                 <label class="col-12 col-sm-3 col-form-label text-sm-right">Amount to Pay</label>
                                                  <div class="col-12 col-sm-8 col-lg-6">
                                                    <select data-parsley-type="alphanum" type="text" id="amount_to_pay" required="" placeholder="" class="form-control">
                                                        <option value="">&larr; Select Amount &rarr;</option>
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="30">30</option>
                                                        <option value="40">40</option>
                                                        <option value="50">50</option>
                                                        <option value="60">60</option>
                                                        
                                                    </select>
                                                 </div>
                                                </div>s

                                                 <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Request</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <?php
                                                        // Use PHP to get the current date and set it as the default value
                                                        $currentDate = date('Y-m-d');
                                                    ?>
                                                    <input data-parsley-type="alphanum" type="date" name="date_request" required="" placeholder="" class="form-control" value="<?= $currentDate ?>" readonly>
                                                    </div>
                                                </div>

                                                 <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Releasing</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" value="<?= $row['date_releasing']; ?>" type="date" name="date_releasing" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                              <?php

                                                  $user_id = $_SESSION['user_id'];
                                                  $conn = new class_model();
                                                  $user = $conn->user_account($user_id);
                      
                                              ?>
                                               <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Processing Officer</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" value="<?= ucfirst($user['complete_name']); ?>" type="text" name="processing_officer" required="" placeholder="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Status</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                       <select data-parsley-type="alphanum" type="text" value="<?= $row['status']; ?>" id="status" required="" placeholder="" class="form-control">
                                                           <option value="<?= $row['status']; ?>" hidden><?= $row['status']; ?></option>
                                                           <option value="Pending" style="background-color: skyblue;color: #fff">Pending</option>
                                                           <option value="Release" style="background-color: orange;color: #fff">Release</option>
                                                           <option value="Received" style="background-color: green;color: #fff">Received</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                </div>
                                                <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                        <input name="request_id" value="<?= $row['request_id']; ?>" type="hidden">
                                                        <button type="button" class="btn btn-space btn-success" id="edit-request">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                 <?php } ?>
                            </div>
                        </div>
                    </div>
           
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
      <script>
          document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#edit-request');
              btn.addEventListener('click', () => {

                  const control_no = document.querySelector('input[name=control_no]').value;
                  const studentID_no = document.querySelector('input[name=studentID_no]').value;
                  const document_name = $('#document_name option:selected').val();
                  const no_ofcopies = $('#no_ofcopies option:selected').val();
                  const amount_to_pay = $('#amount_to_pay option:selected').val();
                  const date_request = document.querySelector('input[name=date_request]').value;
                  const date_releasing = document.querySelector('input[name=date_releasing]').value;
                  const processing_officer = document.querySelector('input[name=processing_officer]').value;
                  const status = $('#status option:selected').val();
                  const request_id = document.querySelector('input[name=request_id]').value;

                  var data = new FormData(this.form);

                  data.append('control_no', control_no);
                  data.append('studentID_no', studentID_no);
                  data.append('document_name', document_name);
                  data.append('no_ofcopies', no_ofcopies);
                  data.append('amount_to_pay', amount_to_pay);
                  data.append('date_request', date_request);
                  data.append('date_releasing', date_releasing);
                  data.append('processing_officer', processing_officer);
                  data.append('status', status);
                  data.append('request_id', request_id);


              if (control_no === '' &&  studentID_no ==='' &&  document_name ==='' &&  no_ofcopies ==='' &&  date_request ==='' &&  date_releasing ==='' &&  processing_officer ===''){
                      $('#message').html('<div class="alert alert-danger"> Required All Fields!</div>');
                    }else{
                       $.ajax({
                        url: '../init/controllers/edit_request.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                        success: function(response) {
                          $("#message").html(response);
                           window.scrollTo(0, 0);
                          },
                          error: function(response) {
                            console.log("Failed");
                          }
                      });
                   }

              });
          });
      </script>



<!--     <script>
    $('#form').parsley();
    </script> -->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

</body>
 
</html>