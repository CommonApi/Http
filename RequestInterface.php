<?php
/**
 * Request Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Http;

/**
 * Request Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface RequestInterface
{
    /** HTTP Methods */
    const
        GET     = 'GET',
        POST    = 'POST',
        PUT     = 'PUT',
        DELETE  = 'DELETE',
        HEAD    = 'HEAD',
        OPTIONS = 'OPTIONS',
        PATCH   = 'PATCH';

    /**
     * Get the current value (or default) of the specified key or all for '*'
     *
     * @param   null   $key
     * @param   null   $default
     * @param   string $filter
     * @param   array  $filter_options
     *
     * @return  mixed
     * @since   1.0
     */
    public function get($key = null, $default = null, $filter = 'Alphanumeric', $filter_options = array());
}
