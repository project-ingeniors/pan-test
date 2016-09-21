<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ComplaintController extends Controller 
{

    /**
     * @Route("/complaint-form", name="form-page")
     */
    public function complainAction(Request $request)
    {
        $html_file = fopen('example files/complaint.html','r');
        $html = fread($html_file,filesize('example files/complaint.html'));
        fclose($html_file);

        return new Response($html);
    }
}
