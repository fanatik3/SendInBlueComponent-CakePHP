<?php
namespace SendInBlue\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Core\Configure;
use SendinBlue\Client\Api\AccountApi;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\ApiException;
use GuzzleHttp;

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
    protected $apiInstance = null;

    /**
     * initialize
     * @param  array  $config  [description]
     * @return void
     */
    public function initialize(array $config)
    {
        $this->apiKey = Configure::read('SendInBlue.apiKey');

        $this->apiInstance = new ContactsApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            new GuzzleHttp\Client(),
            Configuration::getDefaultConfiguration()->setApiKey('api-key', $this->apiKey)
        );
    }

    /**
     * Delete Contact
     * @param  email
     * @return void
     */
    public function deleteContact(String $email)
    {
        try {
            $this->apiInstance->deleteContact($email);
        } catch (ApiException $e) {
           
        }
    }


}
