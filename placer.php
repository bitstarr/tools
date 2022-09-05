<?php
    // inspired by https://cloudfour.com/thinks/simple-svg-placeholder/
    $background = ( isset( $_GET['bg']) ) ? '#' . $_GET['bg'] : 'url(#grad)';
    $width = ( isset( $_GET['w']) ) ? $_GET['w'] : 300;
    $height = ( isset( $_GET['h']) ) ? $_GET['h'] : 150;
    $text = ( isset( $_GET['text']) ) ? $_GET['text'] : $width . '×' . $height;
    $colors = array(
        '#FDBB2D',
        '#22C1C3',
        '#08AEEA',
        '#2AF598',
        '#FBAB7E',
        '#F7CE68',
        '#8EC5FC',
        '#E0C3FC',
        '#FAACA8',
        '#DDD6F3',
        '#3EECAC',
        '#FFCC70',
    );
    $random = array_rand( $colors, 2 );
    header('Content-type: image/svg+xml');
?>
<svg xmlns="http://www.w3.org/2000/svg" width="<?php echo $width; ?>" height="<?php echo $height; ?>" viewBox="0 0 <?php echo $width; ?> <?php echo $height; ?>">
    <defs>
        <linearGradient id="grad" x1=".1" x2=".7" y1="0" y2=".8">
            <stop offset="0%" stop-color="<?php echo $colors[ $random[0] ]; ?>"/>
            <stop offset="100%" stop-color="<?php echo $colors[ $random[1] ]; ?>"/>
        </linearGradient>
    </defs>
    <rect fill="<?php echo $background; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>
    <text fill="rgba(0,0,0,0.5)" font-family="sans-serif" font-size="30" dy="10.5" font-weight="bold" x="50%" y="50%" text-anchor="middle"><?php echo $text; ?></text>
</svg>