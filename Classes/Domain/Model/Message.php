<?php

namespace SebastianChristoph\ScMessages\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Message extends AbstractEntity
{
    /**
     * The id of the message
     *
     * @var integer
     **/
    protected $id = '';

    /**
     * Message constructor.
     *
     */
    public function __construct()
    {
        $this->setId(42);
    }

    /**
     * Sets the id of the message
     *
     * @param integer $id
     */
    public function setName(integer $id)
    {
        $this->id = $id;
    }

    /**
     * Gets the id of the message
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}