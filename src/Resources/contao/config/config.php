<?php

/**
 * @copyright  Bright Cloud Studio
 * @author     Bright Cloud Studio
 * @package    Contao CE Grouping
 * @license    LGPL-3.0+
 * @see	       https://github.com/bright-cloud-studio/contao-ce-grouping
 */
  
   array_insert($GLOBALS['TL_CTE']['grouping'], -1, array
    (
        'grouping_start' => 'Bcs\GroupingBundle\ContentGroupingStart',
        'grouping_stop'  => 'Bcs\GroupingBundle\ContentGroupingStop'
    ));

    // Declare both of our new Content Elements as wrappers so we get the cool indenting in Content > Articles
    $GLOBALS['TL_WRAPPERS']['start'][] = 'grouping_start';
    $GLOBALS['TL_WRAPPERS']['stop'][]  = 'grouping_stop';

?>
