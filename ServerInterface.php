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
 * @since      0.1
 */
interface ServerInterface
{
    /**
     * Get the server object, including the following elements:
     *
     * - user, password, document_root, entry_point, remote_addr, server_signature, server_software,
     *  server_name, server_addr, server_port, server_admin
     *
     * @link    http://tools.ietf.org/html/rfc3986
     * @return  object
     * @since   0.1
     */
    public function get();
}
