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
     * @throws \Mautic\Exception\ContextNotFoundException
     */
    public function __construct()
    {
        parent::__construct('contacts');
    }

    /**
     * @param int $id
     * @return mixed
     * @throws \App\Exceptions\MauticBaseException
     */
    public function get(int $id)
    {
        return $this->endpoint->get($id);
    }

    /**
     * @return mixed
     * @throws \App\Exceptions\MauticBaseException
     */
    public function getFieldList()
    {
        return $this->endpoint->getFieldList();
    }

    /**
     * @param string $searchQuery
     * @return mixed
     * @throws \App\Exceptions\MauticBaseException
     */
    public function getList(string $searchQuery)
    {
        return $this->endpoint->getList($searchQuery);
    }

    /**
     * @param array $params
     * @return mixed
     * @throws \App\Exceptions\MauticBaseException
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
        // TODO: Implement delete() method.
    }
}
