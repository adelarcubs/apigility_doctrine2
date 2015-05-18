<?php

namespace User\V1\Rest\User;

class UserResourceFactory {

    public function __invoke($services) {
        $em = $services->get('Doctrine\ORM\EntityManager');
        return new UserResource($em);
    }

}
