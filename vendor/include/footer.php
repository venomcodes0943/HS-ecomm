<?php
if (isset($succes_msg)) {
    foreach ($succes_msg as $succes_msg) {
        echo '
            <script>
            swal({
                title: "' . $succes_msg['text'] . '",
                icon: "' . $succes_msg['icon'] . '",
            });
            </script>
        ';
    }
}
?>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © HS_MULTIVENDOR.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by HS-ECOMMS
                </div>
            </div>
        </div>
    </div>
</footer>