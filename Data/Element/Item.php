<?php
/**
 * Cytracon
 *
 * This source file is subject to the Cytracon Software License, which is available at https://www.cytracon.com/license.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to https://www.cytracon.com for more information.
 *
 * @category  Cytracon
 * @package   Cytracon_PageBuilderPageableContainer
 * @author    quanth@cytracon.com
 * @copyright Copyright (C) 2020 Cytracon (https://www.cytracon.com)
*/

namespace Cytracon\PageBuilderPageableContainer\Data\Element;

class Item extends \Cytracon\Builder\Data\Element\AbstractElement
{
    /**
     * @return Cytracon\Builder\Data\Form\Element\Fieldset
     */
    public function prepareGeneralTab()
    {
    	$general = parent::prepareGeneralTab();

	    	$general->addChildren(
	            'title',
	            'text',
	            [
					'sortOrder'       => 10,
					'key'             => 'title',
					'templateOptions' => [
						'label' => __('Title')
	                ]
	            ]
	        );

    	return $general;
    }

    /**
     * @return array
     */
    public function getDefaultValues()
    {
    	return [
            'title'          => __('Item')
    	];
    }
}