<?php
/**
 * Http Redirect Interface
 *
 * @package    Http
 * @copyright  2013 Common Api. All rights reserved.
 * @license    MIT
 */
namespace CommonApi\Http;

use CommonApi\Exception\UnexpectedValueException;

/**
 * Http Redirect Interface
 *
 * http://tools.ietf.org/html/rfc2616#section-10.3
 *
 * @package    Http
 * @license    MIT
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface RedirectInterface
{
    /**
     * Redirect Application
     *
     * @return  void
     * @throws  \CommonApi\Exception\UnexpectedValueException
     * @since   0.1
     */
    public function redirect();
}
