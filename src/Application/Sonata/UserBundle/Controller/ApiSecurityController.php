<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations;


class ApiSecurityController extends FOSRestController
{
    /**
     * Just to demonstrate authentication result
     *
     * @return JsonResponse
     */
    public function pingAction()
    {
        return new JsonResponse();
    }
}
