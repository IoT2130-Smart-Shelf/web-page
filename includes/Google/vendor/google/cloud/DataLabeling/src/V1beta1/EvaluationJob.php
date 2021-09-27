<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation_job.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines an evaluation job that runs periodically to generate
 * [Evaluations][google.cloud.datalabeling.v1beta1.Evaluation]. [Creating an evaluation
 * job](https://cloud.google.com/ml-engine/docs/continuous-evaluation/create-job) is the starting point
 * for using continuous evaluation.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.EvaluationJob</code>
 */
class EvaluationJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. After you create a job, Data Labeling Service assigns a name
     * to the job with the following format:
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. Description of the job. The description can be up to 25,000
     * characters long.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Output only. Describes the current state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJob.State state = 3;</code>
     */
    private $state = 0;
    /**
     * Required. Describes the interval at which the job runs. This interval must
     * be at least 1 day, and it is rounded to the nearest day. For example, if
     * you specify a 50-hour interval, the job runs every 2 days.
     * You can provide the schedule in
     * [crontab format](https://cloud.google.com/scheduler/docs/configuring/cron-job-schedules) or in an
     * [English-like
     * format](https://cloud.google.com/appengine/docs/standard/python/config/cronref#schedule_format).
     * Regardless of what you specify, the job will run at 10:00 AM UTC. Only the
     * interval from this schedule is used, not the specific time of day.
     *
     * Generated from protobuf field <code>string schedule = 4;</code>
     */
    private $schedule = '';
    /**
     * Required. The [AI Platform Prediction model
     * version](https://cloud.google.com/ml-engine/docs/prediction-overview) to be evaluated. Prediction
     * input and output is sampled from this model version. When creating an
     * evaluation job, specify the model version in the following format:
     * "projects/<var>{project_id}</var>/models/<var>{model_name}</var>/versions/<var>{version_name}</var>"
     * There can only be one evaluation job per model version.
     *
     * Generated from protobuf field <code>string model_version = 5;</code>
     */
    private $model_version = '';
    /**
     * Required. Configuration details for the evaluation job.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJobConfig evaluation_job_config = 6;</code>
     */
    private $evaluation_job_config = null;
    /**
     * Required. Name of the [AnnotationSpecSet][google.cloud.datalabeling.v1beta1.AnnotationSpecSet] describing all the
     * labels that your machine learning model outputs. You must create this
     * resource before you create an evaluation job and provide its name in the
     * following format:
     * "projects/<var>{project_id}</var>/annotationSpecSets/<var>{annotation_spec_set_id}</var>"
     *
     * Generated from protobuf field <code>string annotation_spec_set = 7;</code>
     */
    private $annotation_spec_set = '';
    /**
     * Required. Whether you want Data Labeling Service to provide ground truth
     * labels for prediction input. If you want the service to assign human
     * labelers to annotate your data, set this to `true`. If you want to provide
     * your own ground truth labels in the evaluation job's BigQuery table, set
     * this to `false`.
     *
     * Generated from protobuf field <code>bool label_missing_ground_truth = 8;</code>
     */
    private $label_missing_ground_truth = false;
    /**
     * Output only. Every time the evaluation job runs and an error occurs, the
     * failed attempt is appended to this array.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.Attempt attempts = 9;</code>
     */
    private $attempts;
    /**
     * Output only. Timestamp of when this evaluation job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10;</code>
     */
    private $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. After you create a job, Data Labeling Service assigns a name
     *           to the job with the following format:
     *           "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
     *     @type string $description
     *           Required. Description of the job. The description can be up to 25,000
     *           characters long.
     *     @type int $state
     *           Output only. Describes the current state of the job.
     *     @type string $schedule
     *           Required. Describes the interval at which the job runs. This interval must
     *           be at least 1 day, and it is rounded to the nearest day. For example, if
     *           you specify a 50-hour interval, the job runs every 2 days.
     *           You can provide the schedule in
     *           [crontab format](https://cloud.google.com/scheduler/docs/configuring/cron-job-schedules) or in an
     *           [English-like
     *           format](https://cloud.google.com/appengine/docs/standard/python/config/cronref#schedule_format).
     *           Regardless of what you specify, the job will run at 10:00 AM UTC. Only the
     *           interval from this schedule is used, not the specific time of day.
     *     @type string $model_version
     *           Required. The [AI Platform Prediction model
     *           version](https://cloud.google.com/ml-engine/docs/prediction-overview) to be evaluated. Prediction
     *           input and output is sampled from this model version. When creating an
     *           evaluation job, specify the model version in the following format:
     *           "projects/<var>{project_id}</var>/models/<var>{model_name}</var>/versions/<var>{version_name}</var>"
     *           There can only be one evaluation job per model version.
     *     @type \Google\Cloud\DataLabeling\V1beta1\EvaluationJobConfig $evaluation_job_config
     *           Required. Configuration details for the evaluation job.
     *     @type string $annotation_spec_set
     *           Required. Name of the [AnnotationSpecSet][google.cloud.datalabeling.v1beta1.AnnotationSpecSet] describing all the
     *           labels that your machine learning model outputs. You must create this
     *           resource before you create an evaluation job and provide its name in the
     *           following format:
     *           "projects/<var>{project_id}</var>/annotationSpecSets/<var>{annotation_spec_set_id}</var>"
     *     @type bool $label_missing_ground_truth
     *           Required. Whether you want Data Labeling Service to provide ground truth
     *           labels for prediction input. If you want the service to assign human
     *           labelers to annotate your data, set this to `true`. If you want to provide
     *           your own ground truth labels in the evaluation job's BigQuery table, set
     *           this to `false`.
     *     @type \Google\Cloud\DataLabeling\V1beta1\Attempt[]|\Google\Protobuf\Internal\RepeatedField $attempts
     *           Output only. Every time the evaluation job runs and an error occurs, the
     *           failed attempt is appended to this array.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp of when this evaluation job was created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\EvaluationJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. After you create a job, Data Labeling Service assigns a name
     * to the job with the following format:
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. After you create a job, Data Labeling Service assigns a name
     * to the job with the following format:
     * "projects/<var>{project_id}</var>/evaluationJobs/<var>{evaluation_job_id}</var>"
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
     * Required. Description of the job. The description can be up to 25,000
     * characters long.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Required. Description of the job. The description can be up to 25,000
     * characters long.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Describes the current state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJob.State state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Describes the current state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJob.State state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataLabeling\V1beta1\EvaluationJob\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Required. Describes the interval at which the job runs. This interval must
     * be at least 1 day, and it is rounded to the nearest day. For example, if
     * you specify a 50-hour interval, the job runs every 2 days.
     * You can provide the schedule in
     * [crontab format](https://cloud.google.com/scheduler/docs/configuring/cron-job-schedules) or in an
     * [English-like
     * format](https://cloud.google.com/appengine/docs/standard/python/config/cronref#schedule_format).
     * Regardless of what you specify, the job will run at 10:00 AM UTC. Only the
     * interval from this schedule is used, not the specific time of day.
     *
     * Generated from protobuf field <code>string schedule = 4;</code>
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Required. Describes the interval at which the job runs. This interval must
     * be at least 1 day, and it is rounded to the nearest day. For example, if
     * you specify a 50-hour interval, the job runs every 2 days.
     * You can provide the schedule in
     * [crontab format](https://cloud.google.com/scheduler/docs/configuring/cron-job-schedules) or in an
     * [English-like
     * format](https://cloud.google.com/appengine/docs/standard/python/config/cronref#schedule_format).
     * Regardless of what you specify, the job will run at 10:00 AM UTC. Only the
     * interval from this schedule is used, not the specific time of day.
     *
     * Generated from protobuf field <code>string schedule = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->schedule = $var;

        return $this;
    }

    /**
     * Required. The [AI Platform Prediction model
     * version](https://cloud.google.com/ml-engine/docs/prediction-overview) to be evaluated. Prediction
     * input and output is sampled from this model version. When creating an
     * evaluation job, specify the model version in the following format:
     * "projects/<var>{project_id}</var>/models/<var>{model_name}</var>/versions/<var>{version_name}</var>"
     * There can only be one evaluation job per model version.
     *
     * Generated from protobuf field <code>string model_version = 5;</code>
     * @return string
     */
    public function getModelVersion()
    {
        return $this->model_version;
    }

    /**
     * Required. The [AI Platform Prediction model
     * version](https://cloud.google.com/ml-engine/docs/prediction-overview) to be evaluated. Prediction
     * input and output is sampled from this model version. When creating an
     * evaluation job, specify the model version in the following format:
     * "projects/<var>{project_id}</var>/models/<var>{model_name}</var>/versions/<var>{version_name}</var>"
     * There can only be one evaluation job per model version.
     *
     * Generated from protobuf field <code>string model_version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version = $var;

        return $this;
    }

    /**
     * Required. Configuration details for the evaluation job.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJobConfig evaluation_job_config = 6;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\EvaluationJobConfig|null
     */
    public function getEvaluationJobConfig()
    {
        return isset($this->evaluation_job_config) ? $this->evaluation_job_config : null;
    }

    public function hasEvaluationJobConfig()
    {
        return isset($this->evaluation_job_config);
    }

    public function clearEvaluationJobConfig()
    {
        unset($this->evaluation_job_config);
    }

    /**
     * Required. Configuration details for the evaluation job.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJobConfig evaluation_job_config = 6;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\EvaluationJobConfig $var
     * @return $this
     */
    public function setEvaluationJobConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\EvaluationJobConfig::class);
        $this->evaluation_job_config = $var;

        return $this;
    }

    /**
     * Required. Name of the [AnnotationSpecSet][google.cloud.datalabeling.v1beta1.AnnotationSpecSet] describing all the
     * labels that your machine learning model outputs. You must create this
     * resource before you create an evaluation job and provide its name in the
     * following format:
     * "projects/<var>{project_id}</var>/annotationSpecSets/<var>{annotation_spec_set_id}</var>"
     *
     * Generated from protobuf field <code>string annotation_spec_set = 7;</code>
     * @return string
     */
    public function getAnnotationSpecSet()
    {
        return $this->annotation_spec_set;
    }

    /**
     * Required. Name of the [AnnotationSpecSet][google.cloud.datalabeling.v1beta1.AnnotationSpecSet] describing all the
     * labels that your machine learning model outputs. You must create this
     * resource before you create an evaluation job and provide its name in the
     * following format:
     * "projects/<var>{project_id}</var>/annotationSpecSets/<var>{annotation_spec_set_id}</var>"
     *
     * Generated from protobuf field <code>string annotation_spec_set = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationSpecSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_spec_set = $var;

        return $this;
    }

    /**
     * Required. Whether you want Data Labeling Service to provide ground truth
     * labels for prediction input. If you want the service to assign human
     * labelers to annotate your data, set this to `true`. If you want to provide
     * your own ground truth labels in the evaluation job's BigQuery table, set
     * this to `false`.
     *
     * Generated from protobuf field <code>bool label_missing_ground_truth = 8;</code>
     * @return bool
     */
    public function getLabelMissingGroundTruth()
    {
        return $this->label_missing_ground_truth;
    }

    /**
     * Required. Whether you want Data Labeling Service to provide ground truth
     * labels for prediction input. If you want the service to assign human
     * labelers to annotate your data, set this to `true`. If you want to provide
     * your own ground truth labels in the evaluation job's BigQuery table, set
     * this to `false`.
     *
     * Generated from protobuf field <code>bool label_missing_ground_truth = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setLabelMissingGroundTruth($var)
    {
        GPBUtil::checkBool($var);
        $this->label_missing_ground_truth = $var;

        return $this;
    }

    /**
     * Output only. Every time the evaluation job runs and an error occurs, the
     * failed attempt is appended to this array.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.Attempt attempts = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Output only. Every time the evaluation job runs and an error occurs, the
     * failed attempt is appended to this array.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.Attempt attempts = 9;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\Attempt[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttempts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\Attempt::class);
        $this->attempts = $arr;

        return $this;
    }

    /**
     * Output only. Timestamp of when this evaluation job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10;</code>
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
     * Output only. Timestamp of when this evaluation job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}

