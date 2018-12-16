<?php

namespace App\Controller;

use App\Entity\Liens;
use App\Form\LiensType;
use App\Repository\LiensRepository;
use Knp\Component\Pager\PaginatorInterface;
use function MongoDB\BSON\toJSON;
use SimpleXMLElement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     * @param Request $request
     * @param LiensRepository $liens
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(Request $request, LiensRepository $liens, PaginatorInterface $paginator)
    {

        //on recherche tous les liens de  la DB
        $queryBuilder = $liens->findAll();

        $pagination = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5);

        //On lance la vue associée
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'Liens'=>$pagination,
        ]);
    }


    /**
     * @Route("/recherche", methods={"GET"} , name="recherche")
     * @param Request $request
     * @param LiensRepository $liens
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function recherche(Request $request, LiensRepository $liens, PaginatorInterface $paginator)
    {
        //recherche par tag
        if($request->query->get('tag')) {

            //création de la query
            $q = $request->query->get('tag');
            $queryBuilder = $liens->findByTag($q);

            //init le paginator
            $pagination = $paginator->paginate(
                $queryBuilder, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                3);

            //On lance la vue associée
            return $this->render('accueil/index.html.twig', [
                'controller_name' => 'AccueilController',
                'Liens'=>$pagination,
            ]);

        //si pas de recherche par TAG on lance la recherche normale
        } else {

            //premiere recherche dans le titre
            $q = $request->query->get('q');
            $queryBuilder = $liens->findByTitle($q);


            $pagination = $paginator->paginate(
                $queryBuilder, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                3);


            //seconde dans la description si on trouve rien
            if(!$queryBuilder->getQuery()->getResult()) {
                $queryBuilder = $liens->findByDesc($q);
                $pagination = $paginator->paginate(
                    $queryBuilder, /* query NOT result */
                    $request->query->getInt('page', 1)/*page number*/,
                    3);

                //si vraiment rien on lance ça
                if(!$queryBuilder->getQuery()->getResult()) {
                    return $this->render('accueil/index.html.twig', [
                        'controller_name' => 'AccueilController',
                        'Liens'=>null,
                    ]);
                }
        }

        //On lance la vue associée
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'Liens'=>$pagination,
        ]);
        }
    }

    /**
     * @Route("/ajout_lien", name="ajout_lien")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function ajout_lien(Request $request)
    {

        //création du formulaire
        $form = $this->createForm(LiensType::class);


        //on récupère la requete
        $form->handleRequest($request);

        //on teste la requete
        if ($form->isSubmitted() && $form->isValid()) {

            //on récupere les données du formulaire
            $nvx_lien = $form->getData();

            //on envoie à la DB
            $em = $this->getDoctrine()->getManager();
            $em->persist($nvx_lien);
            $em->flush();

            //message d'ajout ok
            echo ("<p class='alert text-danger' id='suppr_message'>Lien ajouté!</p>");
            flush();

            //retour à l'accueil
            return $this->redirectToRoute('accueil');
        }

        //si pas de requete on affiche le formulaire
        return $this->render('ajout_lien/ajout_lien.html.twig', [
            'controller_name' => 'AccueilController',
            'Form'=> $form->createView()
        ]);
    }

     /**
     * @Route("/rss", defaults={"_format"="xml"}, name="rss")
     *
     */
     public function rss()
    {

        //on recherche tous les liens de la DB
        $repository = $this->getDoctrine()->getRepository(Liens::class);
        $Liens = $repository->findAll();


        //On lance la vue associée
        $response = $this->renderView('rss/rss.xml.twig', [
            'controller_name' => 'AccueilController',
            'Liens'=>$Liens,
        ]);


        return new Response($response);


    }





}
