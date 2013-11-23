<?php
/**
 * Response Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Http;

/**
 * Response Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface ResponseInterface
{
    /**
     * Set HTTP response header
     *
     * JSON Response
     *
     * $this->setHeader('Content-Type', 'application/json');
     *
     * Download a PDF
     *
     * $this->setHeader('Content-Type', 'application/pdf');
     * $this->setHeader('Content-Disposition', 'attachment; filename="downloaded.pdf"');
     *
     * @param   string      $key
     * @param   null|string $value
     *
     * @return  $this
     * @since   1.0
     */
    public function setHeader($key, $value = null);

    /**
     * Set Status Code
     *
     * RFC1945 (HTTP/1.0), RFC2616 (HTTP/1.1), and RFC2518 (WebDAV)
     *
     * @param   int $status_code
     *
     * @return  $this
     * @since   1.0
     */
    public function setStatusCode($status_code = 200);

    /**
     * Set the Body
     *
     * @param   string $body
     *
     * @return  $this
     * @since   1.0
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
     * @since   1.0
     */
    public function setCookie($key = '', $value = null, $date = null);

    /**
     * Removes the defined browser cookie.
     *
     * @param   string $key
     *
     * @return  $this
     * @since   1.0
     */
    public function unsetCookie($key);

    /**
     * Send Headers and Body
     *
     * @return  string
     * @since   1.0
     */
    public function send();
}
