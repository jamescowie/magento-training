<?php

namespace Shero\Installer;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;

/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the license
 * that is bundled with this package in the file LICENSE.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@sherocommere.com so we can send you a copy immediately.
 *
 * @category Shero
 * @package Shero\Config
 * @author <user name> <support@sherocommerce.com>
 * @copyright 2018 Shero Commerce
 * @license Shero Commerce
 * @link http://sherocommerce.com
 */

/**
 * @category Shero
 * @package Shero\Config
 * @subpackage Shero\Config\Setup
 * @author <user> <user@ssherocommerce.com>
 * @copyright 2018 Shero Commerce
 * @license Shero commerce
 * @link http://sherocommerce.com
 */
class UpgradeData implements UpgradeDataInterface
{
    public function __construct()
    {
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.2.0') < 0) {
            // do something
        }

        if (version_compare($context->getVersion(), '1.3.0') < 0) {
//            $this->configWriter->save('currency/import/enabled', '1');
//            $this->configWriter->save('currency/import/time', '03,00,00');
        }
    }
}
