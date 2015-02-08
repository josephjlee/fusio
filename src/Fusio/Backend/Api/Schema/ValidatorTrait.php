<?php

namespace Fusio\Backend\Api\Schema;

use Fusio\Backend\Filter\Schema as Filter;
use PSX\Filter as PSXFilter;
use PSX\Validate;
use PSX\Validate\Property;
use PSX\Validate\RecordValidator;

trait ValidatorTrait
{
	protected function getValidator()
	{
		return new RecordValidator(new Validate(), array(
			new Property('id', Validate::TYPE_INTEGER, array(new PSXFilter\PrimaryKey($this->tableManager->getTable('Fusio\Backend\Table\Schema')))),
			new Property('name', Validate::TYPE_STRING),
		));
	}
}
