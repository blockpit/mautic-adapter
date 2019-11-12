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

    /**
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
     * @param int $segmentId
     * @return mixed
     */
    public function send(int $segmentId)
    {
        return $this->endpoint->send($segmentId);
    }
}
