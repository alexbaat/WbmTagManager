<?php

class TagManagerTests extends Enlight_Components_Test_Controller_TestCase
{
    /**
     * @var array
     */
    private $pluginConfig;

    /**
     * @var \WbmTagManager\Services\TagManagerVariables
     */
    private $variables;

    public function setUp()
    {
        parent::setUp();

        $this->pluginConfig = Shopware()->Container()->get('shopware.plugin.cached_config_reader')->getByPluginName('WbmTagManager');
        $this->variables = Shopware()->Container()->get('wbm_tag_manager.variables');
        $this->dispatch('/');
    }

    public function testDataLayerVariables()
    {
        $this->variables->setVariables(true);
        $dataLayerVariables = $this->variables->getVariables();

        $this->assertTrue($dataLayerVariables);
    }
}