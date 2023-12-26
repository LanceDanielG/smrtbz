<link href="../includes/assets/css/toastr.css" rel="stylesheet"/>
<script src="../includes/assets/js/toastr.js"></script>

<?php
    echo "
        <script>
            toastr.options = {
                'closeButton': false,
                'debug': false,
                'newestOnTop': false,
                'progressBar': true,
                'positionClass': 'toast-top-right',
                'preventDuplicates': true,
                'onclick': null,
                'showDuration': '300',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut'
            }
        </script>

    ";
    if(isset($_SESSION['toaster_Success'])){
        echo "
            <script>
                toastr.options.timeOut = 3000;
                toastr.success('". $_SESSION['toaster_Success'] ."');
            </script>
        
        ";
        unset($_SESSION['toaster_Success']);
    }
    else if(isset($_SESSION['toaster_Error'])){
        echo "
            <script>
                toastr.options.timeOut = 3000;
                toastr.error('". $_SESSION['toaster_Error'] ."');
            </script>
        
        ";
        unset($_SESSION['toaster_Error']);
    }
?>