<?php

namespace Shero\Installer;

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
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;

class InstallData implements InstallDataInterface
{
    /**
     * @var WriterInterface
     */
    private $configWriter;

    /**
     * @var Data
     */
    private $data;

    /**
     * @param WriterInterface $configWriter
     * @param Data $data
     */
    public function __construct(WriterInterface $configWriter, Data $data)
    {
        $this->configWriter = $configWriter;
        $this->data = $data;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        foreach($this->getConfigData() as $path => $value) {
            $this->configWriter->save($path, $value);
        }
    }

    /**
     * @return array
     */
    private function getConfigData()
    {
        return $this->data->get();
    }
}
