<?php
/**
 * This file is part of the Elastic OpenAPI PHP code generator.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swiftype\SiteSearch\Endpoint;

/**
 * Implementation of the  endpoint.
 *
 * @package Swiftype\SiteSearch\Endpoint
 */
class CreateEngine extends \Elastic\OpenApi\Codegen\Endpoint\AbstractEndpoint
{
    // phpcs:disable
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $uri = '/engines.json';

    protected $paramWhitelist = ['engine.name', 'engine.language'];
    // phpcs:enable
}
