<?php
/**
 * Response Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Http;

use CommonApi\Exception\InvalidArgumentException;

/**
 * Response Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
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
