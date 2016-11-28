<?php

namespace Olenaza\HW\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AuthorController extends Controller
{
    /**
     * Show authors list
     *
     * @return Response
     */
    public function listAction()
    {
        return $this->render('OlenazaHWProjectBundle:Author:index.html.twig');
    }

    /**
     * Show author info.
     *
     * @return Response
     */
    public function showAction($name)
    {
        $content = 'Info on the Author ' . $name;
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'text/plain');
        $response->setStatusCode(Response::HTTP_OK);

        return $response;
    }

}
