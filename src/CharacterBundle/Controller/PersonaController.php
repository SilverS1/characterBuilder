<?php

namespace CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use CharacterBundle\Entity\Character;
use Symfony\Component\HttpFoundation\Response;

class PersonaController extends Controller
{

	/*
	* @Route("/{personaId}", name="persona_show")
	*/
	public function showAction($personaId)
	{

		$em = $this->getDoctrine()->getManager();


		$persona = $em->getRepository('CharacterBundle:Persona')
					->find($personaId);

		return $this->render('CharacterBundle:Persona:show.html.twig', 
			['persona' => $persona]);
	}

}
