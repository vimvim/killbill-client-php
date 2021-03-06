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

/**
 * PlanDetailAttributes
 */
class PlanDetailAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    protected $product = null;
    /** @var string|null */
    protected $plan = null;
    /** @var mixed|null */
    protected $final_phase_billing_period = null;
    /** @var string|null */
    protected $priceList = null;
    /** @var PriceAttributes[]|null */
    protected $final_phase_recurring_price = null;

    /**
     * @param string|null $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return string|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string|null $plan
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    /**
     * @return string|null
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param mixed|null $final_phase_billing_period
     */
    public function setFinal_phase_billing_period($final_phase_billing_period)
    {
        $this->final_phase_billing_period = $final_phase_billing_period;
    }

    /**
     * @return mixed|null
     */
    public function getFinal_phase_billing_period()
    {
        return $this->final_phase_billing_period;
    }

    /**
     * @param string|null $priceList
     */
    public function setPriceList($priceList)
    {
        $this->priceList = $priceList;
    }

    /**
     * @return string|null
     */
    public function getPriceList()
    {
        return $this->priceList;
    }

    /**
     * @param PriceAttributes[]|null $final_phase_recurring_price
     */
    public function setFinal_phase_recurring_price($final_phase_recurring_price)
    {
        $this->final_phase_recurring_price = $final_phase_recurring_price;
    }

    /**
     * @return PriceAttributes[]|null
     */
    public function getFinal_phase_recurring_price()
    {
        return $this->final_phase_recurring_price;
    }

    /**
     * @return string
     */
    public function getFinal_phase_recurring_priceType()
    {
        return PriceAttributes::class;
    }

}
