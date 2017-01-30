<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Evenement;
use AppBundle\Entity\Produit;
use AppBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
	
    /**
     * @Route("/tournoi", name="tournoi")
     */
    public function tournoiAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $evenements= $em->getRepository("AppBundle:Evenement")->findall();

        return $this->render('default/tournoi.html.twig', array(
            'evenements' => $evenements
            ));
    }	
	
    /**
     * @Route("/classement", name="classement")
     */
    public function classementAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $users= $em->getRepository("AppBundle:User")->findall();

        return $this->render('default/classement.html.twig', array(
            'users' => $users
            ));
    }   
	
    /**
     * @Route("/shop", name="shop")
     */
    public function shopAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $produits= $em->getRepository("AppBundle:Produit")->findall();

        return $this->render('default/shop.html.twig', array(
            'produits' => $produits
            ));
    }    

    /**
     * @Route("/user/{id}", name="user", requirements={"id": "\d+"}))
     */
    public function userAction($id)
    {
       $em = $this->getDoctrine()->getManager();

         $user = $em->getRepository('AppBundle:User')->find($id);

        if (null === $user) {
        throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        return $this->render('default/user.html.twig',array(
            'user' => $user
            ));
    }     


     /**
     * @Route("/battle", name="battle")
     */
    public function battleAction(Request $request)
    {
        //on recupere variable et on les transmet ensuite dans le render []
        return $this->render('default/battle.html.twig', []);
    }   

 
    /**
    * @Route("/test", name="test")
    */ 
     public function testAction()
    {
      $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('AppBundle:User')
      ;
    $listusers = $repository->myFindAll();
    }

}
