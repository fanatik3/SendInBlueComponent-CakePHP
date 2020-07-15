<?php
namespace SendInBlue\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Core\Configure;

/**
 * SendInBlue component
 */
class SendInBlueComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    protected $apiKey = '';

    /**
     * initialize
     * @param  array  $config  [description]
     * @return void
     */
    public function initialize(array $config)
    {
        $this->apiKey = Configure::read('SendInBlue.apiKey');
        SendInBlue::setApiKey($this->apiKey);
    }

    
}
