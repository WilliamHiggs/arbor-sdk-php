<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CandidateRegistrationProposal extends ModelBase
{
    const CANDIDATE_PROPOSAL = 'candidateProposal';

    const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    const QUALIFICATION_AWARD = 'qualificationAward';

    const APPROVED_BY_STAFF = 'approvedByStaff';

    const APPROVED_DATETIME = 'approvedDatetime';

    const REJECTED_BY_STAFF = 'rejectedByStaff';

    const REJECTED_DATETIME = 'rejectedDatetime';

    protected $_resourceType = ResourceType::CANDIDATE_REGISTRATION_PROPOSAL;

    /**
     * @param Query $query
     * @return CandidateRegistrationProposal[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_REGISTRATION_PROPOSAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateRegistrationProposal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_REGISTRATION_PROPOSAL, $id);
    }

    /**
     * @return CandidateProposal
     */
    public function getCandidateProposal()
    {
        return $this->getProperty('candidateProposal');
    }

    /**
     * @param CandidateProposal $candidateProposal
     */
    public function setCandidateProposal(CandidateProposal $candidateProposal = null)
    {
        $this->setProperty('candidateProposal', $candidateProposal);
    }

    /**
     * @return QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty('qualificationAvailabilityInstance');
    }

    /**
     * @param QualificationAvailabilityInstance $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty('qualificationAvailabilityInstance', $qualificationAvailabilityInstance);
    }

    /**
     * @return QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty('qualificationAward');
    }

    /**
     * @param QualificationAward $qualificationAward
     */
    public function setQualificationAward(QualificationAward $qualificationAward = null)
    {
        $this->setProperty('qualificationAward', $qualificationAward);
    }

    /**
     * @return Staff
     */
    public function getApprovedByStaff()
    {
        return $this->getProperty('approvedByStaff');
    }

    /**
     * @param Staff $approvedByStaff
     */
    public function setApprovedByStaff(Staff $approvedByStaff = null)
    {
        $this->setProperty('approvedByStaff', $approvedByStaff);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty('approvedDatetime');
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty('approvedDatetime', $approvedDatetime);
    }

    /**
     * @return Staff
     */
    public function getRejectedByStaff()
    {
        return $this->getProperty('rejectedByStaff');
    }

    /**
     * @param Staff $rejectedByStaff
     */
    public function setRejectedByStaff(Staff $rejectedByStaff = null)
    {
        $this->setProperty('rejectedByStaff', $rejectedByStaff);
    }

    /**
     * @return \DateTime
     */
    public function getRejectedDatetime()
    {
        return $this->getProperty('rejectedDatetime');
    }

    /**
     * @param \DateTime $rejectedDatetime
     */
    public function setRejectedDatetime(\DateTime $rejectedDatetime = null)
    {
        $this->setProperty('rejectedDatetime', $rejectedDatetime);
    }
}
