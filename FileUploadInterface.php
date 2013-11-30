<?php
/**
 * File Upload Interface
 *
 * @package    Http
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Http;

/**
 * File Upload Interface
 *
 * @package    Http
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface FileUploadInterface
{
    /**
     * Upload File
     *
     * @return  $this
     * @since   0.1
     */
    public function upload();
}
