<?php

namespace blockpit\MauticAdapter\Api;

use blockpit\MauticAdapter\Exceptions\MauticBaseException;

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
     * @return mixed
     * @throws MauticBaseException
     */
    public function get(int $id)
    {
        return parent::handleResult($this->endpoint->get($id));
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
     * @return mixed
     * @throws MauticBaseException
     */
    public function delete(int $id)
    {
        return parent::handleResult($this->endpoint->delete($id));
    }
}
