<?php
/** @noinspection PhpUnused */

/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
 *
 * ItemAttachment File
 * PHP version 7
 *
 * @category  Library
 * @package   Microsoft.Graph
 * @copyright © Microsoft Corporation. All rights reserved.
 * @license   https://opensource.org/licenses/MIT MIT License
 * @version   GIT: 1.4.0
 * @link      https://graph.microsoft.io/
 */

namespace Microsoft\Graph\Model;

/**
 * ItemAttachment class
 *
 * @category  Model
 * @package   Microsoft.Graph
 * @copyright © Microsoft Corporation. All rights reserved.
 * @license   https://opensource.org/licenses/MIT MIT License
 * @version   Release: 1.4.0
 * @link      https://graph.microsoft.io/
 */
class ItemAttachment extends Attachment {
	public function __construct($propDict = []) {
		parent::__construct($propDict);

		$this->_propDict['@odata.type'] = '#microsoft.graph.itemAttachment';
	}

	/**
	 * Gets the item
	 * The attached message or event. Navigation property.
	 *
	 * @return OutlookItem The item
	 */
	public function getItem() {
		if (array_key_exists("item", $this->_propDict)) {
			if (is_a($this->_propDict["item"], "Microsoft\Graph\Model\OutlookItem")) {
				return $this->_propDict["item"];
			} else {
				$this->_propDict["item"] = new OutlookItem($this->_propDict["item"]);
				return $this->_propDict["item"];
			}
		}
		return null;
	}

	/**
	 * Sets the item
	 * The attached message or event. Navigation property.
	 *
	 * @param OutlookItem $val The item
	 *
	 * @return ItemAttachment
	 */
	public function setItem($val) {
		$this->_propDict["item"] = $val;
		return $this;
	}

}
