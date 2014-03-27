<?php

namespace Acme\QuestionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class Question
{
    /**
    * @MongoDB\Id
    */
    private $id;
    
    
    /**
    * @MongoDB\String
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
     * Set question
     *
     * @param string $question
     * @return self
     */
    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Get question
     *
     * @return string $question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
