<?php
/**
 * @author Leonardo Thibes <leonardothibes@gmail.com>
 * @copyright Copyright (c) The Authors
 */

namespace PayU\Entity\Transaction;

use \PayU\Entity\EntityInterface;

/**
 * Payer entity class.
 *
 * @package PayU\Entity
 * @author Leonardo Thibes <leonardothibes@gmail.com>
 * @copyright Copyright (c) The Authors
 */
class PayerEntity implements EntityInterface
{
	/**
	 * Generate arry order.
	 * @return array
	 */
	public function toArray()
	{
		return array();
	}
}