<?php

namespace blockpit\MauticAdapter\Api;

use blockpit\MauticAdapter\Exceptions\MauticBaseException;
use Mautic\Auth\ApiAuth;
use Mautic\MauticApi;

/**
 * Class MauticApiBase
 * @package  blockpit\MauticAdapter\Api;
 */
abstract class MauticApiBase
{
    /**
     * @var \Mautic\Api\Api
     */
    protected $endpoint;

    /**
     * @param int $id
     * @return mixed
     */
    public abstract function get(int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public abstract function delete(int $id);

    /**
     * MauticApiBase constructor.
     * @param string $endpoint
     * @throws \Mautic\Exception\ContextNotFoundException
     */
    public function __construct(string $endpoint)
    {
        $api = new MauticApi();
        $baseUrl = env('MAUTIC_ADDRESS');

        $initAuth = new ApiAuth();
        $authentication = $initAuth->newAuth([
            'userName' => env('MAUTIC_USER'),
            'password' => env('MAUTIC_PASSWORD'),
        ], 'BasicAuth');

        $this->endpoint = $api->newApi($endpoint, $authentication, $baseUrl);;
    }

    /**
     * @param $result
     * @return mixed
     * @throws MauticBaseException
     */
    public static function handleResult($result)
    {
        if (!isset($result['success'])) {
            throw new MauticBaseException('Mautic API Error', 400);
        }

        return $result;
    }
}
