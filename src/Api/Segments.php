<?php

namespace blockpit\MauticAdapter\Api;

/**
 * Class Segments
 * @package  blockpit\MauticAdapter\Api;
 */
class Segments extends MauticApiBase
{
    /**
     * Segments constructor.
     */
    public function __construct()
    {
        parent::__construct('segments');
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
     * @param int $segmentId
     * @param int $contactId
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function addContact(int $segmentId, int $contactId)
    {
        return parent::handleResult($this->endpoint->addContact($segmentId, $contactId));
    }

    /**
     * @param int $segmentId
     * @param int $contactId
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function removeContact(int $segmentId, int $contactId)
    {
        return parent::handleResult($this->endpoint->removeContact($segmentId, $contactId));
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
