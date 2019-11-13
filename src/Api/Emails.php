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
     * @return array|mixed
     */
    public function get(int $id)
    {
        return $this->endpoint->get($id);
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
     * @param int $id
     * @return mixed|void
     */
    public function delete(int $id)
    {
        return $this->endpoint->delete($id);
    }

    /**
     * Sends email to contact
     * @param int $emailId
     * @param int $contactId
     * @param array $params
     * @return mixed
     */
    public function sendToContact(int $emailId, int $contactId, array $params)
    {
        return $this->endpoint->sendToContact($emailId, $contactId, $params);
    }

    /**
     * Sends email to segment by Id
     * @param int $segmentId
     * @return mixed
     */
    public function send(int $segmentId)
    {
        return $this->endpoint->send($segmentId);
    }
}
