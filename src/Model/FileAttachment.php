<?php
/** @noinspection PhpUnused */

/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
 *
 * FileAttachment File
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

use GuzzleHttp\Psr7\Stream;
use function GuzzleHttp\Psr7\stream_for;

/**
 * FileAttachment class
 *
 * @category  Model
 * @package   Microsoft.Graph
 * @copyright © Microsoft Corporation. All rights reserved.
 * @license   https://opensource.org/licenses/MIT MIT License
 * @version   Release: 1.4.0
 * @link      https://graph.microsoft.io/
 */
class FileAttachment extends Attachment {
	public function __construct($propDict = []) {
		parent::__construct($propDict);

		$this->_propDict['@odata.type'] = '#microsoft.graph.fileAttachment';
	}

	/**
	 * Gets the contentId
	 * The ID of the attachment in the Exchange store.
	 *
	 * @return string The contentId
	 */
	public function getContentId() {
		if (array_key_exists("contentId", $this->_propDict)) {
			return $this->_propDict["contentId"];
		} else {
			return null;
		}
	}

	/**
	 * Sets the contentId
	 * The ID of the attachment in the Exchange store.
	 *
	 * @param string $val The contentId
	 *
	 * @return FileAttachment
	 */
	public function setContentId($val) {
		$this->_propDict["contentId"] = $val;
		return $this;
	}

	/**
	 * Gets the contentLocation
	 * Do not use this property as it is not supported.
	 *
	 * @return string The contentLocation
	 */
	public function getContentLocation() {
		if (array_key_exists("contentLocation", $this->_propDict)) {
			return $this->_propDict["contentLocation"];
		} else {
			return null;
		}
	}

	/**
	 * Sets the contentLocation
	 * Do not use this property as it is not supported.
	 *
	 * @param string $val The contentLocation
	 *
	 * @return FileAttachment
	 */
	public function setContentLocation($val) {
		$this->_propDict["contentLocation"] = $val;
		return $this;
	}

	/**
	 * Gets the contentBytes
	 * The base64-encoded contents of the file.
	 *
	 * @return Stream The contentBytes
	 */
	public function getContentBytes() {
		if (array_key_exists("contentBytes", $this->_propDict)) {
			if (is_a($this->_propDict["contentBytes"], "\GuzzleHttp\Psr7\Stream")) {
				return $this->_propDict["contentBytes"];
			} else {
				$this->_propDict["contentBytes"] = stream_for($this->_propDict["contentBytes"]);
				return $this->_propDict["contentBytes"];
			}
		}
		return null;
	}

	/**
	 * Sets the contentBytes
	 * The base64-encoded contents of the file.
	 *
	 * @param string $val The contentBytes
	 *
	 * @return FileAttachment
	 */
	public function setContentBytes($val) {
		$this->_propDict["contentBytes"] = $val;
		return $this;
	}

}
