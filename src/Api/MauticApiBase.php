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
        $baseUrl = config('mauticconfig.mautic_address', 'default');

        $initAuth = new ApiAuth();
        $authentication = $initAuth->newAuth([
            'userName' => config('mauticconfig.user_name', 'default'),
            'password' => config('mauticconfig.password', 'default'),
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
