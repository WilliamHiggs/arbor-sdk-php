<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class UserDefinedFieldImport extends ModelBase
{

    const USER_DEFINED_IMPORT_JOB = 'userDefinedImportJob';

    const ENTITY = 'entity';

    const VALUE = 'value';

    const ROW_INDEX = 'rowIndex';

    const ERRORS = 'errors';

    const REQUIRED_ERRORS = 'requiredErrors';

    protected $_resourceType = ResourceType::USER_DEFINED_FIELD_IMPORT;

    /**
     * @param Query $query
     * @return UserDefinedFieldImport[] | Collection
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

        $query->setResourceType(ResourceType::USER_DEFINED_FIELD_IMPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserDefinedFieldImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_DEFINED_FIELD_IMPORT, $id);
    }

    /**
     * @return UserDefinedFieldImportJob
     */
    public function getUserDefinedImportJob()
    {
        return $this->getProperty('userDefinedImportJob');
    }

    /**
     * @param UserDefinedFieldImportJob $userDefinedImportJob
     */
    public function setUserDefinedImportJob(UserDefinedFieldImportJob $userDefinedImportJob = null)
    {
        $this->setProperty('userDefinedImportJob', $userDefinedImportJob);
    }

    /**
     * @return ModelBase
     */
    public function getEntity()
    {
        return $this->getProperty('entity');
    }

    /**
     * @param ModelBase $entity
     */
    public function setEntity(ModelBase $entity = null)
    {
        $this->setProperty('entity', $entity);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->getProperty('value');
    }

    /**
     * @param string $value
     */
    public function setValue($value = null)
    {
        $this->setProperty('value', $value);
    }

    /**
     * @return int
     */
    public function getRowIndex()
    {
        return $this->getProperty('rowIndex');
    }

    /**
     * @param int $rowIndex
     */
    public function setRowIndex($rowIndex = null)
    {
        $this->setProperty('rowIndex', $rowIndex);
    }

    /**
     * @return string
     */
    public function getErrors()
    {
        return $this->getProperty('errors');
    }

    /**
     * @param string $errors
     */
    public function setErrors($errors = null)
    {
        $this->setProperty('errors', $errors);
    }

    /**
     * @return string
     */
    public function getRequiredErrors()
    {
        return $this->getProperty('requiredErrors');
    }

    /**
     * @param string $requiredErrors
     */
    public function setRequiredErrors($requiredErrors = null)
    {
        $this->setProperty('requiredErrors', $requiredErrors);
    }


}
