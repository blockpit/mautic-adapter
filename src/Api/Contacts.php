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
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function get(int $id)
    {
        return parent::handleResult($this->endpoint->get($id));
    }

    /**
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function getFieldList()
    {
        return parent::handleResult($this->endpoint->getFieldList());
    }

    /**
     * @param string $searchQuery
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function getList(string $searchQuery)
    {
        return parent::handleResult($this->endpoint->getList($searchQuery));
    }

    /**
     * @param array $params
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function create(array $params)
    {
        return parent::handleResult($this->endpoint->create($params));
    }

    /**
     * @param int $id
     * @param array $params
     * @param bool $createIfNotFound
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function edit(int $id, array $params, bool $createIfNotFound = false)
    {
        return parent::handleResult($this->endpoint->edit($id, $params, $createIfNotFound));
    }

    /**
     * @param int $id
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function delete(int $id)
    {
        return parent::handleResult($this->endpoint->delete($id));
    }
}
