<?php

namespace CCI\RamScoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use CCI\RamScoBundle\Entity\Personne;
use Symfony\Component\HttpFoundation\Request;


class YasminaController extends Controller

{
	 public function viewAction($id)
  {
    // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

    // Ici, on récupèrera depuis la base de données
    // l'annonce correspondant à l'id $id.
    // Puis on passera l'annonce à la vue pour
    // qu'elle puisse l'afficher

    return new Response("Affichage de l'annonce d'id : ".$id);
  }

    /*public function indexAction()

    {

        // On veut avoir l'URL de l'annonce d'id 5.

        $url = $this->get('router')->generate(

            'personne_view', // 1er argument : le nom de la route

            array('id' => 5), true    // 2e argument : les valeurs des paramètres

        );

        // $url vaut « /platform/advert/5 »


        return new Response("L'URL de l'annonce d'id 5 est : ".$url);

    }*/
    
    public function indexAction()

    {
$content = $this->get('templating')
->render('CCIRamScoBundle:Yasmina:index.html.twig', 
array('Nom' => 'Chatratfouine', 'Prenom' => 'Yasmina', 'Adresse' => 'Farfaraway', 'id' => '12'));
return new Response($content);

    }
    
    public function indexPersoAction()

    {
$content = $this->get('templating')
->render('CCIRamScoBundle:Yasmina:indexPerso.html.twig', 
array('Nom' => 'Chatratfouine', 'Prenom' => 'Yasmina', 'Adresse' => 'Farfaraway', 'id' => '12'));
return new Response($content);

    }
    
    public function findumondeAction()

    {
$content = $this->get('templating')
->render('CCIRamScoBundle:Yasmina:findumonde.html.twig', 
array('nom' => 'Yasmina'));
return new Response($content);

    }
    
    public function addAction(Request $request){
	//Création de l'entité
	$personne = new Personne();
	$personne->setNom('Makise');
	$personne->setPrenom('Kurisu');
	$personne->setAdresse('El Psy Kongroo');
	
	//Récupération de l'entity manager (em)
	$em = $this->getDoctrine()->getManager();
	
	//Persistance de l'entité
	$em->persist($personne);
	
	//Nettoyage de tout ce qui a été persisté avant
	$em->flush();
	
	//Revoir ce que ça fait... :/
	if ($request->isMethod('POST')) {

      $request->getSession()->getFlashBag()
      ->add('notice', 'Personne bien enregistrée.');
	return $this->redirect($this
		->generateUrl('personne_view', 
		array('id' => $personne->getId())));
		
		}
	
	return $this->render('CCIRamScoBundle:Yasmina:add.html.twig', 
	array('personne' => $personne));
    }
    

	//Page adherent avec formulaire pas reliée à la BDD
	public function adherentAction()
    {
		return $this->render('CCIRamScoBundle:Yasmina:adherent.html.twig');
    }
    
    
}
	
	


