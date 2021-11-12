<?php

namespace jamesedmonston\graphqlauthentication\models;

use craft\base\Model;

class Settings extends Model
{
    // Schemas
    public $permissionType = 'single';

    // Singular Schema
    public $schemaName = null;
    /** @deprecated */
    public $schemaId = null;
    public $allowRegistration = true;
    public $userGroup = null;
    public $siteId = null;
    public $entryQueries = null;
    public $entryMutations = null;
    public $assetQueries = null;
    public $assetMutations = null;

    // Multiple Schemas
    public $granularSchemas = [];

    // Tokens
    public $jwtExpiration = '30 minutes';
    public $jwtRefreshExpiration = '3 months';
    public $jwtSecretKey = null;
    public $sameSitePolicy = 'strict';

    // Field Restrictions
    public $fieldRestrictions = [];

    // Social
    public $googleClientId = null;
    public $allowedGoogleDomains = null;

    public $facebookAppId = null;
    public $facebookAppSecret = null;
    public $facebookRedirectUrl = null;
    public $allowedFacebookDomains = null;

    public $twitterApiKey = null;
    public $twitterApiKeySecret = null;
    public $twitterRedirectUrl = null;
    public $allowedTwitterDomains = null;

    public $appleClientId = null;
    public $appleClientSecret = null;
    public $appleServiceId = null;
    public $appleServiceSecret = null;
    public $appleRedirectUrl = null;

    // Messages
    public $invalidHeader = 'Invalid Authorization Header';
    public $invalidSchema = 'No schema has been set for this user group';
    public $invalidRequest = 'Cannot validate request';
    public $invalidLogin = "We couldn't log you in with the provided details";
    public $invalidPasswordMatch = 'New passwords do not match';
    public $invalidPasswordUpdate = "We couldn't update the password with the provided details";
    public $invalidUserUpdate = "We couldn't update the user with the provided details";
    public $invalidOauthToken = 'Invalid OAuth Token';
    public $invalidJwtSecretKey = 'Invalid JWT Secret Key';
    public $invalidRefreshToken = 'Invalid Refresh Token';
    public $invalidEmailAddress = 'Invalid email address';

    public $userNotActivated = "Please activate your account before logging in";
    public $activationEmailSent = 'You will receive an email if it matches an account in our system';
    public $userActivated = 'Successfully activated user';
    public $passwordSaved = 'Successfully saved password';
    public $passwordUpdated = 'Successfully updated password';
    public $passwordResetSent = 'You will receive an email if it matches an account in our system';

    public $tokenNotFound = "We couldn't find any matching tokens";
    public $userNotFound = "We couldn't find any matching users";
    public $entryNotFound = "We couldn't find any matching entries";
    public $assetNotFound = "We couldn't find any matching assets";
    public $volumeNotFound = "We couldn't find any matching volumes";
    public $emailNotInScope = 'No email in scope';

    public $forbiddenMutation = "User doesn't have permission to perform this mutation";
    public $forbiddenField = "User doesn't have permission to access requested field(s)";

    public $googleTokenIdInvalid = 'Invalid Google Token ID';
    public $googleEmailMismatch = "Email address doesn't match allowed Google domains";
    public $facebookEmailMismatch = "Email address doesn't match allowed Facebook domains";
    public $twitterEmailMismatch = "Email address doesn't match allowed Twitter domains";

    public function rules()
    {
        return [
            [
                [
                    'permissionType',
                    'invalidHeader',
                    'invalidSchema',
                    'invalidRequest',
                    'invalidLogin',
                    'invalidPasswordMatch',
                    'invalidPasswordUpdate',
                    'invalidUserUpdate',
                    'invalidOauthToken',
                    'tokenNotFound',
                    'userNotFound',
                    'entryNotFound',
                    'assetNotFound',
                    'volumeNotFound',
                    'emailNotInScope',
                    'forbiddenMutation',
                    'forbiddenField',
                    'googleTokenIdInvalid',
                    'googleEmailMismatch',
                    'facebookEmailMismatch',
                    'twitterEmailMismatch',
                ],
                'required',
            ],
            [
                [
                    'schemaName',
                    'allowRegistration',
                    'userGroup',
                    'entryQueries',
                    'entryMutations',
                    'assetQueries',
                    'assetMutations',
                    'granularSchemas',
                    'jwtExpiration',
                    'jwtRefreshExpiration',
                    'jwtSecretKey',
                    'fieldRestrictions',
                    'sameSitePolicy',
                    'googleClientId',
                    'allowedGoogleDomains',
                    'facebookAppId',
                    'facebookAppSecret',
                    'facebookRedirectUrl',
                    'allowedFacebookDomains',
                    'twitterApiKey',
                    'twitterApiKeySecret',
                    'twitterRedirectUrl',
                    'allowedTwitterDomains',
                    'appleClientId',
                    'appleClientSecret',
                    'appleServiceId',
                    'appleServiceSecret',
                    'appleRedirectUrl',
                ],
                'default',
            ],
        ];
    }
}
