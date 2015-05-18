<?php

namespace User\V1\Rest\User;

use Zend\Paginator\Paginator;
use Zend\Paginator\Adapter\ArrayAdapter;

class UserCollection extends Paginator {

    public function __construct($userCollection) {
        parent::__construct(new ArrayAdapter($userCollection));
    }

}
