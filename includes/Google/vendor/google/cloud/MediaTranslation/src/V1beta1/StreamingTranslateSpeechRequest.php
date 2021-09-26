<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/mediatranslation/v1beta1/media_translation.proto

namespace Google\Cloud\MediaTranslation\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message sent by the client for the `StreamingTranslateSpeech`
 * method. Multiple `StreamingTranslateSpeechRequest` messages are sent. The
 * first message must contain a `streaming_config` message and must not contain
 * `audio_content` data. All subsequent messages must contain `audio_content`
 * data and must not contain a `streaming_config` message.
 *
 * Generated from protobuf message <code>google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechRequest</code>
 */
class StreamingTranslateSpeechRequest extends \Google\Protobuf\Internal\Message
{
    protected $streaming_request;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\MediaTranslation\V1beta1\StreamingTranslateSpeechConfig $streaming_config
     *           Provides information to the recognizer that specifies how to process the
     *           request. The first `StreamingTranslateSpeechRequest` message must contain
     *           a `streaming_config` message.
     *     @type string $audio_content
     *           The audio data to be translated. Sequential chunks of audio data are sent
     *           in sequential `StreamingTranslateSpeechRequest` messages. The first
     *           `StreamingTranslateSpeechRequest` message must not contain
     *           `audio_content` data and all subsequent `StreamingTranslateSpeechRequest`
     *           messages must contain `audio_content` data. The audio bytes must be
     *           encoded as specified in `StreamingTranslateSpeechConfig`. Note: as with
     *           all bytes fields, protobuffers use a pure binary representation (not
     *           base64).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Mediatranslation\V1Beta1\MediaTranslation::initOnce();
        parent::__construct($data);
    }

    /**
     * Provides information to the recognizer that specifies how to process the
     * request. The first `StreamingTranslateSpeechRequest` message must contain
     * a `streaming_config` message.
     *
     * Generated from protobuf field <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechConfig streaming_config = 1;</code>
     * @return \Google\Cloud\MediaTranslation\V1beta1\StreamingTranslateSpeechConfig|null
     */
    public function getStreamingConfig()
    {
        return $this->readOneof(1);
    }

    public function hasStreamingConfig()
    {
        return $this->hasOneof(1);
    }

    /**
     * Provides information to the recognizer that specifies how to process the
     * request. The first `StreamingTranslateSpeechRequest` message must contain
     * a `streaming_config` message.
     *
     * Generated from protobuf field <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechConfig streaming_config = 1;</code>
     * @param \Google\Cloud\MediaTranslation\V1beta1\StreamingTranslateSpeechConfig $var
     * @return $this
     */
    public function setStreamingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MediaTranslation\V1beta1\StreamingTranslateSpeechConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The audio data to be translated. Sequential chunks of audio data are sent
     * in sequential `StreamingTranslateSpeechRequest` messages. The first
     * `StreamingTranslateSpeechRequest` message must not contain
     * `audio_content` data and all subsequent `StreamingTranslateSpeechRequest`
     * messages must contain `audio_content` data. The audio bytes must be
     * encoded as specified in `StreamingTranslateSpeechConfig`. Note: as with
     * all bytes fields, protobuffers use a pure binary representation (not
     * base64).
     *
     * Generated from protobuf field <code>bytes audio_content = 2;</code>
     * @return string
     */
    public function getAudioContent()
    {
        return $this->readOneof(2);
    }

    public function hasAudioContent()
    {
        return $this->hasOneof(2);
    }

    /**
     * The audio data to be translated. Sequential chunks of audio data are sent
     * in sequential `StreamingTranslateSpeechRequest` messages. The first
     * `StreamingTranslateSpeechRequest` message must not contain
     * `audio_content` data and all subsequent `StreamingTranslateSpeechRequest`
     * messages must contain `audio_content` data. The audio bytes must be
     * encoded as specified in `StreamingTranslateSpeechConfig`. Note: as with
     * all bytes fields, protobuffers use a pure binary representation (not
     * base64).
     *
     * Generated from protobuf field <code>bytes audio_content = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAudioContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStreamingRequest()
    {
        return $this->whichOneof("streaming_request");
    }

}

