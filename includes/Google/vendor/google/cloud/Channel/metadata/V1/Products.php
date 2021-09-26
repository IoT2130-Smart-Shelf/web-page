<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/products.proto

namespace GPBMetadata\Google\Cloud\Channel\V1;

class Products
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/channel/v1/products.protogoogle.cloud.channel.v1google/api/annotations.proto"�
Product
name (	>
marketing_info (2&.google.cloud.channel.v1.MarketingInfo:<�A9
#cloudchannel.googleapis.com/Productproducts/{product}"�
Sku
name (	>
marketing_info (2&.google.cloud.channel.v1.MarketingInfo1
product (2 .google.cloud.channel.v1.Product:C�A@
cloudchannel.googleapis.com/Skuproducts/{product}/skus/{sku}"p
MarketingInfo
display_name (	
description (	4
default_logo (2.google.cloud.channel.v1.Media"Y
Media
title (	
content (	0
type (2".google.cloud.channel.v1.MediaType*=
	MediaType
MEDIA_TYPE_UNSPECIFIED 
MEDIA_TYPE_IMAGEBn
com.google.cloud.channel.v1BProductsProtoPZ>google.golang.org/genproto/googleapis/cloud/channel/v1;channelbproto3'
        , true);

        static::$is_initialized = true;
    }
}

