<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskDetails File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PlannerTaskDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskDetails extends PlannerDelta
{
    /**
    * Gets the checklist
    * The collection of checklist items on the task.
    *
    * @return PlannerChecklistItems|null The checklist
    */
    public function getChecklist()
    {
        if (array_key_exists("checklist", $this->_propDict)) {
            if (is_a($this->_propDict["checklist"], "\Beta\Microsoft\Graph\Model\PlannerChecklistItems") || is_null($this->_propDict["checklist"])) {
                return $this->_propDict["checklist"];
            } else {
                $this->_propDict["checklist"] = new PlannerChecklistItems($this->_propDict["checklist"]);
                return $this->_propDict["checklist"];
            }
        }
        return null;
    }

    /**
    * Sets the checklist
    * The collection of checklist items on the task.
    *
    * @param PlannerChecklistItems $val The checklist
    *
    * @return PlannerTaskDetails
    */
    public function setChecklist($val)
    {
        $this->_propDict["checklist"] = $val;
        return $this;
    }

    /**
    * Gets the completionRequirements
    * Contains detailed information about requirements on the task.
    *
    * @return PlannerTaskCompletionRequirementDetails|null The completionRequirements
    */
    public function getCompletionRequirements()
    {
        if (array_key_exists("completionRequirements", $this->_propDict)) {
            if (is_a($this->_propDict["completionRequirements"], "\Beta\Microsoft\Graph\Model\PlannerTaskCompletionRequirementDetails") || is_null($this->_propDict["completionRequirements"])) {
                return $this->_propDict["completionRequirements"];
            } else {
                $this->_propDict["completionRequirements"] = new PlannerTaskCompletionRequirementDetails($this->_propDict["completionRequirements"]);
                return $this->_propDict["completionRequirements"];
            }
        }
        return null;
    }

    /**
    * Sets the completionRequirements
    * Contains detailed information about requirements on the task.
    *
    * @param PlannerTaskCompletionRequirementDetails $val The completionRequirements
    *
    * @return PlannerTaskDetails
    */
    public function setCompletionRequirements($val)
    {
        $this->_propDict["completionRequirements"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the task.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Description of the task.
    *
    * @param string $val The description
    *
    * @return PlannerTaskDetails
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the notes
    * Rich text description of the task. To be used by HTML-aware clients. For backwards compatibility, a plain-text version of the HTML description will be synced to the 'description' field. If this field has not previously been set but 'description' has been, the existing description will be synchronized to 'notes' with minimal whitespace-preserving HTML markup. Setting both 'description' and 'notes' is an error and will result in an exception.
    *
    * @return ItemBody|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            if (is_a($this->_propDict["notes"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["notes"])) {
                return $this->_propDict["notes"];
            } else {
                $this->_propDict["notes"] = new ItemBody($this->_propDict["notes"]);
                return $this->_propDict["notes"];
            }
        }
        return null;
    }

    /**
    * Sets the notes
    * Rich text description of the task. To be used by HTML-aware clients. For backwards compatibility, a plain-text version of the HTML description will be synced to the 'description' field. If this field has not previously been set but 'description' has been, the existing description will be synchronized to 'notes' with minimal whitespace-preserving HTML markup. Setting both 'description' and 'notes' is an error and will result in an exception.
    *
    * @param ItemBody $val The notes
    *
    * @return PlannerTaskDetails
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

    /**
    * Gets the previewType
    * This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
    *
    * @return PlannerPreviewType|null The previewType
    */
    public function getPreviewType()
    {
        if (array_key_exists("previewType", $this->_propDict)) {
            if (is_a($this->_propDict["previewType"], "\Beta\Microsoft\Graph\Model\PlannerPreviewType") || is_null($this->_propDict["previewType"])) {
                return $this->_propDict["previewType"];
            } else {
                $this->_propDict["previewType"] = new PlannerPreviewType($this->_propDict["previewType"]);
                return $this->_propDict["previewType"];
            }
        }
        return null;
    }

    /**
    * Sets the previewType
    * This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
    *
    * @param PlannerPreviewType $val The previewType
    *
    * @return PlannerTaskDetails
    */
    public function setPreviewType($val)
    {
        $this->_propDict["previewType"] = $val;
        return $this;
    }

    /**
    * Gets the references
    * The collection of references on the task.
    *
    * @return PlannerExternalReferences|null The references
    */
    public function getReferences()
    {
        if (array_key_exists("references", $this->_propDict)) {
            if (is_a($this->_propDict["references"], "\Beta\Microsoft\Graph\Model\PlannerExternalReferences") || is_null($this->_propDict["references"])) {
                return $this->_propDict["references"];
            } else {
                $this->_propDict["references"] = new PlannerExternalReferences($this->_propDict["references"]);
                return $this->_propDict["references"];
            }
        }
        return null;
    }

    /**
    * Sets the references
    * The collection of references on the task.
    *
    * @param PlannerExternalReferences $val The references
    *
    * @return PlannerTaskDetails
    */
    public function setReferences($val)
    {
        $this->_propDict["references"] = $val;
        return $this;
    }

}
