<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class DeleteSurveyResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $ids;
    protected $_name = [
        'ids' => 'ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['ids'] = $this->ids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSurveyResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ids'])) {
            $model->ids = $map['ids'];
        }

        return $model;
    }
}
