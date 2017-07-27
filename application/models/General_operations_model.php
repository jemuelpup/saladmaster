<?php

class General_operations_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function verified($userName,$password){
    $sql = "SELECT `id` FROM `accounts` WHERE  `username`='$userName' and `password` = '$password' and `active` = 1";

    $query = $this->db->query($sql);

    if($query->num_rows()){

      $queryObj = $query->result(); // to get the values
      foreach ($query->result() as $row) {
        return $row->id;
      }
      
    }
    return false;
  }
  /*
  Write here the common js files
  */
  public function getCommonCSS($base_url){
    return "
      <link href='".$base_url."assets/plugins/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
      <link rel='stylesheet' href='".$base_url."assets/plugins/AdminLTE/dist/css/AdminLTE.min.css'>
      <link rel='stylesheet' href='".$base_url."assets/plugins/AdminLTE/dist/css/skins/_all-skins.min.css'>
      <link rel='stylesheet' href='".$base_url."assets/css/material_custom.css'>
      ";
  }
  /*
  Write here the common css files
  */
  public function getCommonJS($base_url){
    return "
      <script src='".$base_url."assets/plugins/jquery-2.2.3.min.js'></script>
      <script src='".$base_url."assets/plugins/bootstrap/js/bootstrap.min.js'></script>
      <script src='".$base_url."assets/plugins/slimScroll/jquery.slimscroll.min.js'></script>
      <script src='".$base_url."assets/plugins/fastclick/fastclick.js'></script>
      <script src='".$base_url."assets/plugins/AdminLTE/dist/js/app.min.js'></script>
      <script src='".$base_url."assets/plugins/AdminLTE/dist/js/demo.js'></script>
      <script src='".$base_url."assets/js/material_js.js'></script>
    ";
  }
	/*
  all css and js
  */
  public function getAllCss(){
    return "
      <script src='".$base_url."assets/plugins/jquery-2.2.3.min.js'></script>
      <script src='https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'></script>
      <script> $.widget.bridge('uibutton', $.ui.button); </script>
      <script src='".$base_url."assets/plugins/bootstrap/js/bootstrap.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
      <script src='".$base_url."assets/plugins/morris/morris.min.js'></script>
      <script src='".$base_url."assets/plugins/sparkline/jquery.sparkline.min.js'></script>
      <script src='".$base_url."assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
      <script src='".$base_url."assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
      <script src='".$base_url."assets/plugins/knob/jquery.knob.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js'></script>
      <script src='".$base_url."assets/plugins/daterangepicker/daterangepicker.js'></script>
      <script src='".$base_url."assets/plugins/datepicker/bootstrap-datepicker.js'></script>
      <script src='".$base_url."assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'></script>
      <script src='".$base_url."assets/plugins/slimScroll/jquery.slimscroll.min.js'></script>
      <script src='".$base_url."assets/plugins/fastclick/fastclick.js'></script>
      <script src='".$base_url."assets/plugins/AdminLTE/dist/js/app.min.js'></script>
      <script src='".$base_url."assets/plugins/AdminLTE/dist/js/demo.js'></script>
      <script src='".$base_url."assets/plugins/chartjs/Chart.min.js'></script>
    ";
  }
  
  public function getAllJS($base_url){
    return "
      <script src='".$base_url."assets/plugins/jquery-2.2.3.min.js'></script>
      <script src='https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'></script>
      <script> $.widget.bridge('uibutton', $.ui.button); </script>
      <script src='".$base_url."assets/plugins/bootstrap/js/bootstrap.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
      <script src='".$base_url."assets/plugins/morris/morris.min.js'></script>
      <script src='".$base_url."assets/plugins/sparkline/jquery.sparkline.min.js'></script>
      <script src='".$base_url."assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
      <script src='".$base_url."assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
      <script src='".$base_url."assets/plugins/knob/jquery.knob.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js'></script>
      <script src='".$base_url."assets/plugins/daterangepicker/daterangepicker.js'></script>
      <script src='".$base_url."assets/plugins/datepicker/bootstrap-datepicker.js'></script>
      <script src='".$base_url."assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'></script>
      <script src='".$base_url."assets/plugins/slimScroll/jquery.slimscroll.min.js'></script>
      <script src='".$base_url."assets/plugins/fastclick/fastclick.js'></script>
      <script src='".$base_url."assets/plugins/AdminLTE/dist/js/app.min.js'></script>
      <script src='".$base_url."assets/plugins/AdminLTE/dist/js/demo.js'></script>
      <script src='".$base_url."assets/plugins/chartjs/Chart.min.js'></script>
    ";
  }
}

