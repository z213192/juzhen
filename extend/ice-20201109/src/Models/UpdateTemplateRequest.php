<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateRequest extends Model
{
    /**
     * @description 参见模板Config文档
     *
     * @var string
     */
    public $config;

    /**
     * @description 模板封面
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 预览视频媒资id
     *
     * @var string
     */
    public $previewMedia;

    /**
     * @description 模板相关素材，模板编辑器使用
     *
     * @var string
     */
    public $relatedMediaids;

    /**
     * @description 修改来源，默认OpenAPI
     *
     * @var string
     */
    public $source;

    /**
     * @description 模板状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 模板ID
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'config'          => 'Config',
        'coverUrl'        => 'CoverUrl',
        'name'            => 'Name',
        'previewMedia'    => 'PreviewMedia',
        'relatedMediaids' => 'RelatedMediaids',
        'source'          => 'Source',
        'status'          => 'Status',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->previewMedia) {
            $res['PreviewMedia'] = $this->previewMedia;
        }
        if (null !== $this->relatedMediaids) {
            $res['RelatedMediaids'] = $this->relatedMediaids;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PreviewMedia'])) {
            $model->previewMedia = $map['PreviewMedia'];
        }
        if (isset($map['RelatedMediaids'])) {
            $model->relatedMediaids = $map['RelatedMediaids'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
