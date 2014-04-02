<?php

namespace Acme\QuestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\QuestionBundle\Document\Question;
use Acme\QuestionBundle\Document\Answer;


use Acme\QuestionBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    
    public function indexAction(Request $request)
    {
        // Show all question
        $questions = $this->get('doctrine_mongodb')
                    ->getRepository('AcmeQuestionBundle:Question')
                    ->findAll();
        
        // Create form        
        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
            ->add('question', 'text')
            ->add('Ask know!', 'submit')
            ->getForm();
 
        $form->handleRequest($request);

        if ($form->isValid()) {
            // data es un array con claves 'name', 'email', y 'message'
            $data = $form->getData();
        }
 
        
        
        return $this->render(   'AcmeQuestionBundle::index.html.twig',
                                array
                                (     
                                    'questions' => $questions,
                                    'nP' => count($questions),
                                    'url' => $_SERVER['REQUEST_URI'],
                                    'form' => $form->createView()
                                )
        );
        
        
    }
    
    public function questionAction($id)
    {
//        if (is_null($action))
//        {
            // Get all data
            $question = $this->get('doctrine_mongodb')
                    ->getRepository('AcmeQuestionBundle:Question')
                    ->find($id);
            
            
            
            
            
            
            
//        }
//        else
//        {
//            // Delete all data
//            $questions = $this->get('doctrine_mongodb')
//                    ->getRepository('AcmeQuestionBundle:Question')
//                    ->findAll()
//                    ->drop();
//            
//        }
        
        
//        if (!count($questions) or is_string($action)) {
//          if (! count($datos['questions']) )
          if ( ! $question )
            return $this->render(  'AcmeQuestionBundle::default.html.twig',
                                    array
                                    (   
                                        'message' => 'No hay datos, créelos',
                                        'url' => $_SERVER['REQUEST_URI'].'create'
                                    )
            );
//        }
        
        // Response with all questions
//        print_r($questions);
//        die();
        return $this->render(   'AcmeQuestionBundle::question.html.twig',
                                array
                                (     
                                    'question' => $question,
                                    'answers' => count($question->getAnswers())
                                )
        );
    }
    
    
    
    public function createAction($pregunta)
    {
        
                
        $question = new Question();
        $question->setQuestiondescription($pregunta);
        
        
        $answer = new Answer();
        $answer->setAnswerdescription("Ejemplo de respuesta 1");
        $answer->setQuestion($question);
        
        $answer2 = new Answer();
        $answer2->setAnswerdescription("Ejemplo de respuesta 2");
        $answer2->setQuestion($question);
        
        $answer3 = new Answer();
        $answer3->setAnswerdescription("Ejemplo de respuesta 3");
        $answer3->setQuestion($question);
           
        
        // Add answers to question
        $question->addAnswer($answer);
        $question->addAnswer($answer2);
        $question->addAnswer($answer3);
        
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($question);
        $dm->persist($answer);
        $dm->persist($answer2);
        $dm->persist($answer3);
        
        
        $dm->flush();

        
        $data['id'] = $question->getId();
        $data['question'] = $question->getQuestiondescription();
        $data['c'] = count($question->getAnswers());
        
        foreach($question->getAnswers() as $answer){
            $data['answers'][] = $answer->getAnswerdescription();
        }
        
        
        
        return $this->render('AcmeQuestionBundle::create.html.twig', $data);
        
    }
    
    
    
    public function deleteAllAction()
    {
        return $this->indexAction('delete');
    }

    
    public function answersAction()
    {
        
        $answers = $this->get("doctrine_mongodb")
                    ->getRepository('AcmeQuestionBundle:Answer')
                    ->findAll();
        
        return $this->render("AcmeQuestionBundle::answers.html.twig",array('answers' => $answers));
        
    }
    
    
    
    public function formAction()
    {
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
 
        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();
 
        return $this->render('AcmeQuestionBundle::form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    
}
