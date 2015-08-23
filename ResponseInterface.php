<?php
/**
 * Response Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Http;

/**
 * Response Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ResponseInterface
{
    /**
     * Send Headers and Body
     *
     * @return  string
     * @since   1.0.0
     */
    public function send();
}
