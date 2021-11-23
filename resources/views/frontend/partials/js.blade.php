{!!Html::script('frontend/js/fontawesome.js',array(),env('RESOURCE_SECURE'))!!}
{!!Html::script('frontend/js/bootstrap.min.js',array(),env('RESOURCE_SECURE'))!!}
{!!Html::script('frontend/js/waypoints.min.js',array(),env('RESOURCE_SECURE'))!!}
{!!Html::script('frontend/js/menu_mobile.js',array(),env('RESOURCE_SECURE'))!!}
{!!Html::script('frontend/js/menu_mobile_jquery.js',array(),env('RESOURCE_SECURE'))!!}
<script>
    $(function() {
        $('#dl-menu').dlmenu();
    });
</script>
{!!Html::script('frontend/js/script.js',array(),env('RESOURCE_SECURE'))!!}