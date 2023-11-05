<script>
    $(document).ready(function() {
        // Display loader on AJAX request
        $(document).on({
            ajaxStart: function() {
                $("body").addClass("loading");
            },
            ajaxStop: function() {
                $("body").removeClass("loading");
            }
        });
    });
</script>

<style>
    .loading {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5) url('{{ asset('loader.gif') }}') no-repeat center;
        z-index: 99999;
    }
</style>