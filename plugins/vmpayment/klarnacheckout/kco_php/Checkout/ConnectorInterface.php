<?php
/**
 * Copyright 2015 Klarna AB
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
 *
 * File containing the Klarna_Checkout_Connector interface
 *
 * PHP version 5.3
 *
 * @category  Payment
 * @package   Klarna_Checkout
 * @author    Klarna <support@klarna.com>
 * @copyright 2015 Klarna AB
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache license v2.0
 * @link      http://developers.klarna.com/
 */

/**
 * Interface for the resource object
 *
 * @category  Payment
 * @package   Klarna_Checkout
 * @author    Majid G. <majid.garmaroudi@klarna.com>
 * @author    David K. <david.keijser@klarna.com>
 * @copyright 2015 Klarna AB
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache license v2.0
 * @link      http://developers.klarna.com/
 */
interface Klarna_Checkout_ConnectorInterface
{
    /**
     * Applying the method on the specific resource
     *
     * @param string                            $method   Http methods
     * @param Klarna_Checkout_ResourceInterface $resource resource
     * @param array                             $options  Options
     *
     * @return void
     */
    public function apply(
        $method,
        Klarna_Checkout_ResourceInterface $resource,
        array $options = null
    );

    /**
     * Gets the underlying transport object
     *
     * @return Klarna_Checkout_HTTP_TransportInterface Transport object
     */
    public function getTransport();

    /**
     * Get the current domain
     *
     * @return string
     */
    public function getDomain();
}
