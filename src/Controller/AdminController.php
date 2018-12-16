<?php

namespace App\Controller;

use App\Entity\Liens;
use App\Entity\User;
use App\Form\AjoutUserType;
use App\Form\LiensType;
use App\Form\EditLiensType;
use App\Form\ModifUserType;
use App\Repository\LiensRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AdminController extends AbstractController
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }


    /**
     * @Route("/admin", name="admin")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

    public function admin(Request $request)   {
        //création du formulaire ajout
        $form_ajout = $this->createForm(AjoutUserType::class);


        //on récupère la requete ajout
        $form_ajout->handleRequest($request);

        //on teste la requete ajout
        if ($form_ajout->isSubmitted() && $form_ajout->isValid()) {

            //on récupere les données du formulaire
            $nvx_utilisateur = $form_ajout->getData();

            //encodage du MDP
            $nvx_utilisateur->setPassword($this->passwordEncoder->encodePassword($nvx_utilisateur,$nvx_utilisateur->getPassword()));

            //on envoie à la DB
            $em = $this->getDoctrine()->getManager();
            $em->persist($nvx_utilisateur);
            $em->flush();

            //message d'ajout ok
            echo ("<p class='alert text-danger' id='suppr_message'>Utilisateur ajouté!</p>");
            flush();


            //retour à l'accueil
            return $this->redirectToRoute('accueil');
        }



        return $this->render('admin/admin.html.twig', [
            'controller_name' => 'AdminController',
            'Form'=> $form_ajout->createView()
        ]);
    }

    /**
     * @Route("/modifier_utilisateur", name="modif_usr")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

    public function modif_usr(Request $request)    {

        //création du formulaire modif
        $form_modif = $this->createForm(ModifUserType::class);

        //on récupère la requete modif
        $form_modif->handleRequest($request);


        //on teste la requete modif
        if ($form_modif->isSubmitted() && $form_modif->isValid()) {

            //si on choisi de modifier l'utilisateur
            if ($form_modif->get('save')->isClicked()){

                //on récupere l'id utilisateur
                $id =$form_modif ->getData()->getId();
                $modif_utilisateur=$form_modif->getData();


                //on remplace les données
                $em = $this->getDoctrine()->getManager();
                $utilisateur = $em->getRepository(User::class)->find($id);
                $utilisateur->setUsername($form_modif->getData()->getUsername());
                $utilisateur->setPassword($this->passwordEncoder->encodePassword($modif_utilisateur,$modif_utilisateur->getPassword()));

                $em->persist($utilisateur);
                $em->flush();

                //message de suppression ok
                echo ("<p class='alert text-danger' id='suppr_message'>Utilisateur modifié!</p>");
                flush();

            }

            //si on choisi de supprimer l'utilisateur
            if ($form_modif->get('delete')->isClicked()){

                //on récupere l'id utilisateur
                $id = $form_modif->getData()->getId();

                //on supprime les données
                $em = $this->getDoctrine()->getManager();
                $utilisateur = $em->getRepository(User::class)->find($id);
                $em->remove($utilisateur);

                $em->flush();

                //message de suppression ok
                echo ("<p class='alert text-danger' id='suppr_message'>Utilisateur supprimé!</p>");
                flush();

            }

        }

        //on recherche tous les utilisateurs de la DB
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findAll();

        return $this->render('admin/modif_usr.html.twig', [
            'controller_name' => 'AdminController',
            'Users'=> $user,
            'Form'=>$form_modif->createView(),

        ]);

    }


    /**
     * @Route("/supprimer_lien", name="suppr_lien")
     * @param Request $request
     * @param LiensRepository $liens
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function supprimer_lien (Request $request) {

        //création de la query
        $id = $request->query->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $lien = $entityManager->getRepository(Liens::class)->find($id);
        $entityManager->remove($lien);
        $entityManager->flush();


        //message de suppression ok
        echo ("<p class='alert text-danger' id='suppr_message'>Lien supprimé!</p>");
        flush();

        //retour à l'accueil
        return $this->redirectToRoute('accueil');

    }

//TODO gérer les tags du js ajout lien depuis que le nom des composants html à changé
    /**
     * @Route("/edit_lien", name="edit_lien")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function edit_lien(Request $request)
    {

        //création du formulaire
        $form = $this->createForm(EditLiensType::class);


        //on récupère la requete
        $form->handleRequest($request);

        //on teste la requete
        if ($form->isSubmitted() && $form->isValid()) {

            //on récupere les données du formulaire
            $nvx_lien = $form->getData();

            //on récupère le lien
            $id = $request->query->get('id');
            $em = $this->getDoctrine()->getManager();
            $lien = $em->getRepository(Liens::class)->find($id);

            //on actualise les données
            $lien->setTitre($nvx_lien->getTitre());
            $lien->setURL($nvx_lien->getURL());
            $lien->setDescription($nvx_lien->getDescription());
            $lien->setTAGS($nvx_lien->getTAGS());

            //on envoie à la DB
            $em->persist($lien);
            $em->flush();

            //message d'ajout ok
            echo ("<p class='alert text-danger' id='suppr_message'>Lien modifié!</p>");
            flush();

            //retour à l'accueil
            return $this->redirectToRoute('accueil');
        }

        //on récupére le lien à modifier
        $id = $request->query->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $lien = $entityManager->getRepository(Liens::class)->find($id);


        //si pas de requete on affiche le formulaire
        return $this->render('admin/edit_lien.html.twig', [
            'controller_name' => 'AccueilController',
            'Form'=> $form->createView(),
            'Lien'=> $lien
        ]);
    }


}
