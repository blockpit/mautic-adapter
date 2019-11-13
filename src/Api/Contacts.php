<?php

namespace blockpit\MauticAdapter\Api;

/**
 * Class Contracts
 * @package  blockpit\MauticAdapter\Api;
 */
class Contacts extends MauticApiBase
{
    /**
     * Contacts constructor.
     */
    public function __construct()
    {
        parent::__construct('contacts');
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function get(int $id)
    {
        return $this->endpoint->get($id);
    }

    /**
     * @return mixed
     */
    public function getFieldList()
    {
        return $this->endpoint->getFieldList();
    }

    /**
     * @param string $searchQuery
     * @return mixed
     */
    public function getList(string $searchQuery)
    {
        return $this->endpoint->getList($searchQuery);
    }

    /**
     * @param array $params
     * @return mixed
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
        return $this->endpoint->edit($id, $params, false);
    }

    /**
     * @param int $id
     * @return mixed|void
     */
    public function delete(int $id)
    {
        return $this->endpoint->edit($id, $params, false);
    }
}
