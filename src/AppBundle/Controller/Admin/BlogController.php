<?php
/**
 * Created by PhpStorm.
 * User: JackLondon
 * Date: 10.07.2017
 * Time: 15:03
 */

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Blog;
use AppBundle\Entity\User;
use AppBundle\Form\BlogType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Tools\Slugger;



class BlogController extends Controller
{
    /**
     * @Route("/admin", name="admin_home" )
     */
    public function indexAction()
    {
        $em    = $this->getDoctrine()->getManager();
        $repo  = $em->getRepository("AppBundle:Blog");
        $items = $repo->findAll(array('id'=>'DESC'));

        return $this->render("admin/index.html.twig",array("data"=>$items));
    }

    /**
     *
     * @Route("/admin/add_content", name="add_content")
     */
    public function addContentAction(Request $request)
    {
        $em         = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("AppBundle:Blog");
        $content    = $repository->createNewBlog();
        $form       = $this->createForm('AppBundle\Form\BlogType',$content);
        $user       = $this->getUser()->getId();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $title     = $form->get('title')->getData();
            $content   = $form->get('content')->getData();
            $slug_link = Slugger::slugify($title);
            $blog      = new Blog();
            $blog       ->setTitle($title)
                        ->setContent($content)
                        ->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')))
                        ->setSlug($slug_link)
                        ->setUsers($this->getUser());


            $em->persist($blog);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render("admin/add_content.html.twig",['form' => $form->createView()]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/admin/edit/{id}", requirements={"id" = "\d+"}, name="edit_content")
     */
    public function editContentAction(Request $request, Blog $blog)
    {

        $em         = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("AppBundle:Blog");
        $form       = $this->createForm(BlogType::class,$blog);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

        $blog->setSlug(Slugger::slugify($blog->getTitle()));
            $blog->setUserid($this->getUser()->getId());
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('edit_content',array('id'=>$blog->getId()));
        }

        return $this->render("admin/add_content.html.twig",['form' => $form->createView()]);

    }

    /**
     * @param $id
     * @Route("/admin/delete/{id}", requirements={"id" = "\d+"}, name="delete_content")
     */
    public function deleteContentAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $adminentities = $em->getRepository('AppBundle:Blog')->find($id);

        $em->remove($adminentities);
        $em->flush();

        return $this->redirectToRoute('admin_home');
    }

}