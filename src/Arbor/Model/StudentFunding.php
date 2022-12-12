<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentFunding extends ModelBase
{

    const STUDENT = 'student';

    const STUDENT_FUNDING_TYPE = 'studentFundingType';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const NOTE = 'note';

    protected $_resourceType = ResourceType::STUDENT_FUNDING;

    /**
     * @param Query $query
     * @return StudentFunding[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::STUDENT_FUNDING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentFunding
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_FUNDING, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return StudentFundingType
     */
    public function getStudentFundingType()
    {
        return $this->getProperty('studentFundingType');
    }

    /**
     * @param StudentFundingType $studentFundingType
     */
    public function setStudentFundingType(StudentFundingType $studentFundingType = null)
    {
        $this->setProperty('studentFundingType', $studentFundingType);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->getProperty('note');
    }

    /**
     * @param string $note
     */
    public function setNote($note = null)
    {
        $this->setProperty('note', $note);
    }


}
