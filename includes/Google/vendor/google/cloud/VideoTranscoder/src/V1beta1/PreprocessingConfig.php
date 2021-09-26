<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Preprocessing configurations.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.PreprocessingConfig</code>
 */
class PreprocessingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Color preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Color color = 1;</code>
     */
    private $color = null;
    /**
     * Denoise preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Denoise denoise = 2;</code>
     */
    private $denoise = null;
    /**
     * Deblock preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Deblock deblock = 3;</code>
     */
    private $deblock = null;
    /**
     * Audio preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Audio audio = 4;</code>
     */
    private $audio = null;
    /**
     * Specify the video cropping configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Crop crop = 5;</code>
     */
    private $crop = null;
    /**
     * Specify the video pad filter configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Pad pad = 6;</code>
     */
    private $pad = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Color $color
     *           Color preprocessing configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Denoise $denoise
     *           Denoise preprocessing configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Deblock $deblock
     *           Deblock preprocessing configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Audio $audio
     *           Audio preprocessing configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Crop $crop
     *           Specify the video cropping configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Pad $pad
     *           Specify the video pad filter configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Color preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Color color = 1;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Color|null
     */
    public function getColor()
    {
        return isset($this->color) ? $this->color : null;
    }

    public function hasColor()
    {
        return isset($this->color);
    }

    public function clearColor()
    {
        unset($this->color);
    }

    /**
     * Color preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Color color = 1;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Color $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Color::class);
        $this->color = $var;

        return $this;
    }

    /**
     * Denoise preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Denoise denoise = 2;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Denoise|null
     */
    public function getDenoise()
    {
        return isset($this->denoise) ? $this->denoise : null;
    }

    public function hasDenoise()
    {
        return isset($this->denoise);
    }

    public function clearDenoise()
    {
        unset($this->denoise);
    }

    /**
     * Denoise preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Denoise denoise = 2;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Denoise $var
     * @return $this
     */
    public function setDenoise($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Denoise::class);
        $this->denoise = $var;

        return $this;
    }

    /**
     * Deblock preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Deblock deblock = 3;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Deblock|null
     */
    public function getDeblock()
    {
        return isset($this->deblock) ? $this->deblock : null;
    }

    public function hasDeblock()
    {
        return isset($this->deblock);
    }

    public function clearDeblock()
    {
        unset($this->deblock);
    }

    /**
     * Deblock preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Deblock deblock = 3;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Deblock $var
     * @return $this
     */
    public function setDeblock($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Deblock::class);
        $this->deblock = $var;

        return $this;
    }

    /**
     * Audio preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Audio audio = 4;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Audio|null
     */
    public function getAudio()
    {
        return isset($this->audio) ? $this->audio : null;
    }

    public function hasAudio()
    {
        return isset($this->audio);
    }

    public function clearAudio()
    {
        unset($this->audio);
    }

    /**
     * Audio preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Audio audio = 4;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Audio $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Audio::class);
        $this->audio = $var;

        return $this;
    }

    /**
     * Specify the video cropping configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Crop crop = 5;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Crop|null
     */
    public function getCrop()
    {
        return isset($this->crop) ? $this->crop : null;
    }

    public function hasCrop()
    {
        return isset($this->crop);
    }

    public function clearCrop()
    {
        unset($this->crop);
    }

    /**
     * Specify the video cropping configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Crop crop = 5;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Crop $var
     * @return $this
     */
    public function setCrop($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Crop::class);
        $this->crop = $var;

        return $this;
    }

    /**
     * Specify the video pad filter configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Pad pad = 6;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Pad|null
     */
    public function getPad()
    {
        return isset($this->pad) ? $this->pad : null;
    }

    public function hasPad()
    {
        return isset($this->pad);
    }

    public function clearPad()
    {
        unset($this->pad);
    }

    /**
     * Specify the video pad filter configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.PreprocessingConfig.Pad pad = 6;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Pad $var
     * @return $this
     */
    public function setPad($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\PreprocessingConfig\Pad::class);
        $this->pad = $var;

        return $this;
    }

}

