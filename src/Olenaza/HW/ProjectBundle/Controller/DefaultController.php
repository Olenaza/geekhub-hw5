<?php

namespace Olenaza\HW\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends Controller
{
    /**
     * Show index page
     *
     * @return Response
     */
    public function indexAction()
    {
        $url =$this->get('router')->generate('projects_list', array(
            'page' => 1,
        ));

        return $this->render('OlenazaHWProjectBundle:Default:index.html.twig', array(
            'url' => $url
        ));
    }

    /**
     * Show projects list
     *
     * @return Response
     */
    public function listAction($page)
    {
        $content = 'List of projects: page ' . $page;
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'text/plain');
        $response->setStatusCode(Response::HTTP_OK);

        return $response;
    }

    /**
     * Show project details.
     *
     * @return Response
     */
    public function showAction($slug)
    {
        $content = 'Details of the project ' . $slug;
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'text/plain');
        $response->setStatusCode(Response::HTTP_OK);

        return $response;
    }

    /**
     * Show documents for the project.
     *
     * @return Response
     */
    public function getProjectDocumentsAction($slug)
    {
        $response = new JsonResponse();
        $response->setData(array(
            'project' => $slug,
            'docs' => array('cash-flow', 'swop-analisys', 'calendar-plan'),
        ));

        return $response;
    }

    /**
     * Show a document for the project.
     *
     * @return Response
     */
    public function getProjectDocumentAction($slug, $name)
    {
        $content = $name . ' for the project ' . $slug;
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'text/plain');
        $response->setStatusCode(Response::HTTP_OK);

        return $response;
    }
}

