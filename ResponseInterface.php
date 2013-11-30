<?php
/**
 * Response Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Http;

use CommonApi\Exception\InvalidArgumentException;

/**
 * Response Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface ResponseInterface
{
    /**
     * Set HTTP response header
     *
     * @param   string      $key
     * @param   null|string $value
     *
     * @return  $this
     * @since   0.1
     */
    public function setHeader($key, $value = null);

    /**
     * Sets the HTTP protocol version
     *
     * @param   string  $version
     *
     * @return  $this
     * @throws  \CommonApi\Exception\InvalidArgumentException
     */
    public function setProtocolVersion($version);

    /**
     * Set Status Code
     *
     * RFC1945 (HTTP/1.0), RFC2616 (HTTP/1.1), and RFC2518 (WebDAV)
     *
     * @param   int $status_code
     *
     * @return  $this
     * @since   0.1
     */
    public function setStatusCode($status_code = 200);

    /**
     * Set the Body
     *
     * @param   string $body
     *
     * @return  $this
     * @since   0.1
     */
    public function setBody($body);

    /**
     * Set HTTP response header
     * Sets the defined browser cookie. Defaults to one year expiry on the root domain.
     *
     * @param   string $key
     * @param   string $value
     * @param   string $date
     *
     * @return  $this
     * @since   0.1
     */
    public function setCookie($key = '', $value = null, $date = null);

    /**
     * Removes the defined browser cookie.
     *
     * @param   string $key
     *
     * @return  $this
     * @since   0.1
     */
    public function unsetCookie($key);

    /**
     * Send Headers and Body
     *
     * @return  string
     * @since   0.1
     */
    public function send();
}
