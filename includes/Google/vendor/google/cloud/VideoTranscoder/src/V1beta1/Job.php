<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Transcoding job resource.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.Job</code>
 */
class Job extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the job.
     * Format: `projects/{project}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Input only. Specify the `input_uri` to populate empty `uri` fields in each element of
     * `Job.config.inputs` or `JobTemplate.config.inputs` when using template.
     * URI of the media. Input files must be at least 5 seconds in duration and
     * stored in Cloud Storage (for example, `gs://bucket/inputs/file.mp4`).
     *
     * Generated from protobuf field <code>string input_uri = 2 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $input_uri = '';
    /**
     * Input only. Specify the `output_uri` to populate an empty `Job.config.output.uri` or
     * `JobTemplate.config.output.uri` when using template.
     * URI for the output file(s). For example, `gs://my-bucket/outputs/`.
     *
     * Generated from protobuf field <code>string output_uri = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $output_uri = '';
    /**
     * Specify the priority of the job. Enter a value between 0 and 100, where 0
     * is the lowest priority and 100 is the highest priority. The default is 0.
     *
     * Generated from protobuf field <code>int32 priority = 6;</code>
     */
    private $priority = 0;
    /**
     * Output only. The origin URI.
     * <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Job.OriginUri origin_uri = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $origin_uri = null;
    /**
     * Output only. The current state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Job.ProcessingState state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Estimated fractional progress, from `0` to `1` for each
     * step.
     * <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Progress progress = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $progress = null;
    /**
     * Output only. A description of the reason for the failure. This property is
     * always present when `state` is `FAILED`.
     *
     * Generated from protobuf field <code>string failure_reason = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $failure_reason = '';
    /**
     * Output only. List of failure details. This property may contain additional
     * information about the failure when `failure_reason` is present.
     * <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.FailureDetail failure_details = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $failure_details;
    /**
     * Output only. The time the job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time the transcoding started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $start_time = null;
    /**
     * Output only. The time the transcoding finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Job time to live value in days, which will be effective after job
     * completion. Job should be deleted automatically after the given TTL. Enter
     * a value between 1 and 90. The default is 30.
     *
     * Generated from protobuf field <code>int32 ttl_after_completion_days = 15;</code>
     */
    private $ttl_after_completion_days = 0;
    protected $job_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the job.
     *           Format: `projects/{project}/locations/{location}/jobs/{job}`
     *     @type string $input_uri
     *           Input only. Specify the `input_uri` to populate empty `uri` fields in each element of
     *           `Job.config.inputs` or `JobTemplate.config.inputs` when using template.
     *           URI of the media. Input files must be at least 5 seconds in duration and
     *           stored in Cloud Storage (for example, `gs://bucket/inputs/file.mp4`).
     *     @type string $output_uri
     *           Input only. Specify the `output_uri` to populate an empty `Job.config.output.uri` or
     *           `JobTemplate.config.output.uri` when using template.
     *           URI for the output file(s). For example, `gs://my-bucket/outputs/`.
     *     @type string $template_id
     *           Input only. Specify the `template_id` to use for populating `Job.config`. The default
     *           is `preset/web-hd`.
     *           Preset Transcoder templates:
     *           - `preset/{preset_id}`
     *           - User defined JobTemplate:
     *             `{job_template_id}`
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\JobConfig $config
     *           The configuration for this job.
     *     @type int $priority
     *           Specify the priority of the job. Enter a value between 0 and 100, where 0
     *           is the lowest priority and 100 is the highest priority. The default is 0.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\Job\OriginUri $origin_uri
     *           Output only. The origin URI.
     *           <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *     @type int $state
     *           Output only. The current state of the job.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\Progress $progress
     *           Output only. Estimated fractional progress, from `0` to `1` for each
     *           step.
     *           <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *     @type string $failure_reason
     *           Output only. A description of the reason for the failure. This property is
     *           always present when `state` is `FAILED`.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\FailureDetail[]|\Google\Protobuf\Internal\RepeatedField $failure_details
     *           Output only. List of failure details. This property may contain additional
     *           information about the failure when `failure_reason` is present.
     *           <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the job was created.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. The time the transcoding started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time the transcoding finished.
     *     @type int $ttl_after_completion_days
     *           Job time to live value in days, which will be effective after job
     *           completion. Job should be deleted automatically after the given TTL. Enter
     *           a value between 1 and 90. The default is 30.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the job.
     * Format: `projects/{project}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the job.
     * Format: `projects/{project}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Input only. Specify the `input_uri` to populate empty `uri` fields in each element of
     * `Job.config.inputs` or `JobTemplate.config.inputs` when using template.
     * URI of the media. Input files must be at least 5 seconds in duration and
     * stored in Cloud Storage (for example, `gs://bucket/inputs/file.mp4`).
     *
     * Generated from protobuf field <code>string input_uri = 2 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getInputUri()
    {
        return $this->input_uri;
    }

    /**
     * Input only. Specify the `input_uri` to populate empty `uri` fields in each element of
     * `Job.config.inputs` or `JobTemplate.config.inputs` when using template.
     * URI of the media. Input files must be at least 5 seconds in duration and
     * stored in Cloud Storage (for example, `gs://bucket/inputs/file.mp4`).
     *
     * Generated from protobuf field <code>string input_uri = 2 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_uri = $var;

        return $this;
    }

    /**
     * Input only. Specify the `output_uri` to populate an empty `Job.config.output.uri` or
     * `JobTemplate.config.output.uri` when using template.
     * URI for the output file(s). For example, `gs://my-bucket/outputs/`.
     *
     * Generated from protobuf field <code>string output_uri = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getOutputUri()
    {
        return $this->output_uri;
    }

    /**
     * Input only. Specify the `output_uri` to populate an empty `Job.config.output.uri` or
     * `JobTemplate.config.output.uri` when using template.
     * URI for the output file(s). For example, `gs://my-bucket/outputs/`.
     *
     * Generated from protobuf field <code>string output_uri = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri = $var;

        return $this;
    }

    /**
     * Input only. Specify the `template_id` to use for populating `Job.config`. The default
     * is `preset/web-hd`.
     * Preset Transcoder templates:
     * - `preset/{preset_id}`
     * - User defined JobTemplate:
     *   `{job_template_id}`
     *
     * Generated from protobuf field <code>string template_id = 4 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->readOneof(4);
    }

    public function hasTemplateId()
    {
        return $this->hasOneof(4);
    }

    /**
     * Input only. Specify the `template_id` to use for populating `Job.config`. The default
     * is `preset/web-hd`.
     * Preset Transcoder templates:
     * - `preset/{preset_id}`
     * - User defined JobTemplate:
     *   `{job_template_id}`
     *
     * Generated from protobuf field <code>string template_id = 4 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The configuration for this job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.JobConfig config = 5;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\JobConfig|null
     */
    public function getConfig()
    {
        return $this->readOneof(5);
    }

    public function hasConfig()
    {
        return $this->hasOneof(5);
    }

    /**
     * The configuration for this job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.JobConfig config = 5;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\JobConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\JobConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Specify the priority of the job. Enter a value between 0 and 100, where 0
     * is the lowest priority and 100 is the highest priority. The default is 0.
     *
     * Generated from protobuf field <code>int32 priority = 6;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Specify the priority of the job. Enter a value between 0 and 100, where 0
     * is the lowest priority and 100 is the highest priority. The default is 0.
     *
     * Generated from protobuf field <code>int32 priority = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Output only. The origin URI.
     * <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Job.OriginUri origin_uri = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\Job\OriginUri|null
     */
    public function getOriginUri()
    {
        return isset($this->origin_uri) ? $this->origin_uri : null;
    }

    public function hasOriginUri()
    {
        return isset($this->origin_uri);
    }

    public function clearOriginUri()
    {
        unset($this->origin_uri);
    }

    /**
     * Output only. The origin URI.
     * <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Job.OriginUri origin_uri = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\Job\OriginUri $var
     * @return $this
     */
    public function setOriginUri($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\Job\OriginUri::class);
        $this->origin_uri = $var;

        return $this;
    }

    /**
     * Output only. The current state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Job.ProcessingState state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Job.ProcessingState state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Transcoder\V1beta1\Job\ProcessingState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Estimated fractional progress, from `0` to `1` for each
     * step.
     * <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Progress progress = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\Progress|null
     */
    public function getProgress()
    {
        return isset($this->progress) ? $this->progress : null;
    }

    public function hasProgress()
    {
        return isset($this->progress);
    }

    public function clearProgress()
    {
        unset($this->progress);
    }

    /**
     * Output only. Estimated fractional progress, from `0` to `1` for each
     * step.
     * <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Progress progress = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\Progress $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\Progress::class);
        $this->progress = $var;

        return $this;
    }

    /**
     * Output only. A description of the reason for the failure. This property is
     * always present when `state` is `FAILED`.
     *
     * Generated from protobuf field <code>string failure_reason = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }

    /**
     * Output only. A description of the reason for the failure. This property is
     * always present when `state` is `FAILED`.
     *
     * Generated from protobuf field <code>string failure_reason = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_reason = $var;

        return $this;
    }

    /**
     * Output only. List of failure details. This property may contain additional
     * information about the failure when `failure_reason` is present.
     * <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.FailureDetail failure_details = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFailureDetails()
    {
        return $this->failure_details;
    }

    /**
     * Output only. List of failure details. This property may contain additional
     * information about the failure when `failure_reason` is present.
     * <aside class="note"><b>Note</b>: This feature is not yet available.</aside>
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.FailureDetail failure_details = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\FailureDetail[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFailureDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1beta1\FailureDetail::class);
        $this->failure_details = $arr;

        return $this;
    }

    /**
     * Output only. The time the job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time the transcoding started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : null;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. The time the transcoding started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. The time the transcoding finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. The time the transcoding finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Job time to live value in days, which will be effective after job
     * completion. Job should be deleted automatically after the given TTL. Enter
     * a value between 1 and 90. The default is 30.
     *
     * Generated from protobuf field <code>int32 ttl_after_completion_days = 15;</code>
     * @return int
     */
    public function getTtlAfterCompletionDays()
    {
        return $this->ttl_after_completion_days;
    }

    /**
     * Job time to live value in days, which will be effective after job
     * completion. Job should be deleted automatically after the given TTL. Enter
     * a value between 1 and 90. The default is 30.
     *
     * Generated from protobuf field <code>int32 ttl_after_completion_days = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setTtlAfterCompletionDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->ttl_after_completion_days = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobConfig()
    {
        return $this->whichOneof("job_config");
    }

}

