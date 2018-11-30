<?php
/**
 * Created by ASM Web Services.
 * @date:   23/11/2018 20:28
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\CloudinaryConnectorBundle\Http;

use Misteio\CloudinaryBundle;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
//use GuzzleHttp\Client;
//use GuzzleHttp\ClientInterface;

use \Symfony\Component\HttpKernel\Client;

class HttpClient
{
    /**
     * @var string[]
     *
     * Cloudinary API Credentials = [cloud_name. api_key, api_secret]
     */
    private $credentials;

    /** @var Client */
    private $guzzle;

    /**
     * HttpClient constructor.
     * @param ConfigManager $configManager
     * @param $baseUri
     */
    public function __construct(ConfigManager $configManager, $baseUri)
    {
       $this->credentials = [
           $configManager->get('asm_cloudinary_connector.cloud_name'),
           $configManager->get('asm_cloudinary_connector.api_key'),
           $configManager->get('asm_cloudinary_connector.api_secret'),
       ];

       $this->guzzle = new Client(['base_uri' => $baseUri]);
    }

    /**
     * @return Client
     */
    public function getGuzzle(): Client
    {
        return $this->guzzle;
    }

    /**
     * @param Client $guzzle
     */
    public function setGuzzle(Client $guzzle): void
    {
        $this->guzzle = $guzzle;
    }

    /**
     * @return string[]
     */
    public function getCredentials(): array
    {
        return $this->credentials;
    }

    /**
     * @param string[] $credentials
     */
    public function setCredentials(array $credentials): void
    {
        $this->credentials = $credentials;
    }


}