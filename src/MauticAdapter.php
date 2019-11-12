<?php

namespace blockpit\MauticAdapter;

use blockpit\MauticAdapter\Api\Campaigns;
use blockpit\MauticAdapter\Api\Contacts;
use blockpit\MauticAdapter\Api\Emails;
use blockpit\MauticAdapter\Api\Segments;

/**
 * Class MauticAdapter
 * @package App\Adapter\Mautic
 */
class MauticAdapter
{
    /**
     * @var Contacts
     */
    private $contacts;

    /**
     * @var Campaigns
     */
    private $campaigns;

    /**
     * @var Segments
     */
    private $segments;

    /**
     * @var Emails
     */
    private $emails;

    /**
     * MauticAdapter constructor.
     * @throws \Mautic\Exception\ContextNotFoundException
     */
    public function __construct()
    {
        $this->contacts = new Contacts();
        $this->campaigns = new Campaigns();
        $this->segments = new Segments();
        $this->emails = new Emails();
    }

    /**
     * @return Contacts
     */
    public function contacts(): Contacts
    {
        return $this->contacts;
    }

    /**
     * @return Campaigns
     */
    public function campaigns(): Campaigns
    {
        return $this->campaigns;
    }

    /**
     * @return Segments
     */
    public function segments(): Segments
    {
        return $this->segments;
    }

    /**
     * @return Emails
     */
    public function emails(): Emails
    {
        return $this->emails;
    }
}


