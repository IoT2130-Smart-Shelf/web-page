<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/certificate.proto

namespace GPBMetadata\Google\Appengine\V1;

class Certificate
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/appengine/v1/certificate.protogoogle.appengine.v1google/api/annotations.proto"�
AuthorizedCertificate
name (	

id (	
display_name (	
domain_names (	/
expire_time (2.google.protobuf.TimestampE
certificate_raw_data (2\'.google.appengine.v1.CertificateRawDataD
managed_certificate (2\'.google.appengine.v1.ManagedCertificate
visible_domain_mappings (	
domain_mappings_count	 ("E
CertificateRawData
public_certificate (	
private_key (	"�
ManagedCertificate5
last_renewal_time (2.google.protobuf.Timestamp5
status (2%.google.appengine.v1.ManagementStatus*�
ManagementStatus!
MANAGEMENT_STATUS_UNSPECIFIED 
OK
PENDING
FAILED_RETRYING_NOT_VISIBLE
FAILED_PERMANENT!
FAILED_RETRYING_CAA_FORBIDDEN 
FAILED_RETRYING_CAA_CHECKINGB�
com.google.appengine.v1BCertificateProtoPZ<google.golang.org/genproto/googleapis/appengine/v1;appengine�Google.Cloud.AppEngine.V1�Google\\Cloud\\AppEngine\\V1�Google::Cloud::AppEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

