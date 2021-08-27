<?php

/**
 * This class is part of the support for XAdES properties generation.
 * 
 * Copyright © 2021 Lyquidity Solutions Limited
 * License GPL 3.0.0
 * Bill Seddon 2021-07-19
 */

namespace lyquidity\xmldsig\xml;

/**
 *	<!-- targetNamespace="http://uri.etsi.org/01903/v1.3.2#" -->
 *
 *	<xsd:element name="EncapsulatedX509Certificate" type="EncapsulatedPKIData" minOccurs="0"/>
 */

/**
 * Creates a node for &lt;EncapsulatedX509Certificate>
 */
class EncapsulatedX509Certificate extends EncapsulatedPKIData
{
	/**
	 * Returns the instance local name
	 * @return string
	 */
	public function getLocalName()
	{
		return ElementNames::EncapsulatedX509Certificate;
	}
}
