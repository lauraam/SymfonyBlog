<?php
/**
 * Created by PhpStorm.
 * User: Laura
 * Date: 25/03/15
 * Time: 15:48
 */

namespace AppBundle\Controller;

use AppBundle\Entity\ArticleRepository;
use AppBundle\Entity\TagRepository;
use AppBundle\Entity\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ApiController
 * @Route("/api")
 */
class ApiController extends Controller
{
    /**
     * @Route("/article/{id}", name="api_article", defaults={"id"=null}, requirements={"id"= "\d+"})
     */
    public function articleAction($id)
    {
        // Retrieve Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Retrieve Entity Repository

        /** @var  ArticleRepository $repo */
        $repo = $em->getRepository('AppBundle:Article');

        // Retrieve all Articles entities
        $articles = $repo->findCatchThemAll();

        return new JsonResponse($articles);
    }

    /**
     * @Route("/tag/{id}", name="api_tag", defaults={"id"=null}, requirements={"id"= "\d+"})
     */
    public function tagAction($id)
    {
        // Retrieve Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Retrieve Entity Repository

        /** @var TagRepository $repo */
        $repo = $em->getRepository('AppBundle:Tag');

        // Retrieve all Pokemons entities
        $tags = $repo->findCatchThemAll($id);

        return new JsonResponse($tags);
    }

    /**
     * @Route("/category/{id}", name="api_category", defaults={"id"=null}, requirements={"id"= "\d+"})
     */
    public function categoryAction($id)
    {
        // Retrieve Doctrine Manager
        $em = $this->getDoctrine()->getManager();
        // Retrieve Entity Repository

        /** @var CategoryRepository $repo */
        $repo = $em->getRepository('AppBundle:Category');

        // Retrieve all Categories entities
        $categories = $repo->findCatchThemAll($id);

        return new JsonResponse($categories);
    }

} 