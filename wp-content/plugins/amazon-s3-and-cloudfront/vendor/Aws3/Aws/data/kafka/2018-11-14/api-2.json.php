<?php

// This file was auto-generated from sdk-root/src/data/kafka/2018-11-14/api-2.json
return ['metadata' => ['apiVersion' => '2018-11-14', 'endpointPrefix' => 'kafka', 'signingName' => 'kafka', 'serviceFullName' => 'Managed Streaming for Kafka', 'serviceAbbreviation' => 'Kafka', 'serviceId' => 'Kafka', 'protocol' => 'rest-json', 'jsonVersion' => '1.1', 'uid' => 'kafka-2018-11-14', 'signatureVersion' => 'v4'], 'operations' => ['CreateCluster' => ['name' => 'CreateCluster', 'http' => ['method' => 'POST', 'requestUri' => '/v1/clusters', 'responseCode' => 200], 'input' => ['shape' => 'CreateClusterRequest'], 'output' => ['shape' => 'CreateClusterResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'UnauthorizedException'], ['shape' => 'ForbiddenException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'TooManyRequestsException'], ['shape' => 'ConflictException']]], 'DeleteCluster' => ['name' => 'DeleteCluster', 'http' => ['method' => 'DELETE', 'requestUri' => '/v1/clusters/{clusterArn}', 'responseCode' => 200], 'input' => ['shape' => 'DeleteClusterRequest'], 'output' => ['shape' => 'DeleteClusterResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'DescribeCluster' => ['name' => 'DescribeCluster', 'http' => ['method' => 'GET', 'requestUri' => '/v1/clusters/{clusterArn}', 'responseCode' => 200], 'input' => ['shape' => 'DescribeClusterRequest'], 'output' => ['shape' => 'DescribeClusterResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]], 'GetBootstrapBrokers' => ['name' => 'GetBootstrapBrokers', 'http' => ['method' => 'GET', 'requestUri' => '/v1/clusters/{clusterArn}/bootstrap-brokers', 'responseCode' => 200], 'input' => ['shape' => 'GetBootstrapBrokersRequest'], 'output' => ['shape' => 'GetBootstrapBrokersResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ConflictException'], ['shape' => 'ForbiddenException']]], 'ListClusters' => ['name' => 'ListClusters', 'http' => ['method' => 'GET', 'requestUri' => '/v1/clusters', 'responseCode' => 200], 'input' => ['shape' => 'ListClustersRequest'], 'output' => ['shape' => 'ListClustersResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'UnauthorizedException'], ['shape' => 'ForbiddenException']]], 'ListNodes' => ['name' => 'ListNodes', 'http' => ['method' => 'GET', 'requestUri' => '/v1/clusters/{clusterArn}/nodes', 'responseCode' => 200], 'input' => ['shape' => 'ListNodesRequest'], 'output' => ['shape' => 'ListNodesResponse'], 'errors' => [['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'InternalServerErrorException'], ['shape' => 'ForbiddenException']]]], 'shapes' => ['BadRequestException' => ['type' => 'structure', 'members' => ['InvalidParameter' => ['shape' => '__string', 'locationName' => 'invalidParameter'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 400]], 'BrokerAZDistribution' => ['type' => 'string', 'enum' => ['DEFAULT']], 'BrokerNodeGroupInfo' => ['type' => 'structure', 'members' => ['BrokerAZDistribution' => ['shape' => 'BrokerAZDistribution', 'locationName' => 'brokerAZDistribution'], 'ClientSubnets' => ['shape' => '__listOf__string', 'locationName' => 'clientSubnets'], 'InstanceType' => ['shape' => '__stringMin5Max32', 'locationName' => 'instanceType'], 'SecurityGroups' => ['shape' => '__listOf__string', 'locationName' => 'securityGroups'], 'StorageInfo' => ['shape' => 'StorageInfo', 'locationName' => 'storageInfo']], 'required' => ['ClientSubnets', 'InstanceType']], 'BrokerNodeInfo' => ['type' => 'structure', 'members' => ['AttachedENIId' => ['shape' => '__string', 'locationName' => 'attachedENIId'], 'BrokerId' => ['shape' => '__double', 'locationName' => 'brokerId'], 'ClientSubnet' => ['shape' => '__string', 'locationName' => 'clientSubnet'], 'ClientVpcIpAddress' => ['shape' => '__string', 'locationName' => 'clientVpcIpAddress'], 'CurrentBrokerSoftwareInfo' => ['shape' => 'BrokerSoftwareInfo', 'locationName' => 'currentBrokerSoftwareInfo']]], 'BrokerSoftwareInfo' => ['type' => 'structure', 'members' => ['ConfigurationArn' => ['shape' => '__string', 'locationName' => 'configurationArn'], 'ConfigurationRevision' => ['shape' => '__string', 'locationName' => 'configurationRevision'], 'KafkaVersion' => ['shape' => '__string', 'locationName' => 'kafkaVersion']]], 'ClusterInfo' => ['type' => 'structure', 'members' => ['BrokerNodeGroupInfo' => ['shape' => 'BrokerNodeGroupInfo', 'locationName' => 'brokerNodeGroupInfo'], 'ClusterArn' => ['shape' => '__string', 'locationName' => 'clusterArn'], 'ClusterName' => ['shape' => '__string', 'locationName' => 'clusterName'], 'CreationTime' => ['shape' => '__timestampIso8601', 'locationName' => 'creationTime'], 'CurrentBrokerSoftwareInfo' => ['shape' => 'BrokerSoftwareInfo', 'locationName' => 'currentBrokerSoftwareInfo'], 'CurrentVersion' => ['shape' => '__string', 'locationName' => 'currentVersion'], 'EncryptionInfo' => ['shape' => 'EncryptionInfo', 'locationName' => 'encryptionInfo'], 'EnhancedMonitoring' => ['shape' => 'EnhancedMonitoring', 'locationName' => 'enhancedMonitoring'], 'NumberOfBrokerNodes' => ['shape' => '__integer', 'locationName' => 'numberOfBrokerNodes'], 'State' => ['shape' => 'ClusterState', 'locationName' => 'state'], 'ZookeeperConnectString' => ['shape' => '__string', 'locationName' => 'zookeeperConnectString']]], 'ClusterState' => ['type' => 'string', 'enum' => ['ACTIVE', 'CREATING', 'DELETING', 'FAILED']], 'ConflictException' => ['type' => 'structure', 'members' => ['InvalidParameter' => ['shape' => '__string', 'locationName' => 'invalidParameter'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 409]], 'CreateClusterRequest' => ['type' => 'structure', 'members' => ['BrokerNodeGroupInfo' => ['shape' => 'BrokerNodeGroupInfo', 'locationName' => 'brokerNodeGroupInfo'], 'ClusterName' => ['shape' => '__stringMin1Max64', 'locationName' => 'clusterName'], 'EncryptionInfo' => ['shape' => 'EncryptionInfo', 'locationName' => 'encryptionInfo'], 'EnhancedMonitoring' => ['shape' => 'EnhancedMonitoring', 'locationName' => 'enhancedMonitoring'], 'KafkaVersion' => ['shape' => '__stringMin1Max128', 'locationName' => 'kafkaVersion'], 'NumberOfBrokerNodes' => ['shape' => '__integerMin1Max15', 'locationName' => 'numberOfBrokerNodes']], 'required' => ['BrokerNodeGroupInfo', 'KafkaVersion', 'NumberOfBrokerNodes', 'ClusterName']], 'CreateClusterResponse' => ['type' => 'structure', 'members' => ['ClusterArn' => ['shape' => '__string', 'locationName' => 'clusterArn'], 'ClusterName' => ['shape' => '__string', 'locationName' => 'clusterName'], 'State' => ['shape' => 'ClusterState', 'locationName' => 'state']]], 'DeleteClusterRequest' => ['type' => 'structure', 'members' => ['ClusterArn' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'clusterArn'], 'CurrentVersion' => ['shape' => '__string', 'location' => 'querystring', 'locationName' => 'currentVersion']], 'required' => ['ClusterArn']], 'DeleteClusterResponse' => ['type' => 'structure', 'members' => ['ClusterArn' => ['shape' => '__string', 'locationName' => 'clusterArn'], 'State' => ['shape' => 'ClusterState', 'locationName' => 'state']]], 'DescribeClusterRequest' => ['type' => 'structure', 'members' => ['ClusterArn' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'clusterArn']], 'required' => ['ClusterArn']], 'DescribeClusterResponse' => ['type' => 'structure', 'members' => ['ClusterInfo' => ['shape' => 'ClusterInfo', 'locationName' => 'clusterInfo']]], 'EBSStorageInfo' => ['type' => 'structure', 'members' => ['VolumeSize' => ['shape' => '__integerMin1Max16384', 'locationName' => 'volumeSize']]], 'EncryptionAtRest' => ['type' => 'structure', 'members' => ['DataVolumeKMSKeyId' => ['shape' => '__string', 'locationName' => 'dataVolumeKMSKeyId']], 'required' => ['DataVolumeKMSKeyId']], 'EncryptionInfo' => ['type' => 'structure', 'members' => ['EncryptionAtRest' => ['shape' => 'EncryptionAtRest', 'locationName' => 'encryptionAtRest']]], 'EnhancedMonitoring' => ['type' => 'string', 'enum' => ['DEFAULT', 'PER_BROKER', 'PER_TOPIC_PER_BROKER']], 'Error' => ['type' => 'structure', 'members' => ['InvalidParameter' => ['shape' => '__string', 'locationName' => 'invalidParameter'], 'Message' => ['shape' => '__string', 'locationName' => 'message']]], 'ForbiddenException' => ['type' => 'structure', 'members' => ['InvalidParameter' => ['shape' => '__string', 'locationName' => 'invalidParameter'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 403]], 'GetBootstrapBrokersRequest' => ['type' => 'structure', 'members' => ['ClusterArn' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'clusterArn']], 'required' => ['ClusterArn']], 'GetBootstrapBrokersResponse' => ['type' => 'structure', 'members' => ['BootstrapBrokerString' => ['shape' => '__string', 'locationName' => 'bootstrapBrokerString']]], 'InternalServerErrorException' => ['type' => 'structure', 'members' => ['InvalidParameter' => ['shape' => '__string', 'locationName' => 'invalidParameter'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 500]], 'ListClustersRequest' => ['type' => 'structure', 'members' => ['ClusterNameFilter' => ['shape' => '__string', 'location' => 'querystring', 'locationName' => 'clusterNameFilter'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ListClustersResponse' => ['type' => 'structure', 'members' => ['ClusterInfoList' => ['shape' => '__listOfClusterInfo', 'locationName' => 'clusterInfoList'], 'NextToken' => ['shape' => '__string', 'locationName' => 'nextToken']]], 'ListNodesRequest' => ['type' => 'structure', 'members' => ['ClusterArn' => ['shape' => '__string', 'location' => 'uri', 'locationName' => 'clusterArn'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'NextToken' => ['shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken']], 'required' => ['ClusterArn']], 'ListNodesResponse' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => '__string', 'locationName' => 'nextToken'], 'NodeInfoList' => ['shape' => '__listOfNodeInfo', 'locationName' => 'nodeInfoList']]], 'MaxResults' => ['type' => 'integer', 'min' => 1, 'max' => 100], 'NodeInfo' => ['type' => 'structure', 'members' => ['AddedToClusterTime' => ['shape' => '__string', 'locationName' => 'addedToClusterTime'], 'BrokerNodeInfo' => ['shape' => 'BrokerNodeInfo', 'locationName' => 'brokerNodeInfo'], 'InstanceType' => ['shape' => '__string', 'locationName' => 'instanceType'], 'NodeARN' => ['shape' => '__string', 'locationName' => 'nodeARN'], 'NodeType' => ['shape' => 'NodeType', 'locationName' => 'nodeType'], 'ZookeeperNodeInfo' => ['shape' => 'ZookeeperNodeInfo', 'locationName' => 'zookeeperNodeInfo']]], 'NodeType' => ['type' => 'string', 'enum' => ['BROKER']], 'NotFoundException' => ['type' => 'structure', 'members' => ['InvalidParameter' => ['shape' => '__string', 'locationName' => 'invalidParameter'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 404]], 'ServiceUnavailableException' => ['type' => 'structure', 'members' => ['InvalidParameter' => ['shape' => '__string', 'locationName' => 'invalidParameter'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 503]], 'StorageInfo' => ['type' => 'structure', 'members' => ['EbsStorageInfo' => ['shape' => 'EBSStorageInfo', 'locationName' => 'ebsStorageInfo']]], 'TooManyRequestsException' => ['type' => 'structure', 'members' => ['InvalidParameter' => ['shape' => '__string', 'locationName' => 'invalidParameter'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 429]], 'UnauthorizedException' => ['type' => 'structure', 'members' => ['InvalidParameter' => ['shape' => '__string', 'locationName' => 'invalidParameter'], 'Message' => ['shape' => '__string', 'locationName' => 'message']], 'exception' => \true, 'error' => ['httpStatusCode' => 401]], 'ZookeeperNodeInfo' => ['type' => 'structure', 'members' => ['AttachedENIId' => ['shape' => '__string', 'locationName' => 'attachedENIId'], 'ClientVpcIpAddress' => ['shape' => '__string', 'locationName' => 'clientVpcIpAddress'], 'ZookeeperId' => ['shape' => '__double', 'locationName' => 'zookeeperId'], 'ZookeeperVersion' => ['shape' => '__string', 'locationName' => 'zookeeperVersion']]], '__boolean' => ['type' => 'boolean'], '__double' => ['type' => 'double'], '__integer' => ['type' => 'integer'], '__integerMin1Max15' => ['type' => 'integer', 'min' => 1, 'max' => 15], '__integerMin1Max16384' => ['type' => 'integer', 'min' => 1, 'max' => 16384], '__listOfClusterInfo' => ['type' => 'list', 'member' => ['shape' => 'ClusterInfo']], '__listOfNodeInfo' => ['type' => 'list', 'member' => ['shape' => 'NodeInfo']], '__listOf__string' => ['type' => 'list', 'member' => ['shape' => '__string']], '__long' => ['type' => 'long'], '__string' => ['type' => 'string'], '__stringMin1Max128' => ['type' => 'string', 'min' => 1, 'max' => 128], '__stringMin1Max64' => ['type' => 'string', 'min' => 1, 'max' => 64], '__stringMin5Max32' => ['type' => 'string', 'min' => 5, 'max' => 32], '__timestampIso8601' => ['type' => 'timestamp', 'timestampFormat' => 'iso8601'], '__timestampUnix' => ['type' => 'timestamp', 'timestampFormat' => 'unixTimestamp']]];
