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
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function get(int $id)
    {
        return parent::handleResult($this->endpoint->get($id));
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

    /**
     * @param int $campaignId
     * @param int $contactId
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function addContact(int $campaignId, int $contactId)
    {
        return parent::handleResult($this->endpoint->addContact($campaignId, $contactId));
    }

    /**
     * @param int $campaignId
     * @param int $contactId
     * @return mixed
     * @throws \blockpit\MauticAdapter\Exceptions\MauticBaseException
     */
    public function removeContact(int $campaignId, int $contactId)
    {
        return parent::handleResult($this->endpoint->removeContact($campaignId, $contactId));
    }
}
