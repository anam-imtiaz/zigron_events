<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Dashboard I Admin Panel</title>

    <link rel="stylesheet" href="<?php echo e(URL::to('css/layout.css')); ?>" type="text/css" media="screen" />
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo e(URL::to('css/ie.css')); ?>" type="text/css" media="screen" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo e(URL::to('js/jquery-1.5.2.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('js/hideshow.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::to('js/jquery.tablesorter.min.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('js/jquery.equalHeight.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function()
                {
                    $(".tablesorter").tablesorter();
                }
        );
        $(document).ready(function() {

            //When page loads...
            $(".tab_content").hide(); //Hide all content
            $("ul.tabs li:first").addClass("active").show(); //Activate first tab
            $(".tab_content:first").show(); //Show first tab content

            //On Click Event
            $("ul.tabs li").click(function() {

                $("ul.tabs li").removeClass("active"); //Remove any "active" class
                $(this).addClass("active"); //Add "active" class to selected tab
                $(".tab_content").hide(); //Hide all tab content

                var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
                $(activeTab).fadeIn(); //Fade in the active ID content
                return false;
            });

        });
    </script>
    <script type="text/javascript">
        $(function(){
            $('.column').equalHeight();
        });
    </script>

</head>


<body>
<?php echo $__env->make('templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<aside id="sidebar" class="column">
<?php echo $__env->make('templates.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</aside>
<section id="main" class="column">
<?php echo $__env->yieldContent('content'); ?>
</section>

</body>

</html>