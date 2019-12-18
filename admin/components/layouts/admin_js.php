<script language="javascript" type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
<script>
    // create function check element exists
    $.fn.exists = function(callback) {
        var args = [].slice.call(arguments, 1);

        if (this.length) {
            callback.call(this, args);
        }

        return this;
    };
</script>
<?php foreach ($admin_js as $item_js) : ?>
    <script src="<?= $item_js ?>"></script>
<?php endforeach; ?>


<script>
    $(function() {
        // <!-- init datatable -->
        if ($.fn.DataTable) {
            var table = $("#datatable_content").DataTable({
                responsive: true
            });
            table
                .column('1:visible')
                .order('asc')
                .draw();
        }
        // <!-- end init datatable -->

        // <!-- init bootstrapSwitch -->
        if ($.fn.bootstrapSwitch) {
            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });
        }
        // <!-- end init bootstrapSwitch -->
    });
</script>
