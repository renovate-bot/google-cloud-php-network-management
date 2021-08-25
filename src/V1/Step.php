<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A simulated forwarding path is composed of multiple steps.
 * Each step has a well-defined state and an associated configuration.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.Step</code>
 */
class Step extends \Google\Protobuf\Internal\Message
{
    /**
     * A description of the step. Usually this is a summary of the state.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     */
    private $description = '';
    /**
     * Each step is in one of the pre-defined states.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Step.State state = 2;</code>
     */
    private $state = 0;
    /**
     * This is a step that leads to the final state Drop.
     *
     * Generated from protobuf field <code>bool causes_drop = 3;</code>
     */
    private $causes_drop = false;
    /**
     * Project ID that contains the configuration this step is validating.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     */
    private $project_id = '';
    protected $step_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           A description of the step. Usually this is a summary of the state.
     *     @type int $state
     *           Each step is in one of the pre-defined states.
     *     @type bool $causes_drop
     *           This is a step that leads to the final state Drop.
     *     @type string $project_id
     *           Project ID that contains the configuration this step is validating.
     *     @type \Google\Cloud\NetworkManagement\V1\InstanceInfo $instance
     *           Display information of a Compute Engine instance.
     *     @type \Google\Cloud\NetworkManagement\V1\FirewallInfo $firewall
     *           Display information of a Compute Engine firewall rule.
     *     @type \Google\Cloud\NetworkManagement\V1\RouteInfo $route
     *           Display information of a Compute Engine route.
     *     @type \Google\Cloud\NetworkManagement\V1\EndpointInfo $endpoint
     *           Display information of the source and destination under analysis.
     *           The endpoint information in an intermediate state may differ with the
     *           initial input, as it might be modified by state like NAT,
     *           or Connection Proxy.
     *     @type \Google\Cloud\NetworkManagement\V1\ForwardingRuleInfo $forwarding_rule
     *           Display information of a Compute Engine forwarding rule.
     *     @type \Google\Cloud\NetworkManagement\V1\VpnGatewayInfo $vpn_gateway
     *           Display information of a Compute Engine VPN gateway.
     *     @type \Google\Cloud\NetworkManagement\V1\VpnTunnelInfo $vpn_tunnel
     *           Display information of a Compute Engine VPN tunnel.
     *     @type \Google\Cloud\NetworkManagement\V1\DeliverInfo $deliver
     *           Display information of the final state "deliver" and reason.
     *     @type \Google\Cloud\NetworkManagement\V1\ForwardInfo $forward
     *           Display information of the final state "forward" and reason.
     *     @type \Google\Cloud\NetworkManagement\V1\AbortInfo $abort
     *           Display information of the final state "abort" and reason.
     *     @type \Google\Cloud\NetworkManagement\V1\DropInfo $drop
     *           Display information of the final state "drop" and reason.
     *     @type \Google\Cloud\NetworkManagement\V1\LoadBalancerInfo $load_balancer
     *           Display information of the load balancers.
     *     @type \Google\Cloud\NetworkManagement\V1\NetworkInfo $network
     *           Display information of a Google Cloud network.
     *     @type \Google\Cloud\NetworkManagement\V1\GKEMasterInfo $gke_master
     *           Display information of a Google Kubernetes Engine cluster master.
     *     @type \Google\Cloud\NetworkManagement\V1\CloudSQLInstanceInfo $cloud_sql_instance
     *           Display information of a Cloud SQL instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * A description of the step. Usually this is a summary of the state.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the step. Usually this is a summary of the state.
     *
     * Generated from protobuf field <code>string description = 1;</code>
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
     * Each step is in one of the pre-defined states.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Step.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Each step is in one of the pre-defined states.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Step.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\Step\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * This is a step that leads to the final state Drop.
     *
     * Generated from protobuf field <code>bool causes_drop = 3;</code>
     * @return bool
     */
    public function getCausesDrop()
    {
        return $this->causes_drop;
    }

    /**
     * This is a step that leads to the final state Drop.
     *
     * Generated from protobuf field <code>bool causes_drop = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCausesDrop($var)
    {
        GPBUtil::checkBool($var);
        $this->causes_drop = $var;

        return $this;
    }

    /**
     * Project ID that contains the configuration this step is validating.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Project ID that contains the configuration this step is validating.
     *
     * Generated from protobuf field <code>string project_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Display information of a Compute Engine instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.InstanceInfo instance = 5;</code>
     * @return \Google\Cloud\NetworkManagement\V1\InstanceInfo|null
     */
    public function getInstance()
    {
        return $this->readOneof(5);
    }

    public function hasInstance()
    {
        return $this->hasOneof(5);
    }

    /**
     * Display information of a Compute Engine instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.InstanceInfo instance = 5;</code>
     * @param \Google\Cloud\NetworkManagement\V1\InstanceInfo $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\InstanceInfo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine firewall rule.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.FirewallInfo firewall = 6;</code>
     * @return \Google\Cloud\NetworkManagement\V1\FirewallInfo|null
     */
    public function getFirewall()
    {
        return $this->readOneof(6);
    }

    public function hasFirewall()
    {
        return $this->hasOneof(6);
    }

    /**
     * Display information of a Compute Engine firewall rule.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.FirewallInfo firewall = 6;</code>
     * @param \Google\Cloud\NetworkManagement\V1\FirewallInfo $var
     * @return $this
     */
    public function setFirewall($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\FirewallInfo::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine route.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo route = 7;</code>
     * @return \Google\Cloud\NetworkManagement\V1\RouteInfo|null
     */
    public function getRoute()
    {
        return $this->readOneof(7);
    }

    public function hasRoute()
    {
        return $this->hasOneof(7);
    }

    /**
     * Display information of a Compute Engine route.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.RouteInfo route = 7;</code>
     * @param \Google\Cloud\NetworkManagement\V1\RouteInfo $var
     * @return $this
     */
    public function setRoute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\RouteInfo::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Display information of the source and destination under analysis.
     * The endpoint information in an intermediate state may differ with the
     * initial input, as it might be modified by state like NAT,
     * or Connection Proxy.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint = 8;</code>
     * @return \Google\Cloud\NetworkManagement\V1\EndpointInfo|null
     */
    public function getEndpoint()
    {
        return $this->readOneof(8);
    }

    public function hasEndpoint()
    {
        return $this->hasOneof(8);
    }

    /**
     * Display information of the source and destination under analysis.
     * The endpoint information in an intermediate state may differ with the
     * initial input, as it might be modified by state like NAT,
     * or Connection Proxy.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint = 8;</code>
     * @param \Google\Cloud\NetworkManagement\V1\EndpointInfo $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\EndpointInfo::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine forwarding rule.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ForwardingRuleInfo forwarding_rule = 9;</code>
     * @return \Google\Cloud\NetworkManagement\V1\ForwardingRuleInfo|null
     */
    public function getForwardingRule()
    {
        return $this->readOneof(9);
    }

    public function hasForwardingRule()
    {
        return $this->hasOneof(9);
    }

    /**
     * Display information of a Compute Engine forwarding rule.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ForwardingRuleInfo forwarding_rule = 9;</code>
     * @param \Google\Cloud\NetworkManagement\V1\ForwardingRuleInfo $var
     * @return $this
     */
    public function setForwardingRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ForwardingRuleInfo::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine VPN gateway.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpnGatewayInfo vpn_gateway = 10;</code>
     * @return \Google\Cloud\NetworkManagement\V1\VpnGatewayInfo|null
     */
    public function getVpnGateway()
    {
        return $this->readOneof(10);
    }

    public function hasVpnGateway()
    {
        return $this->hasOneof(10);
    }

    /**
     * Display information of a Compute Engine VPN gateway.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpnGatewayInfo vpn_gateway = 10;</code>
     * @param \Google\Cloud\NetworkManagement\V1\VpnGatewayInfo $var
     * @return $this
     */
    public function setVpnGateway($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\VpnGatewayInfo::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Display information of a Compute Engine VPN tunnel.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpnTunnelInfo vpn_tunnel = 11;</code>
     * @return \Google\Cloud\NetworkManagement\V1\VpnTunnelInfo|null
     */
    public function getVpnTunnel()
    {
        return $this->readOneof(11);
    }

    public function hasVpnTunnel()
    {
        return $this->hasOneof(11);
    }

    /**
     * Display information of a Compute Engine VPN tunnel.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.VpnTunnelInfo vpn_tunnel = 11;</code>
     * @param \Google\Cloud\NetworkManagement\V1\VpnTunnelInfo $var
     * @return $this
     */
    public function setVpnTunnel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\VpnTunnelInfo::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Display information of the final state "deliver" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DeliverInfo deliver = 12;</code>
     * @return \Google\Cloud\NetworkManagement\V1\DeliverInfo|null
     */
    public function getDeliver()
    {
        return $this->readOneof(12);
    }

    public function hasDeliver()
    {
        return $this->hasOneof(12);
    }

    /**
     * Display information of the final state "deliver" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DeliverInfo deliver = 12;</code>
     * @param \Google\Cloud\NetworkManagement\V1\DeliverInfo $var
     * @return $this
     */
    public function setDeliver($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\DeliverInfo::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Display information of the final state "forward" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ForwardInfo forward = 13;</code>
     * @return \Google\Cloud\NetworkManagement\V1\ForwardInfo|null
     */
    public function getForward()
    {
        return $this->readOneof(13);
    }

    public function hasForward()
    {
        return $this->hasOneof(13);
    }

    /**
     * Display information of the final state "forward" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ForwardInfo forward = 13;</code>
     * @param \Google\Cloud\NetworkManagement\V1\ForwardInfo $var
     * @return $this
     */
    public function setForward($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ForwardInfo::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Display information of the final state "abort" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.AbortInfo abort = 14;</code>
     * @return \Google\Cloud\NetworkManagement\V1\AbortInfo|null
     */
    public function getAbort()
    {
        return $this->readOneof(14);
    }

    public function hasAbort()
    {
        return $this->hasOneof(14);
    }

    /**
     * Display information of the final state "abort" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.AbortInfo abort = 14;</code>
     * @param \Google\Cloud\NetworkManagement\V1\AbortInfo $var
     * @return $this
     */
    public function setAbort($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\AbortInfo::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Display information of the final state "drop" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DropInfo drop = 15;</code>
     * @return \Google\Cloud\NetworkManagement\V1\DropInfo|null
     */
    public function getDrop()
    {
        return $this->readOneof(15);
    }

    public function hasDrop()
    {
        return $this->hasOneof(15);
    }

    /**
     * Display information of the final state "drop" and reason.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.DropInfo drop = 15;</code>
     * @param \Google\Cloud\NetworkManagement\V1\DropInfo $var
     * @return $this
     */
    public function setDrop($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\DropInfo::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Display information of the load balancers.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LoadBalancerInfo load_balancer = 16;</code>
     * @return \Google\Cloud\NetworkManagement\V1\LoadBalancerInfo|null
     */
    public function getLoadBalancer()
    {
        return $this->readOneof(16);
    }

    public function hasLoadBalancer()
    {
        return $this->hasOneof(16);
    }

    /**
     * Display information of the load balancers.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LoadBalancerInfo load_balancer = 16;</code>
     * @param \Google\Cloud\NetworkManagement\V1\LoadBalancerInfo $var
     * @return $this
     */
    public function setLoadBalancer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\LoadBalancerInfo::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Display information of a Google Cloud network.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.NetworkInfo network = 17;</code>
     * @return \Google\Cloud\NetworkManagement\V1\NetworkInfo|null
     */
    public function getNetwork()
    {
        return $this->readOneof(17);
    }

    public function hasNetwork()
    {
        return $this->hasOneof(17);
    }

    /**
     * Display information of a Google Cloud network.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.NetworkInfo network = 17;</code>
     * @param \Google\Cloud\NetworkManagement\V1\NetworkInfo $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\NetworkInfo::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Display information of a Google Kubernetes Engine cluster master.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.GKEMasterInfo gke_master = 18;</code>
     * @return \Google\Cloud\NetworkManagement\V1\GKEMasterInfo|null
     */
    public function getGkeMaster()
    {
        return $this->readOneof(18);
    }

    public function hasGkeMaster()
    {
        return $this->hasOneof(18);
    }

    /**
     * Display information of a Google Kubernetes Engine cluster master.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.GKEMasterInfo gke_master = 18;</code>
     * @param \Google\Cloud\NetworkManagement\V1\GKEMasterInfo $var
     * @return $this
     */
    public function setGkeMaster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\GKEMasterInfo::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Display information of a Cloud SQL instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.CloudSQLInstanceInfo cloud_sql_instance = 19;</code>
     * @return \Google\Cloud\NetworkManagement\V1\CloudSQLInstanceInfo|null
     */
    public function getCloudSqlInstance()
    {
        return $this->readOneof(19);
    }

    public function hasCloudSqlInstance()
    {
        return $this->hasOneof(19);
    }

    /**
     * Display information of a Cloud SQL instance.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.CloudSQLInstanceInfo cloud_sql_instance = 19;</code>
     * @param \Google\Cloud\NetworkManagement\V1\CloudSQLInstanceInfo $var
     * @return $this
     */
    public function setCloudSqlInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\CloudSQLInstanceInfo::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStepInfo()
    {
        return $this->whichOneof("step_info");
    }

}

