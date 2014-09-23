<?php
/**
 * File Upload Interface
 *
 * @package    Http
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Http;

/**
 * File Upload Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface UploadInterface
{
    /**
     * Upload File
     *
     * @return  $this
     * @since   1.0.0
     */
    public function process();
}
