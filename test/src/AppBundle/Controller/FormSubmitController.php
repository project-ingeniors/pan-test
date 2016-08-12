<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FormSubmitController extends Controller
{
	/**
	* @Route("/submit",name="submit, thank you")
	*/
	public function submitAction(Request $request) {
		return new Response("<h1> Thank You </h1>");
	}
}
