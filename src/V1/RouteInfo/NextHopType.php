<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1\RouteInfo;

use UnexpectedValueException;

/**
 * Type of next hop:
 *
 * Protobuf type <code>google.cloud.networkmanagement.v1.RouteInfo.NextHopType</code>
 */
class NextHopType
{
    /**
     * Unspecified type. Default value.
     *
     * Generated from protobuf enum <code>NEXT_HOP_TYPE_UNSPECIFIED = 0;</code>
     */
    const NEXT_HOP_TYPE_UNSPECIFIED = 0;
    /**
     * Next hop is an IP address.
     *
     * Generated from protobuf enum <code>NEXT_HOP_IP = 1;</code>
     */
    const NEXT_HOP_IP = 1;
    /**
     * Next hop is a Compute Engine instance.
     *
     * Generated from protobuf enum <code>NEXT_HOP_INSTANCE = 2;</code>
     */
    const NEXT_HOP_INSTANCE = 2;
    /**
     * Next hop is a VPC network gateway.
     *
     * Generated from protobuf enum <code>NEXT_HOP_NETWORK = 3;</code>
     */
    const NEXT_HOP_NETWORK = 3;
    /**
     * Next hop is a peering VPC.
     *
     * Generated from protobuf enum <code>NEXT_HOP_PEERING = 4;</code>
     */
    const NEXT_HOP_PEERING = 4;
    /**
     * Next hop is an interconnect.
     *
     * Generated from protobuf enum <code>NEXT_HOP_INTERCONNECT = 5;</code>
     */
    const NEXT_HOP_INTERCONNECT = 5;
    /**
     * Next hop is a VPN tunnel.
     *
     * Generated from protobuf enum <code>NEXT_HOP_VPN_TUNNEL = 6;</code>
     */
    const NEXT_HOP_VPN_TUNNEL = 6;
    /**
     * Next hop is a VPN gateway. This scenario only happens when tracing
     * connectivity from an on-premises network to Google Cloud through a VPN.
     * The analysis simulates a packet departing from the on-premises network
     * through a VPN tunnel and arriving at a Cloud VPN gateway.
     *
     * Generated from protobuf enum <code>NEXT_HOP_VPN_GATEWAY = 7;</code>
     */
    const NEXT_HOP_VPN_GATEWAY = 7;
    /**
     * Next hop is an internet gateway.
     *
     * Generated from protobuf enum <code>NEXT_HOP_INTERNET_GATEWAY = 8;</code>
     */
    const NEXT_HOP_INTERNET_GATEWAY = 8;
    /**
     * Next hop is blackhole; that is, the next hop either does not exist or is
     * not running.
     *
     * Generated from protobuf enum <code>NEXT_HOP_BLACKHOLE = 9;</code>
     */
    const NEXT_HOP_BLACKHOLE = 9;
    /**
     * Next hop is the forwarding rule of an Internal Load Balancer.
     *
     * Generated from protobuf enum <code>NEXT_HOP_ILB = 10;</code>
     */
    const NEXT_HOP_ILB = 10;

    private static $valueToName = [
        self::NEXT_HOP_TYPE_UNSPECIFIED => 'NEXT_HOP_TYPE_UNSPECIFIED',
        self::NEXT_HOP_IP => 'NEXT_HOP_IP',
        self::NEXT_HOP_INSTANCE => 'NEXT_HOP_INSTANCE',
        self::NEXT_HOP_NETWORK => 'NEXT_HOP_NETWORK',
        self::NEXT_HOP_PEERING => 'NEXT_HOP_PEERING',
        self::NEXT_HOP_INTERCONNECT => 'NEXT_HOP_INTERCONNECT',
        self::NEXT_HOP_VPN_TUNNEL => 'NEXT_HOP_VPN_TUNNEL',
        self::NEXT_HOP_VPN_GATEWAY => 'NEXT_HOP_VPN_GATEWAY',
        self::NEXT_HOP_INTERNET_GATEWAY => 'NEXT_HOP_INTERNET_GATEWAY',
        self::NEXT_HOP_BLACKHOLE => 'NEXT_HOP_BLACKHOLE',
        self::NEXT_HOP_ILB => 'NEXT_HOP_ILB',
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
class_alias(NextHopType::class, \Google\Cloud\NetworkManagement\V1\RouteInfo_NextHopType::class);

