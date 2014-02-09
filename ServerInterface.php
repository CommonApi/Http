<?php
/**
 * Server Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Http;

/**
 * Server Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
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
     * @since   1.0
     */
    public function get();
}
