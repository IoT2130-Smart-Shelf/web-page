<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/detection.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Bounding box matching model metrics for a single intersection-over-union
 * threshold and multiple label match confidence thresholds.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.BoundingBoxMetricsEntry</code>
 */
class BoundingBoxMetricsEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The intersection-over-union threshold value used to compute
     * this metrics entry.
     *
     * Generated from protobuf field <code>float iou_threshold = 1;</code>
     */
    private $iou_threshold = 0.0;
    /**
     * Output only. The mean average precision, most often close to au_prc.
     *
     * Generated from protobuf field <code>float mean_average_precision = 2;</code>
     */
    private $mean_average_precision = 0.0;
    /**
     * Output only. Metrics for each label-match confidence_threshold from
     * 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99. Precision-recall curve is
     * derived from them.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.BoundingBoxMetricsEntry.ConfidenceMetricsEntry confidence_metrics_entries = 3;</code>
     */
    private $confidence_metrics_entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $iou_threshold
     *           Output only. The intersection-over-union threshold value used to compute
     *           this metrics entry.
     *     @type float $mean_average_precision
     *           Output only. The mean average precision, most often close to au_prc.
     *     @type \Google\Cloud\AutoMl\V1beta1\BoundingBoxMetricsEntry\ConfidenceMetricsEntry[]|\Google\Protobuf\Internal\RepeatedField $confidence_metrics_entries
     *           Output only. Metrics for each label-match confidence_threshold from
     *           0.05,0.10,...,0.95,0.96,0.97,0.98,0.99. Precision-recall curve is
     *           derived from them.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Detection::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The intersection-over-union threshold value used to compute
     * this metrics entry.
     *
     * Generated from protobuf field <code>float iou_threshold = 1;</code>
     * @return float
     */
    public function getIouThreshold()
    {
        return $this->iou_threshold;
    }

    /**
     * Output only. The intersection-over-union threshold value used to compute
     * this metrics entry.
     *
     * Generated from protobuf field <code>float iou_threshold = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setIouThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->iou_threshold = $var;

        return $this;
    }

    /**
     * Output only. The mean average precision, most often close to au_prc.
     *
     * Generated from protobuf field <code>float mean_average_precision = 2;</code>
     * @return float
     */
    public function getMeanAveragePrecision()
    {
        return $this->mean_average_precision;
    }

    /**
     * Output only. The mean average precision, most often close to au_prc.
     *
     * Generated from protobuf field <code>float mean_average_precision = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setMeanAveragePrecision($var)
    {
        GPBUtil::checkFloat($var);
        $this->mean_average_precision = $var;

        return $this;
    }

    /**
     * Output only. Metrics for each label-match confidence_threshold from
     * 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99. Precision-recall curve is
     * derived from them.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.BoundingBoxMetricsEntry.ConfidenceMetricsEntry confidence_metrics_entries = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfidenceMetricsEntries()
    {
        return $this->confidence_metrics_entries;
    }

    /**
     * Output only. Metrics for each label-match confidence_threshold from
     * 0.05,0.10,...,0.95,0.96,0.97,0.98,0.99. Precision-recall curve is
     * derived from them.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.BoundingBoxMetricsEntry.ConfidenceMetricsEntry confidence_metrics_entries = 3;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\BoundingBoxMetricsEntry\ConfidenceMetricsEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfidenceMetricsEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1beta1\BoundingBoxMetricsEntry\ConfidenceMetricsEntry::class);
        $this->confidence_metrics_entries = $arr;

        return $this;
    }

}

