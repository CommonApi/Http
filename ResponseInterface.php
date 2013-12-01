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
     * Send Headers and Body
     *
     * @return  string
     * @since   0.1
     */
    public function send();
}
