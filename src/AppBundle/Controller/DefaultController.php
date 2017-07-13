<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Blog;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $cnt = $em->getRepository("AppBundle:Blog");
        $content = $cnt->findAll();

        return $this->render('default/index.html.twig', array(
            'data' => $content
        ));
    }

    /**
     * @param Blog $blog
     * @return array
     * @Route("/content/{slug}", name="blog_post")
     *
     */
    public function content(Blog $blog)
    {
        return $this->render('default/content.html.twig', ['blog' => $blog]);
    }
}
