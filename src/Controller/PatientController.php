<?php

namespace App\Controller;

use App\Entity\TAbonner;
use App\Entity\TAgent;
use App\Entity\TDepartement;
use App\Entity\TFonction;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\TPatient;
use App\Entity\TSignev;
use App\Entity\TType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PatientController extends AbstractController
{
    /**
     * @Route("/", name="login")
     */
    public function index()
    {
        return $this->render('patient/login.html.twig', [
            'controller_name' => 'PatientController',
        ]);
    }

   
    // public function createFiche(Request $request, EntityManagerInterface $manager){
    //     $patient = new TPatient();
    //     $abonner = new TAbonner();
        
      
    //     if($request->request->count()>0){
    //         $_foreign = $this->getDoctrine()->getRepository(TType::class)->find($request->request->get('idType'));
    //         $patient->setNomcomplet($request->request->get('nomComplet'))
    //         ->setAge($request->request->get('age'))
    //         ->setGenre($request->request->get('genre'))
    //         ->setTelephone($request->request->get('telephone'))
    //         ->setAdressedomicile($request->request->get('adressedomicile'))
    //         ->setIdtype($_foreign);
    //         $manager->persist($patient);
    //         $abonner->setNomsociete($request->request->get('nomsociete'))
    //         ->setMatricule($request->request->get('matricule'))
    //         ->setNumerobon($request->request->get('numerobon'))
    //         ->setEtat($request->request->get('etat'));
    //         $manager->flush();
          
    //         // return $this->render('/creer-fiche.html.twig', [
    //         //       'type'=>$_type
    //         //     ]
    //           // );
    //     }
    //     $_type= $this->getDoctrine()->getRepository(TType::class)->findAll() ;
    //     return $this->render(
    //       'patient/creer-fiche.html.twig',[
    //         'type'=>$_type
    //       ]
          
    //     );
    // }

    /**
     * @Route("/essaie", name="essaie")
     */
    public function essaye(Request $request, EntityManagerInterface $manager){
         $essay = new TFonction();

         $form = $this->createFormBuilder($essay)
         ->add('nomFonction')
         ->getForm();

         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid())
         {
           $manager->persist($essay);
           $manager->flush();
         }
         return $this->render( 'patient/adminFonction.html.twig', [
          "formFonction"=>$form->createView()
        ]);
    }
    
    /**
     * @Route("/newAg", name="Age")
     */
    public function newAgent(Request $request, EntityManagerInterface $manager)
    {
       $agent = new TAgent();
       $ag = $this->createFormBuilder($agent)
                  ->add('nomComplet')
                  ->add('sexe')
                  ->add('grade')
                  ->add('idFonction',EntityType::class, [
                    'class'=> TFonction::class,
                    'choice_label' =>'nomFonction'
                  ])
                  ->add('etatCivil')
                  ->add('dateNaissance')
                  ->add('dateEngage')
                  ->add('categorieProfession')
                  ->add('niveauEtude')
                  ->add('acteMotivation')
                  ->add('commissionAff')
                  ->add('salaire')
                  ->add('prime')
                  ->add('fonctionAdmin')
                  ->add('matricule')
                  ->add('imageAgent')
                  ->add('idDepartement', EntityType::class, [
                    'class'=> TDepartement::class,
                    'choice_label'=>'nomDepartement'
                  ])
                  ->getForm();
          $ag->handleRequest($request);
         if($ag->isSubmitted() && $ag->isValid())
         {
           $manager->persist($agent);
           $manager->flush();

         }

         return $this->render( 'patient/admin.html.twig', [
          "formAgent"=>$ag->createView()
        ]);
    }

     /**
     * @Route("/signe",name="signe")
     */
     
    public function addSigne(Request $request, EntityManagerInterface $manager)
    {
         $signe = new TSignev();

         $vitaux = $this->createFormBuilder($signe)
                        ->add('idAgent', EntityType::class, [
                          'class'=>TAgent::class,
                          'choice_label'=>'nomComplet'
                        ])
                        ->add('idPatient', EntityType::class, [
                          'class'=>TPatient::class,
                          'choice_label'=>'nomcomplet'
                        ])
                        ->add('temperature')
                        ->add('tensionArt')
                        ->add('poids')
                        ->add('numeroEnregistre')
                        ->getForm();
            $vitaux->handleRequest($request);
            if($vitaux->isSubmitted && $vitaux->isValid()){
              $manager->persist($signe);
              $manager->flush();
            }
            return $this->render( 'patient/signeV.html.twig', [
              "formSign"=>$vitaux->createView()
            ]);
      }

      /**
     * @Route("/creer-fiche", name="creer_fiche")
     */

      public function newPatient(Request $request, EntityManagerInterface $manager)
      {
        $patt = new TPatient();
        $abonner = new TAbonner();
        $abon = $this->createFormBuilder($abonner)
                     ->add('nomSociete')
                     ->add('numeroBon')
                     ->add('matricule')
                     ->getForm();
        $patient = $this->createFormBuilder($patt)
                        ->add('nomComplet')
                        ->add('age')
                        ->add('genre')
                        ->add('telephone')
                        ->add('adresseDomicile')
                        ->add('idType', EntityType::class, [
                          'class'=>TPatient::class,
                          'choice_label'=>'idType'
                        ])
                        ->getForm();
                $patient->handleRequest($request);
              if($patient->isSubmitted() && $patient->isValid() &&
                 $abon->isSubmitted() && $abon->isValid())
              {
                $manager->persist($patient);
                $manager->persist($abon);
                $manager->flush();
              }
              return $this->render( 'patient/creer-fiche.html.twig', [
                "patientForm"=>$abon->createView()
              ]);
      }
}