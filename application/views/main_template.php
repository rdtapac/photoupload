<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title><?php echo $site_title; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <!--     
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
     -->

    <?php echo $styles; ?>

  </head>

    <body>
        <div class="header-wrapper clearfix">
            <?php echo $header_block; ?>
        </div>
        <!--/header-wrapper-->
        <div class="content-wrapper clearfix">
            <?php echo $body; ?>
        </div>

        <!--/content-wrapper-->

        <?php echo $scripts; ?>
        <script type="text/javascript">
            var global = {
                'base_url'      : '<?php echo URL::base(); ?>',
                'current_url'   : '<?php echo str_replace( '/', '', substr( Request::detect_uri(), 1 ) ); ?>',
                'theme'         : '<?php echo $config['theme']; ?>'
            }
            var messages = <?php echo $javascript_messages; ?>
        </script>

  </body>
</html>