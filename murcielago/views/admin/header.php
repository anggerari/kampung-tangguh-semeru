<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pakis Asri Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
 <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/iCheck/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>bower_components/select2/dist/css/select2.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>dist/css/skins/_all-skins.min.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>plugins/pace/pace.css">
   <meta name="theme-color" content="#27ae60">
   <link rel="icon" href="<?php echo base_url('assets/admin/img/logo tes baru.png') ?>">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/sweetalert2/dist/sweetalert2.min.css">
<script src="<?php echo base_url() ?>assets/admin/plugins/tinymce/tinymce.min.js"></script>

<script>
tinymce.init({
selector: 'textarea',
height: 300,
theme: 'modern',

// ===========================================
// INCLUDE THE PLUGIN
// ===========================================

plugins: [
'advlist autolink lists link image charmap print hr anchor pagebreak',
'searchreplace wordcount visualblocks visualchars code fullscreen',
'insertdatetime media nonbreaking save table contextmenu directionality',
'emoticons template paste textcolor colorpicker textpattern imagetools codesample jbimages preview'
],

// ===========================================
// PUT PLUGIN'S BUTTON on the toolbar
// ===========================================

toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print media | forecolor backcolor emoticons | codesample jbimages | preview',
//toolbar2: 'print media | forecolor backcolor emoticons | codesample jbimages | preview',
image_advtab: true,

// ===========================================
// SET RELATIVE_URLS to FALSE (This is required for images to display properly)
// ===========================================

relative_urls: false

});
</script>
<style>
    .swal2-popup {
    font-size: 1.6rem !important;
    }
    [type=radio]:checked,
    [type=radio]:not(:checked) {
        position: absolute;
        left: -9999px;
        opacity: 0
    }
    [type=radio]:checked+label,
    [type=radio]:not(:checked)+label {
        position: relative;
        padding-left: 35px;
        cursor: pointer;
        display: inline-block;
        height: 25px;
        line-height: 25px;
        font-size: 1rem;
        transition: .28s ease;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }
    [type=radio]+label:after,
    [type=radio]+label:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        margin: 4px;
        width: 16px;
        height: 16px;
        z-index: 0;
        transition: .28s ease
    }
    [type=radio].with-gap:checked+label:after,
    [type=radio].with-gap:checked+label:before,
    [type=radio]:checked+label:after,
    [type=radio]:checked+label:before,
    [type=radio]:not(:checked)+label:after,
    [type=radio]:not(:checked)+label:before {
        border-radius: 50%
    }
    [type=radio]:not(:checked)+label:after,
    [type=radio]:not(:checked)+label:before {
        border: 1px solid #b1b8bb
    }
    [type=radio]:not(:checked)+label:after {
        z-index: -1;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0)
    }
    [type=radio]:checked+label:before {
        border: 2px solid transparent;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap:checked+label:after,
    [type=radio].with-gap:checked+label:before,
    [type=radio]:checked+label:after {
        border: 2px solid #26a69a
    }
    [type=radio].with-gap:checked+label:after,
    [type=radio]:checked+label:after {
        background-color: #26a69a;
        z-index: 0
    }
    [type=radio]:checked+label:after {
        -webkit-transform: scale(1.02);
        -ms-transform: scale(1.02);
        transform: scale(1.02)
    }
    [type=radio].with-gap:checked+label:after {
        -webkit-transform: scale(0.5);
        -ms-transform: scale(0.5);
        transform: scale(0.5)
    }
    [type=radio].tabbed:focus+label:before {
        box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap:disabled:checked+label:before {
        border: 2px solid rgba(0, 0, 0, 0.26);
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap:disabled:checked+label:after {
        border: none;
        background-color: rgba(0, 0, 0, 0.26)
    }
    [type=radio]:disabled:checked+label:before,
    [type=radio]:disabled:not(:checked)+label:before {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.26);
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio]:disabled+label {
        color: rgba(0, 0, 0, 0.26)
    }
    [type=radio]:disabled:not(:checked)+label:before {
        border-color: rgba(0, 0, 0, 0.26)
    }
    [type=radio]:disabled:checked+label:after {
        background-color: rgba(0, 0, 0, 0.26);
        border-color: #BDBDBD
    }
    [type=checkbox]:checked,
    [type=checkbox]:not(:checked) {
        position: absolute;
        left: -9999px;
        opacity: 0
    }
    [type=checkbox] {}
    [type=checkbox]+label {
        position: relative;
        padding-left: 35px;
        cursor: pointer;
        display: inline-block;
        height: 25px;
        line-height: 25px;
        font-size: 1rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -khtml-user-select: none;
        -ms-user-select: none
    }
    [type=checkbox]+label:before,
    [type=checkbox]:not(.filled-in)+label:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 18px;
        height: 18px;
        z-index: 0;
        border: 1px solid #b1b8bb;
        border-radius: 1px;
        margin-top: 2px;
        transition: .2s
    }
    [type=checkbox]:not(.filled-in)+label:after {
        border: 0;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0)
    }
    [type=checkbox]:not(:checked):disabled+label:before {
        border: none;
        background-color: rgba(0, 0, 0, 0.26)
    }
    [type=checkbox].tabbed:focus+label:after {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        border: 0;
        border-radius: 50%;
        box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: rgba(0, 0, 0, 0.1)
    }
    [type=checkbox]:checked+label:before {
        top: -4px;
        left: -5px;
        width: 12px;
        height: 22px;
        border-top: 2px solid transparent;
        border-left: 2px solid transparent;
        border-right: 2px solid #26a69a;
        border-bottom: 2px solid #26a69a;
        -webkit-transform: rotate(40deg);
        -ms-transform: rotate(40deg);
        transform: rotate(40deg);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
        transform-origin: 100% 100%
    }
    [type=checkbox]:checked:disabled+label:before {
        border-right: 2px solid rgba(0, 0, 0, 0.26);
        border-bottom: 2px solid rgba(0, 0, 0, 0.26)
    }
    [type=checkbox]:indeterminate+label:before {
        top: -11px;
        left: -12px;
        width: 10px;
        height: 22px;
        border-top: none;
        border-left: none;
        border-right: 2px solid #26a69a;
        border-bottom: none;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
        transform-origin: 100% 100%
    }
    [type=checkbox]:indeterminate:disabled+label:before {
        border-right: 2px solid rgba(0, 0, 0, 0.26);
        background-color: transparent
    }
    [type=checkbox].filled-in+label:after {
        border-radius: 2px
    }
    [type=checkbox].filled-in+label:after,
    [type=checkbox].filled-in+label:before {
        content: '';
        left: 0;
        position: absolute;
        transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
        z-index: 1
    }
    [type=checkbox].filled-in:not(:checked)+label:before {
        width: 0;
        height: 0;
        border: 3px solid transparent;
        left: 6px;
        top: 10px;
        -webkit-transform: rotateZ(37deg);
        -ms-transform: rotate(37deg);
        transform: rotateZ(37deg);
        -webkit-transform-origin: 20% 40%;
        -ms-transform-origin: 100% 100%;
        transform-origin: 100% 100%
    }
    [type=checkbox].filled-in:not(:checked)+label:after {
        height: 20px;
        width: 20px;
        background-color: transparent;
        border: 1px solid #b1b8bb;
        top: 0px;
        z-index: 0
    }
    [type=checkbox].filled-in:checked+label:before {
        top: 0;
        left: 1px;
        width: 8px;
        height: 13px;
        border-top: 2px solid transparent;
        border-left: 2px solid transparent;
        border-right: 2px solid #fff;
        border-bottom: 2px solid #fff;
        -webkit-transform: rotateZ(37deg);
        -ms-transform: rotate(37deg);
        transform: rotateZ(37deg);
        -webkit-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
        transform-origin: 100% 100%
    }
    [type=checkbox].filled-in:checked+label:after {
        top: 0;
        width: 20px;
        height: 20px;
        border: 2px solid #26a69a;
        background-color: #26a69a;
        z-index: 0
    }
    [type=checkbox].filled-in.tabbed:focus+label:after {
        border-radius: 2px;
        border-color: #5a5a5a;
        background-color: rgba(0, 0, 0, 0.1)
    }
    [type=checkbox].filled-in.tabbed:checked:focus+label:after {
        border-radius: 2px;
        background-color: #26a69a;
        border-color: #26a69a
    }
    [type=checkbox].filled-in:disabled:not(:checked)+label:before {
        background-color: transparent;
        border: 2px solid transparent
    }
    [type=checkbox].filled-in:disabled:not(:checked)+label:after {
        border-color: transparent;
        background-color: #BDBDBD
    }
    [type=checkbox].filled-in:disabled:checked+label:before {
        background-color: transparent
    }
    [type=checkbox].filled-in:disabled:checked+label:after {
        background-color: #BDBDBD;
        border-color: #BDBDBD
    }
    .switch,
    .switch * {
        -webkit-user-select: none;
        -moz-user-select: none;
        -khtml-user-select: none;
        -ms-user-select: none
    }
    .switch label {
        cursor: pointer
    }
    .switch label input[type=checkbox] {
        opacity: 0;
        width: 0;
        height: 0
    }
    .switch label input[type=checkbox]:checked+.lever {
        background-color: #84c7c1
    }
    .switch label input[type=checkbox]:checked+.lever:after {
        background-color: #26a69a;
        left: 24px
    }
    .switch label .lever {
        content: "";
        display: inline-block;
        position: relative;
        width: 40px;
        height: 15px;
        background-color: #818181;
        border-radius: 15px;
        margin-right: 10px;
        transition: background 0.3s ease;
        vertical-align: middle;
        margin: 0 16px
    }
    .switch label .lever:after {
        content: "";
        position: absolute;
        display: inline-block;
        width: 21px;
        height: 21px;
        background-color: #F1F1F1;
        border-radius: 21px;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
        left: -5px;
        top: -3px;
        transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease
    }
    input[type=checkbox]:checked:not(:disabled).tabbed:focus~.lever:after,
    input[type=checkbox]:checked:not(:disabled)~.lever:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1)
    }
    input[type=checkbox]:not(:disabled).tabbed:focus~.lever:after,
    input[type=checkbox]:not(:disabled)~.lever:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08)
    }
    .switch input[type=checkbox][disabled]+.lever {
        cursor: default
    }
    .switch label input[type=checkbox][disabled]+.lever:after,
    .switch label input[type=checkbox][disabled]:checked+.lever:after {
        background-color: #BDBDBD
    }
    .scale-up {
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        display: inline-block;
        -webkit-transform-origin: right 0px;
        -ms-transform-origin: right 0px;
        transform-origin: right 0px
    }
    .scale-up-left {
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        display: inline-block;
        -webkit-transform-origin: left 0px;
        -ms-transform-origin: left 0px;
        transform-origin: left 0px
    }
    .show>.scale-up {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: right 0px;
        -ms-transform-origin: right 0px;
        transform-origin: right 0px
    }
    .show>.scale-up-left {
        -ms-transform: scale(1);
        transform: scale(1);
        -webkit-transform: scale(1);
        -webkit-transform-origin: left 0px;
        -ms-transform-origin: left 0px;
        transform-origin: left 0px
    }
    .card {
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
        border-radius: 4px
    }
    .well,
    pre {
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1)
    }
    .page-titles .justify-content-end:last-child .d-flex {
        margin-right: 10px
    }
    .btn-circle.right-side-toggle {
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 25px;
        z-index: 10
    }
    @-webkit-keyframes ripple {
        0% {
            box-shadow: 0px 0px 0px 1px transparent
        }
        50% {
            box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1)
        }
        to {
            box-shadow: 0px 0px 0px 15px transparent
        }
    }
    @keyframes ripple {
        0% {
            box-shadow: 0px 0px 0px 1px transparent
        }
        50% {
            box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1)
        }
        to {
            box-shadow: 0px 0px 0px 15px transparent
        }
    }
    .bootstrap-select.btn-group .dropdown-menu {
        margin-top: -40px;
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1)
    }
    .demo-checkbox label,
    .demo-radio-button label {
        min-width: 200px;
        margin-bottom: 20px
    }
    .demo-swtich .demo-switch-title,
    .demo-swtich .switch {
        width: 150px;
        margin-bottom: 10px;
        display: inline-block
    }
    [type=checkbox]+label {
        padding-left: 26px;
        height: 25px;
        line-height: 21px;
        font-weight: normal
    }
    [type=checkbox]:checked+label:before {
        top: -4px;
        left: -2px;
        width: 11px;
        height: 19px
    }
    [type=checkbox]:checked.chk-col-red+label:before {
        border-right: 2px solid #fb3a3a;
        border-bottom: 2px solid #fb3a3a
    }
    [type=checkbox]:checked.chk-col-pink+label:before {
        border-right: 2px solid #E91E63;
        border-bottom: 2px solid #E91E63
    }
    [type=checkbox]:checked.chk-col-purple+label:before {
        border-right: 2px solid #7460ee;
        border-bottom: 2px solid #7460ee
    }
    [type=checkbox]:checked.chk-col-deep-purple+label:before {
        border-right: 2px solid #673AB7;
        border-bottom: 2px solid #673AB7
    }
    [type=checkbox]:checked.chk-col-indigo+label:before {
        border-right: 2px solid #3F51B5;
        border-bottom: 2px solid #3F51B5
    }
    [type=checkbox]:checked.chk-col-blue+label:before {
        border-right: 2px solid #02bec9;
        border-bottom: 2px solid #02bec9
    }
    [type=checkbox]:checked.chk-col-light-blue+label:before {
        border-right: 2px solid #03A9F4;
        border-bottom: 2px solid #03A9F4
    }
    [type=checkbox]:checked.chk-col-cyan+label:before {
        border-right: 2px solid #00BCD4;
        border-bottom: 2px solid #00BCD4
    }
    [type=checkbox]:checked.chk-col-teal+label:before {
        border-right: 2px solid #009688;
        border-bottom: 2px solid #009688
    }
    [type=checkbox]:checked.chk-col-green+label:before {
        border-right: 2px solid #26c6da;
        border-bottom: 2px solid #26c6da
    }
    [type=checkbox]:checked.chk-col-light-green+label:before {
        border-right: 2px solid #8BC34A;
        border-bottom: 2px solid #8BC34A
    }
    [type=checkbox]:checked.chk-col-lime+label:before {
        border-right: 2px solid #CDDC39;
        border-bottom: 2px solid #CDDC39
    }
    [type=checkbox]:checked.chk-col-yellow+label:before {
        border-right: 2px solid #ffe821;
        border-bottom: 2px solid #ffe821
    }
    [type=checkbox]:checked.chk-col-amber+label:before {
        border-right: 2px solid #FFC107;
        border-bottom: 2px solid #FFC107
    }
    [type=checkbox]:checked.chk-col-orange+label:before {
        border-right: 2px solid #FF9800;
        border-bottom: 2px solid #FF9800
    }
    [type=checkbox]:checked.chk-col-deep-orange+label:before {
        border-right: 2px solid #FF5722;
        border-bottom: 2px solid #FF5722
    }
    [type=checkbox]:checked.chk-col-brown+label:before {
        border-right: 2px solid #795548;
        border-bottom: 2px solid #795548
    }
    [type=checkbox]:checked.chk-col-grey+label:before {
        border-right: 2px solid #9E9E9E;
        border-bottom: 2px solid #9E9E9E
    }
    [type=checkbox]:checked.chk-col-blue-grey+label:before {
        border-right: 2px solid #607D8B;
        border-bottom: 2px solid #607D8B
    }
    [type=checkbox]:checked.chk-col-black+label:before {
        border-right: 2px solid #000000;
        border-bottom: 2px solid #000000
    }
    [type=checkbox]:checked.chk-col-white+label:before {
        border-right: 2px solid #ffffff;
        border-bottom: 2px solid #ffffff
    }
    [type=checkbox].filled-in:checked+label:after {
        top: 0;
        width: 20px;
        height: 20px;
        border: 2px solid #26a69a;
        background-color: #26a69a;
        z-index: 0
    }
    [type=checkbox].filled-in:checked+label:before {
        border-right: 2px solid #fff!important;
        border-bottom: 2px solid #fff!important
    }
    [type=checkbox].filled-in:checked.chk-col-red+label:after {
        border: 2px solid #fb3a3a;
        background-color: #fb3a3a
    }
    [type=checkbox].filled-in:checked.chk-col-pink+label:after {
        border: 2px solid #E91E63;
        background-color: #E91E63
    }
    [type=checkbox].filled-in:checked.chk-col-purple+label:after {
        border: 2px solid #7460ee;
        background-color: #7460ee
    }
    [type=checkbox].filled-in:checked.chk-col-deep-purple+label:after {
        border: 2px solid #673AB7;
        background-color: #673AB7
    }
    [type=checkbox].filled-in:checked.chk-col-indigo+label:after {
        border: 2px solid #3F51B5;
        background-color: #3F51B5
    }
    [type=checkbox].filled-in:checked.chk-col-blue+label:after {
        border: 2px solid #02bec9;
        background-color: #02bec9
    }
    [type=checkbox].filled-in:checked.chk-col-light-blue+label:after {
        border: 2px solid #03A9F4;
        background-color: #03A9F4
    }
    [type=checkbox].filled-in:checked.chk-col-cyan+label:after {
        border: 2px solid #00BCD4;
        background-color: #00BCD4
    }
    [type=checkbox].filled-in:checked.chk-col-teal+label:after {
        border: 2px solid #009688;
        background-color: #009688
    }
    [type=checkbox].filled-in:checked.chk-col-green+label:after {
        border: 2px solid #26c6da;
        background-color: #26c6da
    }
    [type=checkbox].filled-in:checked.chk-col-light-green+label:after {
        border: 2px solid #8BC34A;
        background-color: #8BC34A
    }
    [type=checkbox].filled-in:checked.chk-col-lime+label:after {
        border: 2px solid #CDDC39;
        background-color: #CDDC39
    }
    [type=checkbox].filled-in:checked.chk-col-yellow+label:after {
        border: 2px solid #ffe821;
        background-color: #ffe821
    }
    [type=checkbox].filled-in:checked.chk-col-amber+label:after {
        border: 2px solid #FFC107;
        background-color: #FFC107
    }
    [type=checkbox].filled-in:checked.chk-col-orange+label:after {
        border: 2px solid #FF9800;
        background-color: #FF9800
    }
    [type=checkbox].filled-in:checked.chk-col-deep-orange+label:after {
        border: 2px solid #FF5722;
        background-color: #FF5722
    }
    [type=checkbox].filled-in:checked.chk-col-brown+label:after {
        border: 2px solid #795548;
        background-color: #795548
    }
    [type=checkbox].filled-in:checked.chk-col-grey+label:after {
        border: 2px solid #9E9E9E;
        background-color: #9E9E9E
    }
    [type=checkbox].filled-in:checked.chk-col-blue-grey+label:after {
        border: 2px solid #607D8B;
        background-color: #607D8B
    }
    [type=checkbox].filled-in:checked.chk-col-black+label:after {
        border: 2px solid #000000;
        background-color: #000000
    }
    [type=checkbox].filled-in:checked.chk-col-white+label:after {
        border: 2px solid #ffffff;
        background-color: #ffffff
    }
    [type=radio]:not(:checked)+label {
        padding-left: 26px;
        height: 25px;
        line-height: 25px;
        font-weight: normal
    }
    [type=radio]:checked+label {
        padding-left: 26px;
        height: 25px;
        line-height: 25px;
        font-weight: normal
    }
    [type=radio].radio-col-red:checked+label:after {
        background-color: #fb3a3a;
        border-color: #fb3a3a;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-pink:checked+label:after {
        background-color: #E91E63;
        border-color: #E91E63;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-purple:checked+label:after {
        background-color: #7460ee;
        border-color: #7460ee;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-deep-purple:checked+label:after {
        background-color: #673AB7;
        border-color: #673AB7;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-indigo:checked+label:after {
        background-color: #3F51B5;
        border-color: #3F51B5;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-blue:checked+label:after {
        background-color: #02bec9;
        border-color: #02bec9;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-light-blue:checked+label:after {
        background-color: #03A9F4;
        border-color: #03A9F4;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-cyan:checked+label:after {
        background-color: #00BCD4;
        border-color: #00BCD4;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-teal:checked+label:after {
        background-color: #009688;
        border-color: #009688;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-green:checked+label:after {
        background-color: #26c6da;
        border-color: #26c6da;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-light-green:checked+label:after {
        background-color: #2ecc71;
        border-color: #27ae60;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-lime:checked+label:after {
        background-color: #CDDC39;
        border-color: #CDDC39;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-yellow:checked+label:after {
        background-color: #ffe821;
        border-color: #ffe821;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-amber:checked+label:after {
        background-color: #FFC107;
        border-color: #FFC107;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-orange:checked+label:after {
        background-color: #FF9800;
        border-color: #FF9800;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-deep-orange:checked+label:after {
        background-color: #FF5722;
        border-color: #FF5722;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-brown:checked+label:after {
        background-color: #795548;
        border-color: #795548;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-grey:checked+label:after {
        background-color: #9E9E9E;
        border-color: #9E9E9E;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-blue-grey:checked+label:after {
        background-color: #607D8B;
        border-color: #607D8B;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-black:checked+label:after {
        background-color: #000000;
        border-color: #000000;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].radio-col-white:checked+label:after {
        background-color: #ffffff;
        border-color: #ffffff;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-red:checked+label:before {
        border: 2px solid #fb3a3a;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-red:checked+label:after {
        background-color: #fb3a3a;
        border: 2px solid #fb3a3a;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-pink:checked+label:before {
        border: 2px solid #E91E63;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-pink:checked+label:after {
        background-color: #E91E63;
        border: 2px solid #E91E63;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-purple:checked+label:before {
        border: 2px solid #7460ee;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-purple:checked+label:after {
        background-color: #7460ee;
        border: 2px solid #7460ee;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-deep-purple:checked+label:before {
        border: 2px solid #673AB7;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-deep-purple:checked+label:after {
        background-color: #673AB7;
        border: 2px solid #673AB7;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-indigo:checked+label:before {
        border: 2px solid #3F51B5;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-indigo:checked+label:after {
        background-color: #3F51B5;
        border: 2px solid #3F51B5;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-blue:checked+label:before {
        border: 2px solid #02bec9;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-blue:checked+label:after {
        background-color: #02bec9;
        border: 2px solid #02bec9;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-light-blue:checked+label:before {
        border: 2px solid #03A9F4;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-light-blue:checked+label:after {
        background-color: #03A9F4;
        border: 2px solid #03A9F4;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-cyan:checked+label:before {
        border: 2px solid #00BCD4;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-cyan:checked+label:after {
        background-color: #00BCD4;
        border: 2px solid #00BCD4;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-teal:checked+label:before {
        border: 2px solid #009688;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-teal:checked+label:after {
        background-color: #009688;
        border: 2px solid #009688;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-green:checked+label:before {
        border: 2px solid #26c6da;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-green:checked+label:after {
        background-color: #26c6da;
        border: 2px solid #26c6da;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-light-green:checked+label:before {
        border: 2px solid #2ecc71;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-light-green:checked+label:after {
        background-color: #27ae60;
        border: 2px solid #2ecc71;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-lime:checked+label:before {
        border: 2px solid #CDDC39;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-lime:checked+label:after {
        background-color: #CDDC39;
        border: 2px solid #CDDC39;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-yellow:checked+label:before {
        border: 2px solid #ffe821;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-yellow:checked+label:after {
        background-color: #ffe821;
        border: 2px solid #ffe821;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-amber:checked+label:before {
        border: 2px solid #FFC107;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-amber:checked+label:after {
        background-color: #FFC107;
        border: 2px solid #FFC107;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-orange:checked+label:before {
        border: 2px solid #FF9800;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-orange:checked+label:after {
        background-color: #FF9800;
        border: 2px solid #FF9800;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-deep-orange:checked+label:before {
        border: 2px solid #FF5722;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-deep-orange:checked+label:after {
        background-color: #FF5722;
        border: 2px solid #FF5722;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-brown:checked+label:before {
        border: 2px solid #795548;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-brown:checked+label:after {
        background-color: #795548;
        border: 2px solid #795548;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-grey:checked+label:before {
        border: 2px solid #9E9E9E;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-grey:checked+label:after {
        background-color: #9E9E9E;
        border: 2px solid #9E9E9E;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-blue-grey:checked+label:before {
        border: 2px solid #607D8B;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-blue-grey:checked+label:after {
        background-color: #607D8B;
        border: 2px solid #607D8B;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-black:checked+label:before {
        border: 2px solid #000000;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-black:checked+label:after {
        background-color: #000000;
        border: 2px solid #000000;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-white:checked+label:before {
        border: 2px solid #ffffff;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    [type=radio].with-gap.radio-col-white:checked+label:after {
        background-color: #ffffff;
        border: 2px solid #ffffff;
        -webkit-animation: ripple 0.2s linear forwards;
        animation: ripple 0.2s linear forwards
    }
    .switch label {
        font-weight: normal;
        font-size: 13px
    }
    .switch label .lever {
        margin: 0 14px
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-red:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(251, 58, 58, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-red {
        background-color: rgba(251, 58, 58, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-red:after {
        background-color: #fb3a3a
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-pink:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(233, 30, 99, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-pink {
        background-color: rgba(233, 30, 99, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-pink:after {
        background-color: #E91E63
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-purple:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(116, 96, 238, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-purple {
        background-color: rgba(116, 96, 238, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-purple:after {
        background-color: #7460ee
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-deep-purple:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(103, 58, 183, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-deep-purple {
        background-color: rgba(103, 58, 183, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-deep-purple:after {
        background-color: #673AB7
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-indigo:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(63, 81, 181, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-indigo {
        background-color: rgba(63, 81, 181, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-indigo:after {
        background-color: #3F51B5
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-blue:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(2, 190, 201, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-blue {
        background-color: rgba(2, 190, 201, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-blue:after {
        background-color: #02bec9
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-light-blue:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(3, 169, 244, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-light-blue {
        background-color: rgba(3, 169, 244, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-light-blue:after {
        background-color: #03A9F4
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-cyan:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 188, 212, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-cyan {
        background-color: rgba(0, 188, 212, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-cyan:after {
        background-color: #00BCD4
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-teal:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 150, 136, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-teal {
        background-color: rgba(0, 150, 136, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-teal:after {
        background-color: #009688
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-green:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 198, 218, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-green {
        background-color: rgba(38, 198, 218, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-green:after {
        background-color: #26c6da
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-light-green:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(139, 195, 74, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-light-green {
        background-color: rgba(139, 195, 74, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-light-green:after {
        background-color: #8BC34A
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-lime:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(205, 220, 57, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-lime {
        background-color: rgba(205, 220, 57, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-lime:after {
        background-color: #CDDC39
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-yellow:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 232, 33, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-yellow {
        background-color: rgba(255, 232, 33, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-yellow:after {
        background-color: #ffe821
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-amber:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 193, 7, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-amber {
        background-color: rgba(255, 193, 7, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-amber:after {
        background-color: #FFC107
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-orange:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 152, 0, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-orange {
        background-color: rgba(255, 152, 0, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-orange:after {
        background-color: #FF9800
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-deep-orange:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 87, 34, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-deep-orange {
        background-color: rgba(255, 87, 34, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-deep-orange:after {
        background-color: #FF5722
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-brown:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(121, 85, 72, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-brown {
        background-color: rgba(121, 85, 72, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-brown:after {
        background-color: #795548
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-grey:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(158, 158, 158, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-grey {
        background-color: rgba(158, 158, 158, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-grey:after {
        background-color: #9E9E9E
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-blue-grey:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(96, 125, 139, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-blue-grey {
        background-color: rgba(96, 125, 139, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-blue-grey:after {
        background-color: #607D8B
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-black:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-black {
        background-color: rgba(0, 0, 0, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-black:after {
        background-color: #000000
    }
    .switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-white:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 255, 255, 0.1)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-white {
        background-color: rgba(255, 255, 255, 0.5)
    }
    .switch label input[type=checkbox]:checked+.lever.switch-col-white:after {
        background-color: #ffffff
    }
</style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green layout-top-nav layout-boxed">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url() ?>" class="navbar-brand"><b>Pakis</b> Asri</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a></li>
            <li class=""><a href="<?php echo base_url() ?>">Daftar Berita</a></li>
            <li class=""><a href="<?php echo base_url() ?>">Daftar UMKM</a></li>
            <li class=""><a href="<?php echo base_url() ?>">Daftar Informasi</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
