<?php
namespace Trustev\Entities {

	/**
	 * Transaction Object - includes details such as Transaction Amount, Currency, Items and Transaction delivery/billing address.
	 */
	class TransactionBase {
				
		/**
		* This is the Transaction Id. This Id is returned when Transaction information has been added to a Trustev Case. 
        * This Id is required should you wish to update the Transaction details after a Trustev Case has been added.
        * Please note: this Id is always returned from the Trustev API as a reference Id to the specific object.
		* @var string
		*/
		public $Id;
		
		/**
		* Total Value of the Transaction.
		* @var float
		*/
		public $TotalTransactionValue;
		
		/**
		* Currency Type Code. Standard Currency Type codes can be found at http://www.xe.com/currency
		* @var string
		*/
		public $Currency;
		
		/**
		* Current Timestamp. Accepted format: yyyy-MM-ddTHH:mm:ss.fffZ
		* @var \DateTime
		*/
		public $Timestamp;
		
		/**
		* Addresses Object - Contains standard/delivery/billing information. 
        * Please see Address Object for further parameter information.
		* @var AddressBase[]
		*/
		public $Addresses;
		
		/**
		* Items Object - contains details on Item Name, Quantity and Item Value. 
        * Please see Items Object for further parameter information.
		* @var TransactionItemBase[]
		*/
		public $Items;

		/**
		* Emails Object - contains details on Email. 
        * Please see Items Object for further parameter information.
		* @var EmailBase[]
		*/
		public $Emails;

		/**
		* @param $object null|array
		*/
		public function __construct($object = null) {
			if($object!=null)			{
				if(array_key_exists("Id", $object)) $this->Id = $object["Id"];
				if(array_key_exists("TotalTransactionValue", $object)) $this->TotalTransactionValue = $object["TotalTransactionValue"];
				if(array_key_exists("Currency", $object)) $this->Currency = $object["Currency"];
				if(array_key_exists("Timestamp", $object)) $this->Timestamp = $object["Timestamp"];
				if(array_key_exists("Addresses", $object)) $this->Addresses = $object["Addresses"];
				if(array_key_exists("Items", $object)) $this->Items = $object["Items"];
				if(array_key_exists("Emails", $object)) $this->Emails = $object["Emails"];

						}
		}
	}
}

