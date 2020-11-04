<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BikeStall Admin</title>

    <!-- Custom fonts for this template-->
    <link href="cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js">
    <link href="cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/css/bootstrapvalidator.min.css">

    <link href="{{asset('public/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('public/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('public/backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <link href="{{asset('public/lity/dist/lity.css')}}" rel="stylesheet">
    <script src="{{asset('public/lity/vendor/jquery.js')}}"></script>
    <script src="{{asset('public/lity/dist/lity.js')}}"></script>

</head>

<body id="page-top">
@include('layouts.adminLayout.admin_sidebar')

<!-- Bootstrap core JavaScript-->

<script src="{{asset('public/backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('public/backend/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('public/backend/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('public/backend/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('public/backend/js/demo/chart-pie-demo.js')}}"></script>

<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>

<script src="{{asset('public/backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('public/backend/js/demo/datatables-demo.js')}}"></script>
<script>
    CKEDITOR.replace('description');
</script>

<script>
    $(document).ready(function() {
        $('#tryitForm').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                firstName: {
                    validators: {
                        notEmpty: {
                            message: 'The first name is required and cannot be empty'
                        }
                    }
                },
                lastName: {
                    validators: {
                        notEmpty: {
                            message: 'The last name is required and cannot be empty'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: 'The gender is required'
                        }
                    }
                }
            },
            submitHandler: function(validator, form, submitButton) {
                var fullName = [validator.getFieldElements('firstName').val(),
                    validator.getFieldElements('lastName').val()].join(' ');
                alert('Hello ' + fullName);
            }
        });
    });
</script>

</body>

</html>

