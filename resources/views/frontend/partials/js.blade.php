{!!Html::script('public/frontend/js/fontawesome.js',array(),env('RESOURCE_SECURE'))!!}
{!!Html::script('public/frontend/js/bootstrap.min.js',array(),env('RESOURCE_SECURE'))!!}
{!!Html::script('public/frontend/js/waypoints.min.js',array(),env('RESOURCE_SECURE'))!!}
{!!Html::script('public/frontend/js/menu_mobile.js',array(),env('RESOURCE_SECURE'))!!}
{!!Html::script('public/frontend/js/menu_mobile_jquery.js',array(),env('RESOURCE_SECURE'))!!}
<script>
    $(function() {
        $('#dl-menu').dlmenu();
    });
</script>
{!!Html::script('public/frontend/js/script.js',array(),env('RESOURCE_SECURE'))!!}
{!!Html::script('public/frontend/js/dev.js',array(),env('RESOURCE_SECURE'))!!}

<script type="text/javascript">
      jQuery.fn.on("load", function (callback) {$(window).trigger("load", callback); });
      jQuery.fn.on("bind", function (callback) {$(window).trigger("load", callback); });
      jQuery.fn.on("unbind", function (callback) {$(window).trigger("off", callback); });
      jQuery.fn.load = function (callback) {$(window).trigger("load", callback); };
      jQuery.fn.bind = function (callback) {$(window).trigger("on", callback); };
      jQuery.fn.unbind = function (callback) {$(window).trigger("off", callback); };
      </script>
<script type='text/javascript' src='//footer.diageohorizon.com/dfs/master.js'></script>