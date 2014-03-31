<?php

namespace Acme\QuestionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use \Doctrine\Common\Collections\ArrayCollection;
use \Acme\QuestionBundle\Document\Answer;

/**
 * Last: MongoDB\Document (do not forget write @ after MongoDB)
 * Test with bd and collection: 
 * @MongoDB\Document(db="QuestionsAnswers", collection="questions")
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
    private $questiondescription;
    
    
    
    /**
     * 
     * @MongoDB\ReferenceMany(targetDocument="Answer")
     */
    private $answers;
    
    
    
    
    
    public function __construct() {
        $this->answers = new ArrayCollection();
    }


    

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
     * Set questiondescription
     *
     * @param string $questiondescription
     * @return self
     */
    public function setQuestionDescription($questiondescription)
    {
        $this->questiondescription = $questiondescription;
        return $this;
    }

    /**
     * Get questiondescription
     *
     * @return string $questiondescription
     */
    public function getQuestionDescription()
    {
        return $this->questiondescription;
    }

    /**
     * Add answer
     *
     * @param Acme\QuestionBundle\Document\Answer $answer
     */
    public function addAnswer(\Acme\QuestionBundle\Document\Answer $answer)
    {
        $this->answers[] = $answer;
    }

    /**
     * Remove answer
     *
     * @param Acme\QuestionBundle\Document\Answer $answer
     */
    public function removeAnswer(\Acme\QuestionBundle\Document\Answer $answer)
    {
        $this->answers->removeElement($answer);
    }

    /**
     * Get answers
     *
     * @return Doctrine\Common\Collections\Collection $answers
     */
    public function getAnswers()
    {
        return $this->answers;
    }
        
}
