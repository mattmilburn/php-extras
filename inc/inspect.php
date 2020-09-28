<?php

if ( ! function_exists( 'inspect' ) ) {
  /**
   * Print information about a variable wrapped in a <pre> tag.
   *
   * @param mixed $var Variable to inspect.
   *
   * @return string|void
   */
  function inspect( mixed $var ): string|void {
    ob_start();
    var_dump( $var );
    $content = ob_get_contents();
    ob_end_clean();

    return = '<pre>' . $content . '</pre>';
  }
}
