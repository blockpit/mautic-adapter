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
        //$baseUrl = config('mautic_address');
        $baseUrl = 'https://mautic.blockpit.io/api';

        $initAuth = new ApiAuth();
        $authentication = $initAuth->newAuth([
            'userName' => 'blockpit_test', //config('user_name'),
            'password' => 'test1234', //config('password'),
        ], 'BasicAuth');

        $this->endpoint = $api->newApi($endpoint, $authentication, $baseUrl);

    }

    /**
     * @param $result
     * @return mixed
     * @throws MauticBaseException
     */
    public static function handleResult($result)
    {
        if (isset($result['errors'])) {
            switch ($result['errors'][0]['code']) {
                case 401:
                    throw new MauticBaseException(
                        'Mautic Api Access denied - maybe authentication fails',
                        401);
                    break;
                case 404:
                    throw new MauticBaseException(
                        'Some Id not found.',
                        404);
                    break;
            }
        }

        if (isset($result['success']) && !$result['success']) {
            throw new MauticBaseException('Mautic API Error', 400);
        }

        return $result;
    }
}
