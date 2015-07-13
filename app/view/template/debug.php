<?php $app::view('template/header'); ?>

<body class="padding-20">
    <div class="container">
        <div class="well text-center">
            <img src="<?php echo $app::asset('images/attention.png'); ?>" />
            <h1><?php echo $title; ?></h1>
            <div class="alert alert-danger text-left">
                <?php
                    echo '<b>Code</b>: ' . $code . '<br>';
                    echo '<b>Message</b>: ' . $message . '<br>';
                    echo '<b>File</b>: ' . $filename . '<br>';
                    echo '<b>Line</b>: ' . $line;
                ?>
            </div>
            <a href="<?php echo $app::route('home'); ?>" class="btn btn-default">
                <span class="glyphicon glyphicon-home"></span>
                Home
            </a>
        </div>
    </div>

<?php $app::view('template/footer'); ?>