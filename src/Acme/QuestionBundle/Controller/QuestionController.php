<?php

namespace Acme\QuestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\QuestionBundle\Document\Question;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $question = $this->get('doctrine_mongodb')
                ->getRepository()
                ->fin();
        if (!$question) {
            throw $this->createNotFoundException('No question found for name '.$id);
        }
        
        return $this->render('AcmeQuestionBundle:Default:index.html.twig', array('name' => $name));
    }
}
