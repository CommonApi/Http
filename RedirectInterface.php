<?php
/**
 * Http Redirect Interface
 *
 * @package    Http
 * @copyright  2013 Common Api. All rights reserved.
 * @license    MIT
 */
namespace CommonApi\Http;

/**
 * Http Redirect Interface
 *
 * http://tools.ietf.org/html/rfc2616#section-10.3
 *
 * @package    Http
 * @license    MIT
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface RedirectInterface
{
    /**
     * Redirect Application
     *
     * @return  void
     * @since   1.0
     */
    public function redirect();
}
