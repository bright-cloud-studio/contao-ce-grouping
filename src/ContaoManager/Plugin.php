<?php

/**
 * @copyright  Bright Cloud Studio
 * @author     Bright Cloud Studio
 * @package    Contao CE Grouping
 * @license    LGPL-3.0+
 * @see	       https://github.com/bright-cloud-studio/contao-ce-grouping
 */

namespace Bcs\GroupingBundle\ContaoManager;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Bcs\GroupingBundle\BcsGroupingBundle')->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }
}
