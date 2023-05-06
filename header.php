<?php amp_header_core() ?>
 <header class="header container">
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <div class="left">
            <?php amp_logo(); ?>
        </div>
        
        <div class="right">
            <?php amp_call_now(); ?>
            <?php amp_social([
                'twitter' => 'https://twitter.com/ampforwp',
                'facebook' => 'https://facebook.com/ampforwp'
            ]);?>    
            <?php amp_sidebar(['action'=>'open-button']); ?>         
        </div>
        
        <div class="clearfix"></div>
    
</header>


<?php amp_sidebar(['action'=>'start',
    'id'=>'sidebar',
    'layout'=>'nodisplay',
    'side'=>'right'
] ); ?>
<?php amp_sidebar(['action'=>'close-button']); ?>
<?php amp_menu(); ?>
<?php amp_search();?>
<?php amp_social(); ?> 
<?php amp_sidebar(['action'=>'end']); ?>

<div class="content-wrapper container">
