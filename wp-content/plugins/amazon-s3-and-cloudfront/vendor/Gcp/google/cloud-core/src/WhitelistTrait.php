<?php

/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Cloud\Core;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Cloud\Core\Exception\NotFoundException;
/**
 * Manages exceptions for requests which may have whitelist restrictions.
 */
trait WhitelistTrait
{
    /**
     * Modify the error message of a whitelisted exception.
     *
     * @param NotFoundException $e The exception.
     * @return NotFoundException
     */
    private function modifyWhitelistedError(\DeliciousBrains\WP_Offload_Media\Gcp\Google\Cloud\Core\Exception\NotFoundException $e)
    {
        $e->setMessage('NOTE: Error may be due to Whitelist Restriction. ' . $e->getMessage());
        return $e;
    }
}
