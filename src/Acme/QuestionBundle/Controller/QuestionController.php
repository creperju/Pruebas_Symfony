<?php

namespace Acme\QuestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\QuestionBundle\Document\Question;
use Acme\QuestionBundle\Document\Answer;
use \Symfony\Component\HttpFoundation\Request;
use Acme\QuestionBundle\Form\QuestionType;
use Acme\QuestionBundle\Form\AnswerType;


class QuestionController extends Controller
{
    
    /**
     * Show all questions and register new question in a form.
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     */
    public function indexAction(Request $request)
    {
        // Show all question
        $questions = $this->get('doctrine_mongodb')
                    ->getRepository('AcmeQuestionBundle:Question')
                    ->findAll();
        
        
        $question = new Question();
        $form = $this->createForm(new QuestionType(), $question);
        
        
        /*// Create form        
        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
            ->add('question', 'text')
            ->add('Ask know!', 'submit')
            ->getForm();
        */
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            // data es un array con claves 'question'
//            $data = $form->get('questiondescription')->getData();
            
//            print_r($data);exit(0);
//            
//            $question = new Question();
//            $question->setQuestionDescription($data['question']);
//            
            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($question);
            $dm->flush();
            
            
            
            // generateUrl contiene el nombre que se le da
            // en routing.yml con su patron y metodo a ejecutar
            return $this->redirect($this->generateUrl('acme_question_homepage'));
            
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
    
    
    /**
     * Show question with it answers and register new answer.
     * 
     * @param type $id
     * @return type
     */
    public function questionAction($id, Request $request)
    {
            // Find a question and it answers.
            $question = $this->get('doctrine_mongodb')
                    ->getRepository('AcmeQuestionBundle:Question')
                    ->find($id);


            /*
            // Create form        
            $defaultData = array('message' => 'Type your message here');
            $form = $this->createFormBuilder($defaultData)
                    ->add('answer', 'textarea')
                    ->add('Answer now!', 'submit')
                    ->getForm();
            */
            
            $answer = new Answer();
            $form = $this->createForm(new AnswerType(), $answer);
        
            
            $form->handleRequest($request);

            if ($form->isValid()) {
                // data es un array con claves 'question', 'answer'
//                $data = $form->getData();
//
//                $answer = new Answer();
//                
//                print_r($data);print($id);exit(0);
//                
//                $answer->setQuestion($question);
//                $answer->setAnswerDescription($data['answer']);
//                
                $question->addAnswer($answer);
                

                $dm = $this->get('doctrine_mongodb')->getManager();
                
                $dm->persist($question);
                $dm->persist($answer);
                $dm->flush();



                // generateUrl contiene el nombre que se le da
                // en routing.yml con su patron y metodo a ejecutar
                return $this->redirect($this->generateUrl(
                                                    'acme_question_question',
                                                    array('id' => $id)
                                                )
                                );

            }
            




            if ( ! $question )
                return $this->render(  'AcmeQuestionBundle::default.html.twig',
                                        array
                                        (   
                                            'message' => 'Pregunta no encontrada',
                                            'url' => $this->generateUrl('acme_question_homepage')
                                        )
                );
          
          
          
          
          
            return $this->render(   'AcmeQuestionBundle::question.html.twig',
                                    array
                                    (     
                                        'question' => $question,
                                        'answers' => count($question->getAnswers()),
                                        'form' => $form->createView()
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
    
    
    
    
}
