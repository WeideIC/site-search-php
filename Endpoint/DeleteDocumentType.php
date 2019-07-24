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
class DeleteDocumentType extends \Elastic\OpenApi\Codegen\Endpoint\AbstractEndpoint
{
    // phpcs:disable
    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * @var string
     */
    protected $uri = '/engines/{engine_name}/document_types/{document_type_id}.json';

    protected $routeParams = ['engine_name', 'document_type_id'];
    // phpcs:enable
}
