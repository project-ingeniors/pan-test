<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $html_file = fopen('index-test.html','r');
        $html = fread($html_file,filesize('index-test.html'));
        fclose($html_file);

        return new Response($html);

/*        return $this->render('default/index.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
*/    }
}
