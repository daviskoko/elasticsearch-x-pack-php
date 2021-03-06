<?php


namespace XPack\Watcher\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class DeactivateWatch
 *
 * @category Watcher
 * @package  XPack\Watcher\Endpoints
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */

class DeactivateWatch extends AbstractEndpoint
{

    /**
     * @throws Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->id) !== true) {
            throw new Exceptions\RuntimeException(
                'id is required for DeactivateWatch'
            );
        }
        return "/_xpack/watcher/watch/{$this->id}/_deactivate";
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return [
            'master_timeout'
        ];
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return "POST";
    }
}