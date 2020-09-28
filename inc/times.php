<?php

if ( ! function_exists( 'times' ) ) {
  /**
   * Run a callback function a specific number of times.
   *
   * @param int      $num Number of times to run $cb.
   * @param callable $cb  Callback to run $num times.
   *
   * @return string
   */
  function times( int $num, callable $cb ): void {
    for ( $i = 0; $i < $num; $i++ ) {
      cb($num);
    }
  }
}
