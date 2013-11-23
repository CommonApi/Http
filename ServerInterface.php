<?php
/**
 * Server Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Http;

/**
 * Server Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface ServerInterface
{
    /**
     * Get Server Data
     *
     * @param   string $key
     * @param   mixed  $default
     *
     * @return  int
     * @since   1.0
     */
    public function get($key = null, $default = null);
}
