<?php

// This file was auto-generated from sdk-root/src/data/acm-pca/2017-08-22/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2017-08-22', 'endpointPrefix' => 'acm-pca', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'ACM-PCA', 'serviceFullName' => 'AWS Certificate Manager Private Certificate Authority', 'serviceId' => 'ACM PCA', 'signatureVersion' => 'v4', 'targetPrefix' => 'ACMPrivateCA', 'uid' => 'acm-pca-2017-08-22'], 'operations' => ['CreateCertificateAuthority' => ['name' => 'CreateCertificateAuthority', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateCertificateAuthorityRequest'], 'output' => ['shape' => 'CreateCertificateAuthorityResponse'], 'errors' => [['shape' => 'InvalidArgsException'], ['shape' => 'InvalidPolicyException'], ['shape' => 'LimitExceededException']], 'idempotent' => \true], 'CreateCertificateAuthorityAuditReport' => ['name' => 'CreateCertificateAuthorityAuditReport', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateCertificateAuthorityAuditReportRequest'], 'output' => ['shape' => 'CreateCertificateAuthorityAuditReportResponse'], 'errors' => [['shape' => 'RequestInProgressException'], ['shape' => 'RequestFailedException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidArgsException'], ['shape' => 'InvalidStateException']], 'idempotent' => \true], 'DeleteCertificateAuthority' => ['name' => 'DeleteCertificateAuthority', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteCertificateAuthorityRequest'], 'errors' => [['shape' => 'ConcurrentModificationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidStateException']]], 'DescribeCertificateAuthority' => ['name' => 'DescribeCertificateAuthority', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeCertificateAuthorityRequest'], 'output' => ['shape' => 'DescribeCertificateAuthorityResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException']]], 'DescribeCertificateAuthorityAuditReport' => ['name' => 'DescribeCertificateAuthorityAuditReport', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeCertificateAuthorityAuditReportRequest'], 'output' => ['shape' => 'DescribeCertificateAuthorityAuditReportResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidArgsException']]], 'GetCertificate' => ['name' => 'GetCertificate', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetCertificateRequest'], 'output' => ['shape' => 'GetCertificateResponse'], 'errors' => [['shape' => 'RequestInProgressException'], ['shape' => 'RequestFailedException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidStateException']]], 'GetCertificateAuthorityCertificate' => ['name' => 'GetCertificateAuthorityCertificate', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetCertificateAuthorityCertificateRequest'], 'output' => ['shape' => 'GetCertificateAuthorityCertificateResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidStateException'], ['shape' => 'InvalidArnException']]], 'GetCertificateAuthorityCsr' => ['name' => 'GetCertificateAuthorityCsr', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetCertificateAuthorityCsrRequest'], 'output' => ['shape' => 'GetCertificateAuthorityCsrResponse'], 'errors' => [['shape' => 'RequestInProgressException'], ['shape' => 'RequestFailedException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidStateException']]], 'ImportCertificateAuthorityCertificate' => ['name' => 'ImportCertificateAuthorityCertificate', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ImportCertificateAuthorityCertificateRequest'], 'errors' => [['shape' => 'ConcurrentModificationException'], ['shape' => 'RequestInProgressException'], ['shape' => 'RequestFailedException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidStateException'], ['shape' => 'MalformedCertificateException'], ['shape' => 'CertificateMismatchException']]], 'IssueCertificate' => ['name' => 'IssueCertificate', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'IssueCertificateRequest'], 'output' => ['shape' => 'IssueCertificateResponse'], 'errors' => [['shape' => 'LimitExceededException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidStateException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidArgsException'], ['shape' => 'MalformedCSRException']], 'idempotent' => \true], 'ListCertificateAuthorities' => ['name' => 'ListCertificateAuthorities', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListCertificateAuthoritiesRequest'], 'output' => ['shape' => 'ListCertificateAuthoritiesResponse'], 'errors' => [['shape' => 'InvalidNextTokenException']]], 'ListTags' => ['name' => 'ListTags', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListTagsRequest'], 'output' => ['shape' => 'ListTagsResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException']]], 'RestoreCertificateAuthority' => ['name' => 'RestoreCertificateAuthority', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'RestoreCertificateAuthorityRequest'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidStateException'], ['shape' => 'InvalidArnException']]], 'RevokeCertificate' => ['name' => 'RevokeCertificate', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'RevokeCertificateRequest'], 'errors' => [['shape' => 'ConcurrentModificationException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidStateException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'RequestAlreadyProcessedException'], ['shape' => 'RequestInProgressException'], ['shape' => 'RequestFailedException']]], 'TagCertificateAuthority' => ['name' => 'TagCertificateAuthority', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'TagCertificateAuthorityRequest'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidStateException'], ['shape' => 'InvalidTagException'], ['shape' => 'TooManyTagsException']]], 'UntagCertificateAuthority' => ['name' => 'UntagCertificateAuthority', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UntagCertificateAuthorityRequest'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidStateException'], ['shape' => 'InvalidTagException']]], 'UpdateCertificateAuthority' => ['name' => 'UpdateCertificateAuthority', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateCertificateAuthorityRequest'], 'errors' => [['shape' => 'ConcurrentModificationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidArgsException'], ['shape' => 'InvalidArnException'], ['shape' => 'InvalidStateException'], ['shape' => 'InvalidPolicyException']]]], 'shapes' => ['ASN1Subject' => ['type' => 'structure', 'members' => ['Country' => ['shape' => 'CountryCodeString'], 'Organization' => ['shape' => 'String64'], 'OrganizationalUnit' => ['shape' => 'String64'], 'DistinguishedNameQualifier' => ['shape' => 'DistinguishedNameQualifierString'], 'State' => ['shape' => 'String128'], 'CommonName' => ['shape' => 'String64'], 'SerialNumber' => ['shape' => 'String64'], 'Locality' => ['shape' => 'String128'], 'Title' => ['shape' => 'String64'], 'Surname' => ['shape' => 'String40'], 'GivenName' => ['shape' => 'String16'], 'Initials' => ['shape' => 'String5'], 'Pseudonym' => ['shape' => 'String128'], 'GenerationQualifier' => ['shape' => 'String3']]], 'Arn' => ['type' => 'string', 'max' => 200, 'min' => 5, 'pattern' => 'arn:[\\w+=/,.@-]+:[\\w+=/,.@-]+:[\\w+=/,.@-]*:[0-9]+:[\\w+=,.@-]+(/[\\w+=/,.@-]+)*'], 'AuditReportId' => ['type' => 'string', 'max' => 36, 'min' => 36, 'pattern' => '[a-z0-9]{8}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{12}'], 'AuditReportResponseFormat' => ['type' => 'string', 'enum' => ['JSON', 'CSV']], 'AuditReportStatus' => ['type' => 'string', 'enum' => ['CREATING', 'SUCCESS', 'FAILED']], 'Boolean' => ['type' => 'boolean'], 'CertificateAuthorities' => ['type' => 'list', 'member' => ['shape' => 'CertificateAuthority']], 'CertificateAuthority' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => 'Arn'], 'CreatedAt' => ['shape' => 'TStamp'], 'LastStateChangeAt' => ['shape' => 'TStamp'], 'Type' => ['shape' => 'CertificateAuthorityType'], 'Serial' => ['shape' => 'String'], 'Status' => ['shape' => 'CertificateAuthorityStatus'], 'NotBefore' => ['shape' => 'TStamp'], 'NotAfter' => ['shape' => 'TStamp'], 'FailureReason' => ['shape' => 'FailureReason'], 'CertificateAuthorityConfiguration' => ['shape' => 'CertificateAuthorityConfiguration'], 'RevocationConfiguration' => ['shape' => 'RevocationConfiguration'], 'RestorableUntil' => ['shape' => 'TStamp']]], 'CertificateAuthorityConfiguration' => ['type' => 'structure', 'required' => ['KeyAlgorithm', 'SigningAlgorithm', 'Subject'], 'members' => ['KeyAlgorithm' => ['shape' => 'KeyAlgorithm'], 'SigningAlgorithm' => ['shape' => 'SigningAlgorithm'], 'Subject' => ['shape' => 'ASN1Subject']]], 'CertificateAuthorityStatus' => ['type' => 'string', 'enum' => ['CREATING', 'PENDING_CERTIFICATE', 'ACTIVE', 'DELETED', 'DISABLED', 'EXPIRED', 'FAILED']], 'CertificateAuthorityType' => ['type' => 'string', 'enum' => ['SUBORDINATE']], 'CertificateBody' => ['type' => 'string'], 'CertificateBodyBlob' => ['type' => 'blob', 'max' => 32768, 'min' => 1], 'CertificateChain' => ['type' => 'string'], 'CertificateChainBlob' => ['type' => 'blob', 'max' => 2097152, 'min' => 0], 'CertificateMismatchException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'ConcurrentModificationException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'CountryCodeString' => ['type' => 'string', 'pattern' => '[A-Za-z]{2}'], 'CreateCertificateAuthorityAuditReportRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn', 'S3BucketName', 'AuditReportResponseFormat'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'S3BucketName' => ['shape' => 'String'], 'AuditReportResponseFormat' => ['shape' => 'AuditReportResponseFormat']]], 'CreateCertificateAuthorityAuditReportResponse' => ['type' => 'structure', 'members' => ['AuditReportId' => ['shape' => 'AuditReportId'], 'S3Key' => ['shape' => 'String']]], 'CreateCertificateAuthorityRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityConfiguration', 'CertificateAuthorityType'], 'members' => ['CertificateAuthorityConfiguration' => ['shape' => 'CertificateAuthorityConfiguration'], 'RevocationConfiguration' => ['shape' => 'RevocationConfiguration'], 'CertificateAuthorityType' => ['shape' => 'CertificateAuthorityType'], 'IdempotencyToken' => ['shape' => 'IdempotencyToken']]], 'CreateCertificateAuthorityResponse' => ['type' => 'structure', 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn']]], 'CrlConfiguration' => ['type' => 'structure', 'required' => ['Enabled'], 'members' => ['Enabled' => ['shape' => 'Boolean', 'box' => \true], 'ExpirationInDays' => ['shape' => 'Integer1To5000', 'box' => \true], 'CustomCname' => ['shape' => 'String253'], 'S3BucketName' => ['shape' => 'String3To255']]], 'CsrBlob' => ['type' => 'blob', 'max' => 32768, 'min' => 1], 'CsrBody' => ['type' => 'string'], 'DeleteCertificateAuthorityRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'PermanentDeletionTimeInDays' => ['shape' => 'PermanentDeletionTimeInDays']]], 'DescribeCertificateAuthorityAuditReportRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn', 'AuditReportId'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'AuditReportId' => ['shape' => 'AuditReportId']]], 'DescribeCertificateAuthorityAuditReportResponse' => ['type' => 'structure', 'members' => ['AuditReportStatus' => ['shape' => 'AuditReportStatus'], 'S3BucketName' => ['shape' => 'String'], 'S3Key' => ['shape' => 'String'], 'CreatedAt' => ['shape' => 'TStamp']]], 'DescribeCertificateAuthorityRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn']]], 'DescribeCertificateAuthorityResponse' => ['type' => 'structure', 'members' => ['CertificateAuthority' => ['shape' => 'CertificateAuthority']]], 'DistinguishedNameQualifierString' => ['type' => 'string', 'max' => 64, 'min' => 0, 'pattern' => '[a-zA-Z0-9\'()+-.?:/= ]*'], 'FailureReason' => ['type' => 'string', 'enum' => ['REQUEST_TIMED_OUT', 'UNSUPPORTED_ALGORITHM', 'OTHER']], 'GetCertificateAuthorityCertificateRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn']]], 'GetCertificateAuthorityCertificateResponse' => ['type' => 'structure', 'members' => ['Certificate' => ['shape' => 'CertificateBody'], 'CertificateChain' => ['shape' => 'CertificateChain']]], 'GetCertificateAuthorityCsrRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn']]], 'GetCertificateAuthorityCsrResponse' => ['type' => 'structure', 'members' => ['Csr' => ['shape' => 'CsrBody']]], 'GetCertificateRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn', 'CertificateArn'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'CertificateArn' => ['shape' => 'Arn']]], 'GetCertificateResponse' => ['type' => 'structure', 'members' => ['Certificate' => ['shape' => 'CertificateBody'], 'CertificateChain' => ['shape' => 'CertificateChain']]], 'IdempotencyToken' => ['type' => 'string', 'max' => 36, 'min' => 1, 'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]*'], 'ImportCertificateAuthorityCertificateRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn', 'Certificate', 'CertificateChain'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'Certificate' => ['shape' => 'CertificateBodyBlob'], 'CertificateChain' => ['shape' => 'CertificateChainBlob']]], 'Integer1To5000' => ['type' => 'integer', 'max' => 5000, 'min' => 1], 'InvalidArgsException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'InvalidArnException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'InvalidNextTokenException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'InvalidPolicyException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'InvalidStateException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'InvalidTagException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'IssueCertificateRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn', 'Csr', 'SigningAlgorithm', 'Validity'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'Csr' => ['shape' => 'CsrBlob'], 'SigningAlgorithm' => ['shape' => 'SigningAlgorithm'], 'Validity' => ['shape' => 'Validity'], 'IdempotencyToken' => ['shape' => 'IdempotencyToken']]], 'IssueCertificateResponse' => ['type' => 'structure', 'members' => ['CertificateArn' => ['shape' => 'Arn']]], 'KeyAlgorithm' => ['type' => 'string', 'enum' => ['RSA_2048', 'RSA_4096', 'EC_prime256v1', 'EC_secp384r1']], 'LimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'ListCertificateAuthoritiesRequest' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResults']]], 'ListCertificateAuthoritiesResponse' => ['type' => 'structure', 'members' => ['CertificateAuthorities' => ['shape' => 'CertificateAuthorities'], 'NextToken' => ['shape' => 'NextToken']]], 'ListTagsRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResults']]], 'ListTagsResponse' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'TagList'], 'NextToken' => ['shape' => 'NextToken']]], 'MalformedCSRException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'MalformedCertificateException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'MaxResults' => ['type' => 'integer', 'max' => 1000, 'min' => 1], 'NextToken' => ['type' => 'string', 'max' => 500, 'min' => 1], 'PermanentDeletionTimeInDays' => ['type' => 'integer', 'max' => 30, 'min' => 7], 'PositiveLong' => ['type' => 'long', 'min' => 1], 'RequestAlreadyProcessedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'RequestFailedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'RequestInProgressException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'RestoreCertificateAuthorityRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn']]], 'RevocationConfiguration' => ['type' => 'structure', 'members' => ['CrlConfiguration' => ['shape' => 'CrlConfiguration']]], 'RevocationReason' => ['type' => 'string', 'enum' => ['UNSPECIFIED', 'KEY_COMPROMISE', 'CERTIFICATE_AUTHORITY_COMPROMISE', 'AFFILIATION_CHANGED', 'SUPERSEDED', 'CESSATION_OF_OPERATION', 'PRIVILEGE_WITHDRAWN', 'A_A_COMPROMISE']], 'RevokeCertificateRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn', 'CertificateSerial', 'RevocationReason'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'CertificateSerial' => ['shape' => 'String128'], 'RevocationReason' => ['shape' => 'RevocationReason']]], 'SigningAlgorithm' => ['type' => 'string', 'enum' => ['SHA256WITHECDSA', 'SHA384WITHECDSA', 'SHA512WITHECDSA', 'SHA256WITHRSA', 'SHA384WITHRSA', 'SHA512WITHRSA']], 'String' => ['type' => 'string'], 'String128' => ['type' => 'string', 'max' => 128, 'min' => 0], 'String16' => ['type' => 'string', 'max' => 16, 'min' => 0], 'String253' => ['type' => 'string', 'max' => 253, 'min' => 0], 'String3' => ['type' => 'string', 'max' => 3, 'min' => 0], 'String3To255' => ['type' => 'string', 'max' => 255, 'min' => 3], 'String40' => ['type' => 'string', 'max' => 40, 'min' => 0], 'String5' => ['type' => 'string', 'max' => 5, 'min' => 0], 'String64' => ['type' => 'string', 'max' => 64, 'min' => 0], 'TStamp' => ['type' => 'timestamp'], 'Tag' => ['type' => 'structure', 'required' => ['Key'], 'members' => ['Key' => ['shape' => 'TagKey'], 'Value' => ['shape' => 'TagValue']]], 'TagCertificateAuthorityRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn', 'Tags'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'Tags' => ['shape' => 'TagList']]], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[\\p{L}\\p{Z}\\p{N}_.:\\/=+\\-@]*'], 'TagList' => ['type' => 'list', 'member' => ['shape' => 'Tag'], 'max' => 50, 'min' => 1], 'TagValue' => ['type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '[\\p{L}\\p{Z}\\p{N}_.:\\/=+\\-@]*'], 'TooManyTagsException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'exception' => \true], 'UntagCertificateAuthorityRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn', 'Tags'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'Tags' => ['shape' => 'TagList']]], 'UpdateCertificateAuthorityRequest' => ['type' => 'structure', 'required' => ['CertificateAuthorityArn'], 'members' => ['CertificateAuthorityArn' => ['shape' => 'Arn'], 'RevocationConfiguration' => ['shape' => 'RevocationConfiguration'], 'Status' => ['shape' => 'CertificateAuthorityStatus']]], 'Validity' => ['type' => 'structure', 'required' => ['Value', 'Type'], 'members' => ['Value' => ['shape' => 'PositiveLong', 'box' => \true], 'Type' => ['shape' => 'ValidityPeriodType']]], 'ValidityPeriodType' => ['type' => 'string', 'enum' => ['END_DATE', 'ABSOLUTE', 'DAYS', 'MONTHS', 'YEARS']]]];
