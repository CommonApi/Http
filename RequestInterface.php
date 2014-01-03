<?php
/**
 * Request Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Http;

/**
 * Request Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface RequestInterface
{
    /**
     * Get the request object, as defined by URI Syntax RFC 3986
     *
     * scheme://user:password@example.com:8042/over/there/index.php?type=animal&name=narwhal#nose
     *          \___________/ \_________/ \__/ \__________________/\______________________/ \__/
     *             |               |       |          |    |    |            |                |
     *          userinfo         host     port       path  |    |          query           fragment
     *         \____________________________/              |    |  \__/ \____/ \__/ \____/
     *                     |                               |    |    |    |      |     |
     *                authority                            |    |    key  value  key   value
     *
     * - Returns method, content_type, base_url, url, scheme, secure (boolean), user, password,
     *   userinfo, host, port, authority, path, query, parameters (named pair query array)
     *
     * @link    http://tools.ietf.org/html/rfc3986
     * @return  object
     * @since   0.1
     */
    public function get();
}
