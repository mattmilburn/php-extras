<?php

if ( ! function_exists( 'array_includes' ) ) {
  /**
   * Returns true if the $cb for one of items in $arr returns true.
   *
   * @param string   $arr Array.
   * @param callable $cb  Callback returning true or false.
   *
   * @return boolean
   */
  function array_includes( array $arr, callable $cb ): bool {
    foreach ( $arr as $item ) {
      if ( $cb( $item ) ) {
        return true;
      }
    }

    return false;
  }
}
