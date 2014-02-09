<?php
/**
 * Http Redirect Interface
 *
 * @package    Http
 * @copyright  2014 Amy Stephen. All rights reserved.
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
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface RedirectInterface
{
    /**
     * Redirect Application
     *
     * @return  $this
     * @throws  \CommonApi\Exception\UnexpectedValueException
     * @since   1.0
     */
    public function redirect();
}
