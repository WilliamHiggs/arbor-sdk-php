<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MealSession extends ModelBase
{
    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const LOCATION_TEXT = 'locationText';

    public const LOCATION = 'location';

    public const MEAL_SITTING = 'mealSitting';

    public const REGISTER_OPENED_DATETIME = 'registerOpenedDatetime';

    public const REGISTER_CLOSED_DATETIME = 'registerClosedDatetime';

    public const INVOICED_DATETIME = 'invoicedDatetime';

    public const TIMETABLE_SLOT = 'timetableSlot';

    protected $_resourceType = ResourceType::MEAL_SESSION;

    /**
     * @param Query $query
     * @return MealSession[] | Collection
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

        $query->setResourceType(ResourceType::MEAL_SESSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MealSession
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL_SESSION, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty('locationText');
    }

    /**
     * @param string $locationText
     */
    public function setLocationText(string $locationText = null)
    {
        $this->setProperty('locationText', $locationText);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(\ModelBase $location = null)
    {
        $this->setProperty('location', $location);
    }

    /**
     * @return \Arbor\Model\MealSitting
     */
    public function getMealSitting()
    {
        return $this->getProperty('mealSitting');
    }

    /**
     * @param \Arbor\Model\MealSitting $mealSitting
     */
    public function setMealSitting(\Arbor\Model\MealSitting $mealSitting = null)
    {
        $this->setProperty('mealSitting', $mealSitting);
    }

    /**
     * @return \DateTime
     */
    public function getRegisterOpenedDatetime()
    {
        return $this->getProperty('registerOpenedDatetime');
    }

    /**
     * @param \DateTime $registerOpenedDatetime
     */
    public function setRegisterOpenedDatetime(\DateTime $registerOpenedDatetime = null)
    {
        $this->setProperty('registerOpenedDatetime', $registerOpenedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRegisterClosedDatetime()
    {
        return $this->getProperty('registerClosedDatetime');
    }

    /**
     * @param \DateTime $registerClosedDatetime
     */
    public function setRegisterClosedDatetime(\DateTime $registerClosedDatetime = null)
    {
        $this->setProperty('registerClosedDatetime', $registerClosedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getInvoicedDatetime()
    {
        return $this->getProperty('invoicedDatetime');
    }

    /**
     * @param \DateTime $invoicedDatetime
     */
    public function setInvoicedDatetime(\DateTime $invoicedDatetime = null)
    {
        $this->setProperty('invoicedDatetime', $invoicedDatetime);
    }

    /**
     * @return \Arbor\Model\TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty('timetableSlot');
    }

    /**
     * @param \Arbor\Model\TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(\Arbor\Model\TimetableSlot $timetableSlot = null)
    {
        $this->setProperty('timetableSlot', $timetableSlot);
    }
}
