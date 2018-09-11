
<!-- jQuery -->
<script type="text/javascript" src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- Theme Javascript -->
<script type="text/javascript" src="{{asset('assets/js/utility/utility.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/demo.js')}}"></script>


<!-- Page Javascript -->
<script type="text/javascript" src="{{asset('assets/js/pages/widgets.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core      
        Core.init({
            sbm: "sb-l-c",
        });

        // Init Demo JS
        Demo.init();

        // Init Widget Demo JS
        // demoHighCharts.init();

        // Because we are using Admin Panels we use the OnFinish 
        // callback to activate the demoWidgets. It's smoother if
        // we let the panels be moved and organized before 
        // filling them with content from various plugins

        // Init plugins used on this page
        // HighCharts, JvectorMap, Admin Panels

        // Init Admin Panels on widgets inside the ".admin-panels" container
        $('.admin-panels').adminpanel({
            grid: '.admin-grid',
            draggable: true,
            mobile: true,
            callback: function() {
                bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
            },
            onFinish: function() {
                $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onLoad');

                // Init the rest of the plugins now that the panels
                // have had a chance to be moved and organized.
                // It's less taxing to organize empty panels
                demoHighCharts.init();
                runVectorMaps();

                // We also refresh any "in-view" waypoints to ensure
                // the correct position is being calculated after the 
                // Admin Panels plugin moved everything
                Waypoint.refreshAll();

            },
            onSave: function() {
                $(window).trigger('resize');
            }
        });
    });
</script>
