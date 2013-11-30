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
     * Get the client object, including the following elements:
     *
     * - ajax, remote_address, remote_host, browser, browser_version, is_bot, is_cli,
     * bot, is_mobile, mobile_device, user_agent, desktop, platform
     * 
     * @return  object
     * @since   0.1
     */
    public function get();
}
