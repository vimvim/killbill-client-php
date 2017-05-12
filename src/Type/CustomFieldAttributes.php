<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client\Type;

/*
 * DO NOT EDIT!!!
 * File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */

class CustomFieldAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    protected $customFieldId = null;
    /** @var string|null */
    protected $objectId = null;
    /** @var mixed|null */
    protected $objectType = null;
    /** @var string|null */
    protected $name = null;
    /** @var string|null */
    protected $value = null;
    /** @var array|null */
    protected $auditLogs = null;

    /**
     * @param string|null $customFieldId
     */
    public function setCustomFieldId($customFieldId)
    {
        $this->customFieldId = $customFieldId;
    }

    /**
     * @return string|null
     */
    public function getCustomFieldId()
    {
        return $this->customFieldId;
    }

    /**
     * @param string|null $objectId
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    }

    /**
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param mixed|null $objectType
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return mixed|null
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param string|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param array|null $auditLogs
     */
    public function setAuditLogs($auditLogs)
    {
        $this->auditLogs = $auditLogs;
    }

    /**
     * @return array|null
     */
    public function getAuditLogs()
    {
        return $this->auditLogs;
    }

}