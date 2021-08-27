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
 *	<xsd:element name="SignedAssertion" type="AnyType"/>
 */

/**
 * Creates a node for &lt;SignedAssertion>
 */
class SignedAssertion extends TextBase
{
	/**
	 * Returns the instance local name
	 * @return string
	 */
	public function getLocalName()
	{
		return ElementNames::SignedAssertion;
	}
}
