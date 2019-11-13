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
     * Lists available fields of contact
     * @return mixed
     */
    public function getFieldList()
    {
        return $this->endpoint->getFieldList();
    }

    /**
     * Lists Contacts according to search string
     * @param string $searchQuery
     * @return mixed
     */
    public function getList(string $searchQuery)
    {
        return $this->endpoint->getList($searchQuery);
    }

    /**
     * Creates a contact
     * @param array $params
     * @return mixed
     */
    public function create(array $params)
    {
        return $this->endpoint->create($params);
    }

    /**
     * Edits contact
     * @param int $id
     * @param array $params
     * @param bool $createIfNotFound
     * @return mixed
     */
    public function edit(int $id, array $params, bool $createIfNotFound = false)
    {
        return $this->endpoint->edit($id, $params, $createIfNotFound);
    }

    /**
     * Deletes Contact
     * @param int $id
     * @return mixed|void
     */
    public function delete(int $id)
    {
        return $this->endpoint->delete($id);
    }
}
