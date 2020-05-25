<?php

// This file was auto-generated from sdk-root/src/data/chime/2018-05-01/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-05-01', 'endpointPrefix' => 'chime', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Chime', 'serviceId' => 'Chime', 'signatureVersion' => 'v4', 'uid' => 'chime-2018-05-01'], 'operations' => ['BatchSuspendUser' => ['name' => 'BatchSuspendUser', 'http' => ['method' => 'POST', 'requestUri' => '/console/accounts/{accountId}/users?operation=suspend', 'responseCode' => 200], 'input' => ['shape' => 'BatchSuspendUserRequest'], 'output' => ['shape' => 'BatchSuspendUserResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'BatchUnsuspendUser' => ['name' => 'BatchUnsuspendUser', 'http' => ['method' => 'POST', 'requestUri' => '/console/accounts/{accountId}/users?operation=unsuspend', 'responseCode' => 200], 'input' => ['shape' => 'BatchUnsuspendUserRequest'], 'output' => ['shape' => 'BatchUnsuspendUserResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'BatchUpdateUser' => ['name' => 'BatchUpdateUser', 'http' => ['method' => 'POST', 'requestUri' => '/console/accounts/{accountId}/users', 'responseCode' => 200], 'input' => ['shape' => 'BatchUpdateUserRequest'], 'output' => ['shape' => 'BatchUpdateUserResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'CreateAccount' => ['name' => 'CreateAccount', 'http' => ['method' => 'POST', 'requestUri' => '/console/accounts', 'responseCode' => 201], 'input' => ['shape' => 'CreateAccountRequest'], 'output' => ['shape' => 'CreateAccountResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'DeleteAccount' => ['name' => 'DeleteAccount', 'http' => ['method' => 'DELETE', 'requestUri' => '/console/accounts/{accountId}', 'responseCode' => 204], 'input' => ['shape' => 'DeleteAccountRequest'], 'output' => ['shape' => 'DeleteAccountResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'UnprocessableEntityException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'GetAccount' => ['name' => 'GetAccount', 'http' => ['method' => 'GET', 'requestUri' => '/console/accounts/{accountId}'], 'input' => ['shape' => 'GetAccountRequest'], 'output' => ['shape' => 'GetAccountResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'GetAccountSettings' => ['name' => 'GetAccountSettings', 'http' => ['method' => 'GET', 'requestUri' => '/console/accounts/{accountId}/settings'], 'input' => ['shape' => 'GetAccountSettingsRequest'], 'output' => ['shape' => 'GetAccountSettingsResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'GetUser' => ['name' => 'GetUser', 'http' => ['method' => 'GET', 'requestUri' => '/console/accounts/{accountId}/users/{userId}', 'responseCode' => 200], 'input' => ['shape' => 'GetUserRequest'], 'output' => ['shape' => 'GetUserResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'InviteUsers' => ['name' => 'InviteUsers', 'http' => ['method' => 'POST', 'requestUri' => '/console/accounts/{accountId}/users?operation=add', 'responseCode' => 201], 'input' => ['shape' => 'InviteUsersRequest'], 'output' => ['shape' => 'InviteUsersResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'ListAccounts' => ['name' => 'ListAccounts', 'http' => ['method' => 'GET', 'requestUri' => '/console/accounts'], 'input' => ['shape' => 'ListAccountsRequest'], 'output' => ['shape' => 'ListAccountsResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'ListUsers' => ['name' => 'ListUsers', 'http' => ['method' => 'GET', 'requestUri' => '/console/accounts/{accountId}/users', 'responseCode' => 200], 'input' => ['shape' => 'ListUsersRequest'], 'output' => ['shape' => 'ListUsersResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'LogoutUser' => ['name' => 'LogoutUser', 'http' => ['method' => 'POST', 'requestUri' => '/console/accounts/{accountId}/users/{userId}?operation=logout', 'responseCode' => 204], 'input' => ['shape' => 'LogoutUserRequest'], 'output' => ['shape' => 'LogoutUserResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'ResetPersonalPIN' => ['name' => 'ResetPersonalPIN', 'http' => ['method' => 'POST', 'requestUri' => '/console/accounts/{accountId}/users/{userId}?operation=reset-personal-pin', 'responseCode' => 200], 'input' => ['shape' => 'ResetPersonalPINRequest'], 'output' => ['shape' => 'ResetPersonalPINResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'UpdateAccount' => ['name' => 'UpdateAccount', 'http' => ['method' => 'POST', 'requestUri' => '/console/accounts/{accountId}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateAccountRequest'], 'output' => ['shape' => 'UpdateAccountResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'UpdateAccountSettings' => ['name' => 'UpdateAccountSettings', 'http' => ['method' => 'PUT', 'requestUri' => '/console/accounts/{accountId}/settings', 'responseCode' => 204], 'input' => ['shape' => 'UpdateAccountSettingsRequest'], 'output' => ['shape' => 'UpdateAccountSettingsResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'BadRequestException'], ['shape' => 'ForbiddenException'], ['shape' => 'ConflictException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]], 'UpdateUser' => ['name' => 'UpdateUser', 'http' => ['method' => 'POST', 'requestUri' => '/console/accounts/{accountId}/users/{userId}', 'responseCode' => 200], 'input' => ['shape' => 'UpdateUserRequest'], 'output' => ['shape' => 'UpdateUserResponse'], 'errors' => [['shape' => 'UnauthorizedClientException'], ['shape' => 'NotFoundException'], ['shape' => 'ForbiddenException'], ['shape' => 'BadRequestException'], ['shape' => 'ThrottledClientException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceFailureException']]]], 'shapes' => ['Account' => ['type' => 'structure', 'required' => ['AwsAccountId', 'AccountId', 'Name'], 'members' => ['AwsAccountId' => ['shape' => 'String'], 'AccountId' => ['shape' => 'String'], 'Name' => ['shape' => 'String'], 'AccountType' => ['shape' => 'AccountType'], 'CreatedTimestamp' => ['shape' => 'Iso8601Timestamp'], 'DefaultLicense' => ['shape' => 'License'], 'SupportedLicenses' => ['shape' => 'LicenseList']]], 'AccountList' => ['type' => 'list', 'member' => ['shape' => 'Account']], 'AccountName' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '.*\\S.*'], 'AccountSettings' => ['type' => 'structure', 'members' => ['DisableRemoteControl' => ['shape' => 'Boolean'], 'EnableDialOut' => ['shape' => 'Boolean']]], 'AccountType' => ['type' => 'string', 'enum' => ['Team', 'EnterpriseDirectory', 'EnterpriseLWA', 'EnterpriseOIDC']], 'BadRequestException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'BatchSuspendUserRequest' => ['type' => 'structure', 'required' => ['AccountId', 'UserIdList'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'UserIdList' => ['shape' => 'UserIdList']]], 'BatchSuspendUserResponse' => ['type' => 'structure', 'members' => ['UserErrors' => ['shape' => 'UserErrorList']]], 'BatchUnsuspendUserRequest' => ['type' => 'structure', 'required' => ['AccountId', 'UserIdList'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'UserIdList' => ['shape' => 'UserIdList']]], 'BatchUnsuspendUserResponse' => ['type' => 'structure', 'members' => ['UserErrors' => ['shape' => 'UserErrorList']]], 'BatchUpdateUserRequest' => ['type' => 'structure', 'required' => ['AccountId', 'UpdateUserRequestItems'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'UpdateUserRequestItems' => ['shape' => 'UpdateUserRequestItemList']]], 'BatchUpdateUserResponse' => ['type' => 'structure', 'members' => ['UserErrors' => ['shape' => 'UserErrorList']]], 'Boolean' => ['type' => 'boolean'], 'ConflictException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 409], 'exception' => \true], 'CreateAccountRequest' => ['type' => 'structure', 'required' => ['Name'], 'members' => ['Name' => ['shape' => 'AccountName']]], 'CreateAccountResponse' => ['type' => 'structure', 'members' => ['Account' => ['shape' => 'Account']]], 'DeleteAccountRequest' => ['type' => 'structure', 'required' => ['AccountId'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId']]], 'DeleteAccountResponse' => ['type' => 'structure', 'members' => []], 'EmailAddress' => ['type' => 'string', 'pattern' => '.+@.+\\..+', 'sensitive' => \true], 'EmailStatus' => ['type' => 'string', 'enum' => ['NotSent', 'Sent', 'Failed']], 'ErrorCode' => ['type' => 'string', 'enum' => ['Unauthorized', 'Forbidden', 'NotFound', 'BadRequest', 'Conflict', 'ServiceFailure', 'ServiceUnavailable', 'Unprocessable', 'Throttled', 'PreconditionFailed']], 'ForbiddenException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 403], 'exception' => \true], 'GetAccountRequest' => ['type' => 'structure', 'required' => ['AccountId'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId']]], 'GetAccountResponse' => ['type' => 'structure', 'members' => ['Account' => ['shape' => 'Account']]], 'GetAccountSettingsRequest' => ['type' => 'structure', 'required' => ['AccountId'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId']]], 'GetAccountSettingsResponse' => ['type' => 'structure', 'members' => ['AccountSettings' => ['shape' => 'AccountSettings']]], 'GetUserRequest' => ['type' => 'structure', 'required' => ['AccountId', 'UserId'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'UserId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'userId']]], 'GetUserResponse' => ['type' => 'structure', 'members' => ['User' => ['shape' => 'User']]], 'Invite' => ['type' => 'structure', 'members' => ['InviteId' => ['shape' => 'String'], 'Status' => ['shape' => 'InviteStatus'], 'EmailAddress' => ['shape' => 'EmailAddress'], 'EmailStatus' => ['shape' => 'EmailStatus']]], 'InviteList' => ['type' => 'list', 'member' => ['shape' => 'Invite']], 'InviteStatus' => ['type' => 'string', 'enum' => ['Pending', 'Accepted', 'Failed']], 'InviteUsersRequest' => ['type' => 'structure', 'required' => ['AccountId', 'UserEmailList'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'UserEmailList' => ['shape' => 'UserEmailList']]], 'InviteUsersResponse' => ['type' => 'structure', 'members' => ['Invites' => ['shape' => 'InviteList']]], 'Iso8601Timestamp' => ['type' => 'timestamp', 'timestampFormat' => 'iso8601'], 'License' => ['type' => 'string', 'enum' => ['Basic', 'Plus', 'Pro', 'ProTrial']], 'LicenseList' => ['type' => 'list', 'member' => ['shape' => 'License']], 'ListAccountsRequest' => ['type' => 'structure', 'members' => ['Name' => ['shape' => 'AccountName', 'location' => 'querystring', 'locationName' => 'name'], 'UserEmail' => ['shape' => 'EmailAddress', 'location' => 'querystring', 'locationName' => 'user-email'], 'NextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'next-token'], 'MaxResults' => ['shape' => 'ProfileServiceMaxResults', 'location' => 'querystring', 'locationName' => 'max-results']]], 'ListAccountsResponse' => ['type' => 'structure', 'members' => ['Accounts' => ['shape' => 'AccountList'], 'NextToken' => ['shape' => 'String']]], 'ListUsersRequest' => ['type' => 'structure', 'required' => ['AccountId'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'UserEmail' => ['shape' => 'EmailAddress', 'location' => 'querystring', 'locationName' => 'user-email'], 'MaxResults' => ['shape' => 'ProfileServiceMaxResults', 'location' => 'querystring', 'locationName' => 'max-results'], 'NextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'next-token']]], 'ListUsersResponse' => ['type' => 'structure', 'members' => ['Users' => ['shape' => 'UserList'], 'NextToken' => ['shape' => 'String']]], 'LogoutUserRequest' => ['type' => 'structure', 'required' => ['AccountId', 'UserId'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'UserId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'userId']]], 'LogoutUserResponse' => ['type' => 'structure', 'members' => []], 'NonEmptyString' => ['type' => 'string', 'pattern' => '.*\\S.*'], 'NotFoundException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'ProfileServiceMaxResults' => ['type' => 'integer', 'max' => 200, 'min' => 1], 'RegistrationStatus' => ['type' => 'string', 'enum' => ['Unregistered', 'Registered', 'Suspended']], 'ResetPersonalPINRequest' => ['type' => 'structure', 'required' => ['AccountId', 'UserId'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'UserId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'userId']]], 'ResetPersonalPINResponse' => ['type' => 'structure', 'members' => ['User' => ['shape' => 'User']]], 'SensitiveString' => ['type' => 'string', 'sensitive' => \true], 'ServiceFailureException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 500], 'exception' => \true, 'fault' => \true], 'ServiceUnavailableException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 503], 'exception' => \true, 'fault' => \true], 'String' => ['type' => 'string'], 'ThrottledClientException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 429], 'exception' => \true], 'UnauthorizedClientException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 401], 'exception' => \true], 'UnprocessableEntityException' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'ErrorCode'], 'Message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 422], 'exception' => \true], 'UpdateAccountRequest' => ['type' => 'structure', 'required' => ['AccountId'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'Name' => ['shape' => 'AccountName']]], 'UpdateAccountResponse' => ['type' => 'structure', 'members' => ['Account' => ['shape' => 'Account']]], 'UpdateAccountSettingsRequest' => ['type' => 'structure', 'required' => ['AccountId', 'AccountSettings'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'AccountSettings' => ['shape' => 'AccountSettings']]], 'UpdateAccountSettingsResponse' => ['type' => 'structure', 'members' => []], 'UpdateUserRequest' => ['type' => 'structure', 'required' => ['AccountId', 'UserId'], 'members' => ['AccountId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'accountId'], 'UserId' => ['shape' => 'NonEmptyString', 'location' => 'uri', 'locationName' => 'userId'], 'LicenseType' => ['shape' => 'License']]], 'UpdateUserRequestItem' => ['type' => 'structure', 'required' => ['UserId'], 'members' => ['UserId' => ['shape' => 'NonEmptyString'], 'LicenseType' => ['shape' => 'License']]], 'UpdateUserRequestItemList' => ['type' => 'list', 'member' => ['shape' => 'UpdateUserRequestItem'], 'max' => 20], 'UpdateUserResponse' => ['type' => 'structure', 'members' => ['User' => ['shape' => 'User']]], 'User' => ['type' => 'structure', 'required' => ['UserId'], 'members' => ['UserId' => ['shape' => 'String'], 'AccountId' => ['shape' => 'String'], 'PrimaryEmail' => ['shape' => 'EmailAddress'], 'DisplayName' => ['shape' => 'SensitiveString'], 'LicenseType' => ['shape' => 'License'], 'UserRegistrationStatus' => ['shape' => 'RegistrationStatus'], 'UserInvitationStatus' => ['shape' => 'InviteStatus'], 'RegisteredOn' => ['shape' => 'Iso8601Timestamp'], 'InvitedOn' => ['shape' => 'Iso8601Timestamp'], 'PersonalPIN' => ['shape' => 'String']]], 'UserEmailList' => ['type' => 'list', 'member' => ['shape' => 'EmailAddress'], 'max' => 50], 'UserError' => ['type' => 'structure', 'members' => ['UserId' => ['shape' => 'NonEmptyString'], 'ErrorCode' => ['shape' => 'ErrorCode'], 'ErrorMessage' => ['shape' => 'String']]], 'UserErrorList' => ['type' => 'list', 'member' => ['shape' => 'UserError']], 'UserIdList' => ['type' => 'list', 'member' => ['shape' => 'NonEmptyString'], 'max' => 50], 'UserList' => ['type' => 'list', 'member' => ['shape' => 'User']]]];
