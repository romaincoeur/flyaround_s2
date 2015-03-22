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
use Sonata\UserBundle\Controller\ProfileFOSUser1Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Util\Codes;


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
