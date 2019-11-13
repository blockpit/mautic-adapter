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
        return $this->endpoint->create($params);
    }

    /**
     * @param int $id
     * @param array $params
     * @return mixed|void
     */
    public function edit(int $id, array $params)
    {
        return $this->endpoint->edit($id, $params);
    }

    /**
     * @param int $id
     * @return mixed|void
     */
    public function delete(int $id)
    {
        return $this->endpoint->delete($id);
    }
}
