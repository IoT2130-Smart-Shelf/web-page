<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1\CryptoKeyVersion;

use UnexpectedValueException;

/**
 * The state of a [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion], indicating if it can be used.
 *
 * Protobuf type <code>google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState</code>
 */
class CryptoKeyVersionState
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>CRYPTO_KEY_VERSION_STATE_UNSPECIFIED = 0;</code>
     */
    const CRYPTO_KEY_VERSION_STATE_UNSPECIFIED = 0;
    /**
     * This version is still being generated. It may not be used, enabled,
     * disabled, or destroyed yet. Cloud KMS will automatically mark this
     * version [ENABLED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.ENABLED] as soon as the version is ready.
     *
     * Generated from protobuf enum <code>PENDING_GENERATION = 5;</code>
     */
    const PENDING_GENERATION = 5;
    /**
     * This version may be used for cryptographic operations.
     *
     * Generated from protobuf enum <code>ENABLED = 1;</code>
     */
    const ENABLED = 1;
    /**
     * This version may not be used, but the key material is still available,
     * and the version can be placed back into the [ENABLED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.ENABLED] state.
     *
     * Generated from protobuf enum <code>DISABLED = 2;</code>
     */
    const DISABLED = 2;
    /**
     * This version is destroyed, and the key material is no longer stored.
     *
     * Generated from protobuf enum <code>DESTROYED = 3;</code>
     */
    const DESTROYED = 3;
    /**
     * This version is scheduled for destruction, and will be destroyed soon.
     * Call
     * [RestoreCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.RestoreCryptoKeyVersion]
     * to put it back into the [DISABLED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DISABLED] state.
     *
     * Generated from protobuf enum <code>DESTROY_SCHEDULED = 4;</code>
     */
    const DESTROY_SCHEDULED = 4;
    /**
     * This version is still being imported. It may not be used, enabled,
     * disabled, or destroyed yet. Cloud KMS will automatically mark this
     * version [ENABLED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.ENABLED] as soon as the version is ready.
     *
     * Generated from protobuf enum <code>PENDING_IMPORT = 6;</code>
     */
    const PENDING_IMPORT = 6;
    /**
     * This version was not imported successfully. It may not be used, enabled,
     * disabled, or destroyed. The submitted key material has been discarded.
     * Additional details can be found in
     * [CryptoKeyVersion.import_failure_reason][google.cloud.kms.v1.CryptoKeyVersion.import_failure_reason].
     *
     * Generated from protobuf enum <code>IMPORT_FAILED = 7;</code>
     */
    const IMPORT_FAILED = 7;

    private static $valueToName = [
        self::CRYPTO_KEY_VERSION_STATE_UNSPECIFIED => 'CRYPTO_KEY_VERSION_STATE_UNSPECIFIED',
        self::PENDING_GENERATION => 'PENDING_GENERATION',
        self::ENABLED => 'ENABLED',
        self::DISABLED => 'DISABLED',
        self::DESTROYED => 'DESTROYED',
        self::DESTROY_SCHEDULED => 'DESTROY_SCHEDULED',
        self::PENDING_IMPORT => 'PENDING_IMPORT',
        self::IMPORT_FAILED => 'IMPORT_FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CryptoKeyVersionState::class, \Google\Cloud\Kms\V1\CryptoKeyVersion_CryptoKeyVersionState::class);

