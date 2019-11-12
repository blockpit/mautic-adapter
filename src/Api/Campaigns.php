<?php

namespace blockpit\MauticAdapter\Api;

/**
 * Class Campaigns
 * @package blockpit\MauticAdapter\Api;
 */
class Campaigns extends MauticApiBase
{
    /**
     * Campaigns constructor.
     * @throws \Mautic\Exception\ContextNotFoundException
     */
    public function __construct()
    {
        parent::__construct('campaigns');
    }

    /**
     * @param int $id
     * @return array|mixed
     */
    public function get(int $id)
    {
        return $this->endpoint->get($id);
    }

    /**
     * @param array $params
     * @return mixed|void
     */
    public function create(array $params)
    {
        // TODO: Implement create() method.
    }

    /**
     * @param int $id
     * @param array $params
     * @return mixed|void
     */
    public function edit(int $id, array $params)
    {
        // TODO: Implement edit() method.
    }

    /**
     * @param int $id
     * @return mixed|void
     */
    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }
}
