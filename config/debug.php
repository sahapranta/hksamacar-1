<?php
function debug_to_console( $data, $context = 'PHP' ) {
    ob_start();
    $output  = 'console.info( \'' . $context . ':\' );';
    $output .= 'console.log(' . json_encode( $data ) . ');';
    $output  = sprintf( '<script>%s</script>', $output );
    echo $output;
}
?>