<?php
/**
 * Http Redirect Interface
 *
 * @package    Http
 * @copyright  2013 Common Api. All rights reserved.
 * @license    MIT
 */
namespace CommonApi\Http;

/**
 * Http Redirect Interface
 *
 * http://tools.ietf.org/html/rfc2616#section-10.3
 *
 * @package    Http
 * @license    MIT
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface RedirectInterface
{
    /**
     * Get the current value (or default) of the specified key
     *
     * @param   string $key
     * @param   mixed  $default
     *
     * @return  mixed
     * @since   1.0
     */
    public function get($key = null, $default = null);

    /**
     * Set the value of the specified key
     *
     * @param   string $key
     * @param   mixed  $value
     *
     * @return  $this
     * @since   1.0
     */
    public function set($key, $value = null);

    /**
     * Redirect to the specified Url using the given Status Code
     *
     * @return  string
     * @since   1.0
     */
    public function redirect();
}
