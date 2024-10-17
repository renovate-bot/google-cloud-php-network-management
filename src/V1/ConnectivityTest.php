<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/connectivity_test.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Connectivity Test for a network reachability analysis.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.ConnectivityTest</code>
 */
class ConnectivityTest extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Unique name of the resource using the form:
     *     `projects/{project_id}/locations/global/connectivityTests/{test_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * The user-supplied description of the Connectivity Test.
     * Maximum of 512 characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Required. Source specification of the Connectivity Test.
     * You can use a combination of source IP address, virtual machine
     * (VM) instance, or Compute Engine network to uniquely identify
     * the source location.
     * Examples:
     * If the source IP address is an internal IP address within a Google Cloud
     * Virtual Private Cloud (VPC) network, then you must also specify the VPC
     * network. Otherwise, specify the VM instance, which already contains its
     * internal IP address and VPC network information.
     * If the source of the test is within an on-premises network, then you must
     * provide the destination VPC network.
     * If the source endpoint is a Compute Engine VM instance with multiple
     * network interfaces, the instance itself is not sufficient to identify the
     * endpoint. So, you must also specify the source IP address or VPC network.
     * A reachability analysis proceeds even if the source location is
     * ambiguous. However, the test result may include endpoints that you don't
     * intend to test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Endpoint source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $source = null;
    /**
     * Required. Destination specification of the Connectivity Test.
     * You can use a combination of destination IP address, Compute Engine
     * VM instance, or VPC network to uniquely identify the destination
     * location.
     * Even if the destination IP address is not unique, the source IP
     * location is unique. Usually, the analysis can infer the destination
     * endpoint from route information.
     * If the destination you specify is a VM instance and the instance has
     * multiple network interfaces, then you must also specify either
     * a destination IP address  or VPC network to identify the destination
     * interface.
     * A reachability analysis proceeds even if the destination location is
     * ambiguous. However, the result can include endpoints that you don't
     * intend to test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Endpoint destination = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $destination = null;
    /**
     * IP Protocol of the test. When not provided, "TCP" is assumed.
     *
     * Generated from protobuf field <code>string protocol = 5;</code>
     */
    protected $protocol = '';
    /**
     * Other projects that may be relevant for reachability analysis.
     * This is applicable to scenarios where a test can cross project boundaries.
     *
     * Generated from protobuf field <code>repeated string related_projects = 6;</code>
     */
    private $related_projects;
    /**
     * Output only. The display name of a Connectivity Test.
     *
     * Generated from protobuf field <code>string display_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = '';
    /**
     * Resource labels to represent user-provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     */
    private $labels;
    /**
     * Output only. The time the test was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time the test's configuration was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. The reachability details of this test from the latest run.
     * The details are updated when creating a new test, updating an
     * existing test, or triggering a one-time rerun of an existing test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ReachabilityDetails reachability_details = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $reachability_details = null;
    /**
     * Output only. The probing details of this test from the latest run, present
     * for applicable tests only. The details are updated when creating a new
     * test, updating an existing test, or triggering a one-time rerun of an
     * existing test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails probing_details = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $probing_details = null;
    /**
     * Whether the test should skip firewall checking.
     * If not provided, we assume false.
     *
     * Generated from protobuf field <code>bool bypass_firewall_checks = 17;</code>
     */
    protected $bypass_firewall_checks = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Unique name of the resource using the form:
     *               `projects/{project_id}/locations/global/connectivityTests/{test_id}`
     *     @type string $description
     *           The user-supplied description of the Connectivity Test.
     *           Maximum of 512 characters.
     *     @type \Google\Cloud\NetworkManagement\V1\Endpoint $source
     *           Required. Source specification of the Connectivity Test.
     *           You can use a combination of source IP address, virtual machine
     *           (VM) instance, or Compute Engine network to uniquely identify
     *           the source location.
     *           Examples:
     *           If the source IP address is an internal IP address within a Google Cloud
     *           Virtual Private Cloud (VPC) network, then you must also specify the VPC
     *           network. Otherwise, specify the VM instance, which already contains its
     *           internal IP address and VPC network information.
     *           If the source of the test is within an on-premises network, then you must
     *           provide the destination VPC network.
     *           If the source endpoint is a Compute Engine VM instance with multiple
     *           network interfaces, the instance itself is not sufficient to identify the
     *           endpoint. So, you must also specify the source IP address or VPC network.
     *           A reachability analysis proceeds even if the source location is
     *           ambiguous. However, the test result may include endpoints that you don't
     *           intend to test.
     *     @type \Google\Cloud\NetworkManagement\V1\Endpoint $destination
     *           Required. Destination specification of the Connectivity Test.
     *           You can use a combination of destination IP address, Compute Engine
     *           VM instance, or VPC network to uniquely identify the destination
     *           location.
     *           Even if the destination IP address is not unique, the source IP
     *           location is unique. Usually, the analysis can infer the destination
     *           endpoint from route information.
     *           If the destination you specify is a VM instance and the instance has
     *           multiple network interfaces, then you must also specify either
     *           a destination IP address  or VPC network to identify the destination
     *           interface.
     *           A reachability analysis proceeds even if the destination location is
     *           ambiguous. However, the result can include endpoints that you don't
     *           intend to test.
     *     @type string $protocol
     *           IP Protocol of the test. When not provided, "TCP" is assumed.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $related_projects
     *           Other projects that may be relevant for reachability analysis.
     *           This is applicable to scenarios where a test can cross project boundaries.
     *     @type string $display_name
     *           Output only. The display name of a Connectivity Test.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Resource labels to represent user-provided metadata.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the test was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time the test's configuration was updated.
     *     @type \Google\Cloud\NetworkManagement\V1\ReachabilityDetails $reachability_details
     *           Output only. The reachability details of this test from the latest run.
     *           The details are updated when creating a new test, updating an
     *           existing test, or triggering a one-time rerun of an existing test.
     *     @type \Google\Cloud\NetworkManagement\V1\ProbingDetails $probing_details
     *           Output only. The probing details of this test from the latest run, present
     *           for applicable tests only. The details are updated when creating a new
     *           test, updating an existing test, or triggering a one-time rerun of an
     *           existing test.
     *     @type bool $bypass_firewall_checks
     *           Whether the test should skip firewall checking.
     *           If not provided, we assume false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\ConnectivityTest::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Unique name of the resource using the form:
     *     `projects/{project_id}/locations/global/connectivityTests/{test_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Unique name of the resource using the form:
     *     `projects/{project_id}/locations/global/connectivityTests/{test_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * The user-supplied description of the Connectivity Test.
     * Maximum of 512 characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The user-supplied description of the Connectivity Test.
     * Maximum of 512 characters.
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
     * Required. Source specification of the Connectivity Test.
     * You can use a combination of source IP address, virtual machine
     * (VM) instance, or Compute Engine network to uniquely identify
     * the source location.
     * Examples:
     * If the source IP address is an internal IP address within a Google Cloud
     * Virtual Private Cloud (VPC) network, then you must also specify the VPC
     * network. Otherwise, specify the VM instance, which already contains its
     * internal IP address and VPC network information.
     * If the source of the test is within an on-premises network, then you must
     * provide the destination VPC network.
     * If the source endpoint is a Compute Engine VM instance with multiple
     * network interfaces, the instance itself is not sufficient to identify the
     * endpoint. So, you must also specify the source IP address or VPC network.
     * A reachability analysis proceeds even if the source location is
     * ambiguous. However, the test result may include endpoints that you don't
     * intend to test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Endpoint source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkManagement\V1\Endpoint|null
     */
    public function getSource()
    {
        return $this->source;
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * Required. Source specification of the Connectivity Test.
     * You can use a combination of source IP address, virtual machine
     * (VM) instance, or Compute Engine network to uniquely identify
     * the source location.
     * Examples:
     * If the source IP address is an internal IP address within a Google Cloud
     * Virtual Private Cloud (VPC) network, then you must also specify the VPC
     * network. Otherwise, specify the VM instance, which already contains its
     * internal IP address and VPC network information.
     * If the source of the test is within an on-premises network, then you must
     * provide the destination VPC network.
     * If the source endpoint is a Compute Engine VM instance with multiple
     * network interfaces, the instance itself is not sufficient to identify the
     * endpoint. So, you must also specify the source IP address or VPC network.
     * A reachability analysis proceeds even if the source location is
     * ambiguous. However, the test result may include endpoints that you don't
     * intend to test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Endpoint source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkManagement\V1\Endpoint $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\Endpoint::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Required. Destination specification of the Connectivity Test.
     * You can use a combination of destination IP address, Compute Engine
     * VM instance, or VPC network to uniquely identify the destination
     * location.
     * Even if the destination IP address is not unique, the source IP
     * location is unique. Usually, the analysis can infer the destination
     * endpoint from route information.
     * If the destination you specify is a VM instance and the instance has
     * multiple network interfaces, then you must also specify either
     * a destination IP address  or VPC network to identify the destination
     * interface.
     * A reachability analysis proceeds even if the destination location is
     * ambiguous. However, the result can include endpoints that you don't
     * intend to test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Endpoint destination = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkManagement\V1\Endpoint|null
     */
    public function getDestination()
    {
        return $this->destination;
    }

    public function hasDestination()
    {
        return isset($this->destination);
    }

    public function clearDestination()
    {
        unset($this->destination);
    }

    /**
     * Required. Destination specification of the Connectivity Test.
     * You can use a combination of destination IP address, Compute Engine
     * VM instance, or VPC network to uniquely identify the destination
     * location.
     * Even if the destination IP address is not unique, the source IP
     * location is unique. Usually, the analysis can infer the destination
     * endpoint from route information.
     * If the destination you specify is a VM instance and the instance has
     * multiple network interfaces, then you must also specify either
     * a destination IP address  or VPC network to identify the destination
     * interface.
     * A reachability analysis proceeds even if the destination location is
     * ambiguous. However, the result can include endpoints that you don't
     * intend to test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.Endpoint destination = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkManagement\V1\Endpoint $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\Endpoint::class);
        $this->destination = $var;

        return $this;
    }

    /**
     * IP Protocol of the test. When not provided, "TCP" is assumed.
     *
     * Generated from protobuf field <code>string protocol = 5;</code>
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * IP Protocol of the test. When not provided, "TCP" is assumed.
     *
     * Generated from protobuf field <code>string protocol = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkString($var, True);
        $this->protocol = $var;

        return $this;
    }

    /**
     * Other projects that may be relevant for reachability analysis.
     * This is applicable to scenarios where a test can cross project boundaries.
     *
     * Generated from protobuf field <code>repeated string related_projects = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRelatedProjects()
    {
        return $this->related_projects;
    }

    /**
     * Other projects that may be relevant for reachability analysis.
     * This is applicable to scenarios where a test can cross project boundaries.
     *
     * Generated from protobuf field <code>repeated string related_projects = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRelatedProjects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->related_projects = $arr;

        return $this;
    }

    /**
     * Output only. The display name of a Connectivity Test.
     *
     * Generated from protobuf field <code>string display_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The display name of a Connectivity Test.
     *
     * Generated from protobuf field <code>string display_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Resource labels to represent user-provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Resource labels to represent user-provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. The time the test was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
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
     * Output only. The time the test was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the test's configuration was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time the test's configuration was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The reachability details of this test from the latest run.
     * The details are updated when creating a new test, updating an
     * existing test, or triggering a one-time rerun of an existing test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ReachabilityDetails reachability_details = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\NetworkManagement\V1\ReachabilityDetails|null
     */
    public function getReachabilityDetails()
    {
        return $this->reachability_details;
    }

    public function hasReachabilityDetails()
    {
        return isset($this->reachability_details);
    }

    public function clearReachabilityDetails()
    {
        unset($this->reachability_details);
    }

    /**
     * Output only. The reachability details of this test from the latest run.
     * The details are updated when creating a new test, updating an
     * existing test, or triggering a one-time rerun of an existing test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ReachabilityDetails reachability_details = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\NetworkManagement\V1\ReachabilityDetails $var
     * @return $this
     */
    public function setReachabilityDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ReachabilityDetails::class);
        $this->reachability_details = $var;

        return $this;
    }

    /**
     * Output only. The probing details of this test from the latest run, present
     * for applicable tests only. The details are updated when creating a new
     * test, updating an existing test, or triggering a one-time rerun of an
     * existing test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails probing_details = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\NetworkManagement\V1\ProbingDetails|null
     */
    public function getProbingDetails()
    {
        return $this->probing_details;
    }

    public function hasProbingDetails()
    {
        return isset($this->probing_details);
    }

    public function clearProbingDetails()
    {
        unset($this->probing_details);
    }

    /**
     * Output only. The probing details of this test from the latest run, present
     * for applicable tests only. The details are updated when creating a new
     * test, updating an existing test, or triggering a one-time rerun of an
     * existing test.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails probing_details = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\NetworkManagement\V1\ProbingDetails $var
     * @return $this
     */
    public function setProbingDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ProbingDetails::class);
        $this->probing_details = $var;

        return $this;
    }

    /**
     * Whether the test should skip firewall checking.
     * If not provided, we assume false.
     *
     * Generated from protobuf field <code>bool bypass_firewall_checks = 17;</code>
     * @return bool
     */
    public function getBypassFirewallChecks()
    {
        return $this->bypass_firewall_checks;
    }

    /**
     * Whether the test should skip firewall checking.
     * If not provided, we assume false.
     *
     * Generated from protobuf field <code>bool bypass_firewall_checks = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setBypassFirewallChecks($var)
    {
        GPBUtil::checkBool($var);
        $this->bypass_firewall_checks = $var;

        return $this;
    }

}

