<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class RegistrationFormTutor extends \ModelBase
{
    public const REGISTRATION_FORM = 'registrationForm';

    public const STAFF = 'staff';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::REGISTRATION_FORM_TUTOR;

    /**
     * @param Query $query
     * @return RegistrationFormTutor[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::REGISTRATION_FORM_TUTOR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RegistrationFormTutor
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REGISTRATION_FORM_TUTOR, $id);
    }

    /**
     * @return RegistrationForm
     */
    public function getRegistrationForm()
    {
        return $this->getProperty('registrationForm');
    }

    /**
     * @param RegistrationForm $registrationForm
     */
    public function setRegistrationForm(\RegistrationForm $registrationForm = null)
    {
        $this->setProperty('registrationForm', $registrationForm);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
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
}
