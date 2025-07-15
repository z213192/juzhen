<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\aiRoughDataList;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\dynamicMetaData;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\fileInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\mediaBasicInfo;
use AlibabaCloud\Tea\Model;

class mediaInfo extends Model
{
    /**
     * @description AIMetadata
     *
     * @var aiRoughDataList[]
     */
    public $aiRoughDataList;

    /**
     * @description 其他元数据
     *
     * @var dynamicMetaData
     */
    public $dynamicMetaData;

    /**
     * @description FileInfos
     *
     * @var fileInfoList[]
     */
    public $fileInfoList;

    /**
     * @description BasicInfo
     *
     * @var mediaBasicInfo
     */
    public $mediaBasicInfo;

    /**
     * @description 媒资ID
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'aiRoughDataList' => 'AiRoughDataList',
        'dynamicMetaData' => 'DynamicMetaData',
        'fileInfoList'    => 'FileInfoList',
        'mediaBasicInfo'  => 'MediaBasicInfo',
        'mediaId'         => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiRoughDataList) {
            $res['AiRoughDataList'] = [];
            if (null !== $this->aiRoughDataList && \is_array($this->aiRoughDataList)) {
                $n = 0;
                foreach ($this->aiRoughDataList as $item) {
                    $res['AiRoughDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dynamicMetaData) {
            $res['DynamicMetaData'] = null !== $this->dynamicMetaData ? $this->dynamicMetaData->toMap() : null;
        }
        if (null !== $this->fileInfoList) {
            $res['FileInfoList'] = [];
            if (null !== $this->fileInfoList && \is_array($this->fileInfoList)) {
                $n = 0;
                foreach ($this->fileInfoList as $item) {
                    $res['FileInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mediaBasicInfo) {
            $res['MediaBasicInfo'] = null !== $this->mediaBasicInfo ? $this->mediaBasicInfo->toMap() : null;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiRoughDataList'])) {
            if (!empty($map['AiRoughDataList'])) {
                $model->aiRoughDataList = [];
                $n                      = 0;
                foreach ($map['AiRoughDataList'] as $item) {
                    $model->aiRoughDataList[$n++] = null !== $item ? aiRoughDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DynamicMetaData'])) {
            $model->dynamicMetaData = dynamicMetaData::fromMap($map['DynamicMetaData']);
        }
        if (isset($map['FileInfoList'])) {
            if (!empty($map['FileInfoList'])) {
                $model->fileInfoList = [];
                $n                   = 0;
                foreach ($map['FileInfoList'] as $item) {
                    $model->fileInfoList[$n++] = null !== $item ? fileInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MediaBasicInfo'])) {
            $model->mediaBasicInfo = mediaBasicInfo::fromMap($map['MediaBasicInfo']);
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
