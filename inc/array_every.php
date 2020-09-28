<?php

if ( ! function_exists( 'array_every' ) ) {
  /**
   * Returns true if the $cb for every item in $arr returns true.
   *
   * @param array    $arr Array.
   * @param callable $cb  Callback returning true or false.
   *
   * @return boolean
   */
  function array_every( array $arr, callable $cb ): bool {
    foreach ( $arr as $item ) {
      if ( ! $cb( $item ) ) {
        return false;
      }
    }

    return true;
  }
}
