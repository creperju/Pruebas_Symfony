<?php

namespace Acme\QuestionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use \Acme\QuestionBundle\Document\Question;

/**
 * @MongoDB\Document(db="QuestionsAnswers", collection="answers")
 */
class Answer
{
    /**
    * @MongoDB\Id
    */
    private $id;
    
    
    /**
    * @MongoDB\string
    */
    private $answerdescription;
    
    
    /**
    * @MongoDB\ReferenceOne(targetDocument="Question")
    */
    private $question;
    
    
    

    
    

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set answerdescription
     *
     * @param string $answerdescription
     * @return self
     */
    public function setAnswerDescription($answerdescription)
    {
        $this->answerdescription = $answerdescription;
        return $this;
    }

    /**
     * Get answerdescription
     *
     * @return string $answerdescription
     */
    public function getAnswerDescription()
    {
        return $this->answerdescription;
    }

    /**
     * Set question
     *
     * @param Acme\QuestionBundle\Document\Question $question
     * @return self
     */
    public function setQuestion(\Acme\QuestionBundle\Document\Question $question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Get question
     *
     * @return Acme\QuestionBundle\Document\Question $question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
