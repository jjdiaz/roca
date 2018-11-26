<?php
/**
 * Created by ASM Web Services.
 * @date:   23/11/2018 16:51
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\CloudinaryConnectorBundle\Controller;

use GuzzleHttp\Exception\ClientException;
use Misteio\CloudinaryBundle\Wrapper\CloudinaryWrapper;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Pim\Bundle\IcecatConnectorBundle\Http\HttpClient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CloudinaryConnectorController extends Controller
{
    const INVALID_CREDENTIALS = 'Cloudinary connection data are invalid';

    /** @var HttpClient\ */
    protected $client;

    /** @var ConfigManager */
    protected $config;

    /** @var string */
    protected $cloudinaryProductEndpoint;

    /**
     * CloudinaryConnectorController constructor.
     * @param HttpClient $client
     * @param ConfigManager $config
     */
    public function __construct(HttpClient $client, ConfigManager $config)
    {
        $this->$client = $client;
        $this->config = $config;
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function checkCredentialsAction(Request $request)
    {
        /** @var CloudinaryWrapper $cloudinary */
        $cloudinary = $this->container->get('misteio_cloudinary_wrapper');
        return new Response('Ok');



    }
}