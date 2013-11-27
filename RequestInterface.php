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
     * Get the current value (or default) of the specified key
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

    /**
     * Get Request Method - 'GET', 'POST', 'PUT', 'DELETE', 'HEAD', 'OPTIONS', 'PATCH'
     *
     * @return  mixed|string|array
     * @since   1.0
     */
    public function getMethod();

    /**
     * Get Uri
     *
     * @return  string
     * @since   1.0
     */
    public function getUrl();

    /**
     * Returns the Scheme - HTTP or HTTPS
     *
     * @return  string
     * @since   1.0
     */
    public function getScheme();

    /**
     * Get the User
     *
     * @return  string
     * @since   1.0
     */
    public function getUser();

    /**
     * Get the Password
     *
     * @return  string
     * @since   1.0
     */
    public function getPassword();

    /**
     * Host
     *
     * @return  string
     * @since   1.0
     */
    public function getHost();

    /**
     * Port
     *
     * @return  string
     * @since   1.0
     */
    public function getPort();

    /**
     * Authority
     *
     * @var     string
     * @since   1.0
     */
    public function getAuthority();

    /**
     * Returns Path
     *
     * @var     string
     * @since   1.0
     */
    public function getPath();

    /**
     * Builds normalized query string with alphabetized key/value pairs
     *
     * @return  string
     * @since   1.0
     */
    public function getQueryString();

    /**
     * Content Type
     *
     * @var     string
     * @since   1.0
     */
    public function getContentType();
}
