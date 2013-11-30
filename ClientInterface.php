<?php
/**
 * Http Client Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Http;

/**
 * Client Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface ClientInterface
{
    /**
     * Get the Client Object
     *
     * @return  object
     * @since   0.1
     */
    public function get();
}
