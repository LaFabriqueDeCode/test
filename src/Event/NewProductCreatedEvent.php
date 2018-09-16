<?php

namespace App\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class NewProductCreated
 * @author Michael Joly <m.joly@wakeonweb.com>
 */
class NewProductCreatedEvent extends Event
{
    const NAME = 'new_product_created';

    protected $data;

    /**
     * NewProductCreated constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
