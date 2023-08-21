<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EarlyYearsPupilPremiumRecipient extends ModelBase
{

    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const RECIPIENT_FOR_ECONOMIC_REASONS = 'recipientForEconomicReasons';

    public const RECIPIENT_FOR_OTHER_REASONS = 'recipientForOtherReasons';

    protected $_resourceType = ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_RECIPIENT;

    /**
     * @param Query $query
     * @return EarlyYearsPupilPremiumRecipient[] | Collection
     * @throws Exception
     */
    public static function query(\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EarlyYearsPupilPremiumRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_RECIPIENT, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
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
     * @return bool
     */
    public function getRecipientForEconomicReasons()
    {
        return $this->getProperty('recipientForEconomicReasons');
    }

    /**
     * @param bool $recipientForEconomicReasons
     */
    public function setRecipientForEconomicReasons(bool $recipientForEconomicReasons = null)
    {
        $this->setProperty('recipientForEconomicReasons', $recipientForEconomicReasons);
    }

    /**
     * @return bool
     */
    public function getRecipientForOtherReasons()
    {
        return $this->getProperty('recipientForOtherReasons');
    }

    /**
     * @param bool $recipientForOtherReasons
     */
    public function setRecipientForOtherReasons(bool $recipientForOtherReasons = null)
    {
        $this->setProperty('recipientForOtherReasons', $recipientForOtherReasons);
    }

}
