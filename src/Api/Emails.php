<?php

namespace blockpit\MauticAdapter\Api;

/**
 * Class Emails
 * @package blockpit\MauticAdapter\Api;
 */
class Emails extends MauticApiBase
{
    /**
     * Campaigns constructor.
     * @throws \Mautic\Exception\ContextNotFoundException
     */
    public function __construct()
    {
        parent::__construct('emails');
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
     * @param string $searchQuery
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function getList(string $searchQuery)
    {
        return parent::handleResult($this->endpoint->getList($searchQuery));
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

    /**
     * @param int $emailId
     * @param int $contactId
     * @param array $params
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function sendToContact(int $emailId, int $contactId, array $params)
    {
        return parent::handleResult($this->endpoint->sendToContact($emailId, $contactId, $params));
    }

    /**
     * @param int $segmentId
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function send(int $segmentId)
    {
        return parent::handleResult($this->endpoint->send($segmentId));
    }
}
