<?php

if ( ! function_exists( 'array_get' ) ) {
  /**
   * Returns a value from $arr or returns $default if $key value is empty.
   *
   * @param array  $arr     Array.
   * @param string $key     Key to access on array.
   * @param mixed  $default Default value to return if $key value is empty.
   *
   * @return mixed
   */
  function array_get( array $arr, string $key, mixed $default = '' ): mixed {
    return isset( $arr[$key] ) ? $arr[$key] : $default;
  }
}
