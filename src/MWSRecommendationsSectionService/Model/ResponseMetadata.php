<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Recommendations Section Service
 * @version  2013-04-01
 * Library Version: 2015-03-12
 * Generated: Wed Mar 11 20:34:47 GMT 2015
 */

/**
 * @see MWSRecommendationsSectionService_Model
 */

require_once(dirname(__FILE__) . '/../Model.php');


/**
 * MWSRecommendationsSectionService_Model_ResponseMetadata
 *
 * Properties:
 * <ul>
 *
 * <li>RequestId: string</li>
 *
 * </ul>
 */
class MWSRecommendationsSectionService_Model_ResponseMetadata extends MWSRecommendationsSectionService_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'RequestId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the RequestId property.
     *
     * @return String RequestId.
     */
    public function getRequestId()
    {
        return $this->_fields['RequestId']['FieldValue'];
    }

    /**
     * Set the value of the RequestId property.
     *
     * @param string requestId
     * @return this instance
     */
    public function setRequestId($value)
    {
        $this->_fields['RequestId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RequestId is set.
     *
     * @return true if RequestId is set.
     */
    public function isSetRequestId()
    {
        return !is_null($this->_fields['RequestId']['FieldValue']);
    }

    /**
     * Set the value of RequestId, return this.
     *
     * @param requestId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRequestId($value)
    {
        $this->setRequestId($value);
        return $this;
    }

}
