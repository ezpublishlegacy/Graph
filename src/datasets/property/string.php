<?php
/**
 * File containing the abstract ezcGraphDataSetStringProperty class
 *
 * @package Graph
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Class for string properties of datasets
 *
 * @version //autogentag//
 * @package Graph
 */
class ezcGraphDataSetStringProperty extends ezcGraphDataSetProperty
{
    /**
     * Converts value to an {@link ezcGraphColor} object
     * 
     * @param & $value 
     * @return void
     */
    protected function checkValue( &$value )
    {
        $value = (string) $value;
        return true;
    }
}

?>
