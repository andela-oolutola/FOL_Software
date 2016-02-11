<?php
class Convert
{
	private $id;
	public $title;
	public $firstname;
	public $lastname;
	public $agerange;
	public $homeTelNum;
	public $officeTelNum;
	public $mobileTelNum;
	public $email;
	public $postcode;
	public $address;
	public $county;
	public $city;
	public $country;
	public $altarCallResponse;
	public $prayerPoints;
	public $regDate;
	
	
	public function __construct($title,$firstname,$lastname,$agerange,$homeTelNum,$officeTelNum,$mobileTelNum,$email,$postcode,$address,$county,$city,$country,$altarCallResponse,$prayerPoints,$regDate)
	{
		//$this->id = $id;
		$this->title = $title;
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->agerange = $agerange;
		$this->homeTelNum = $homeTelNum;
		$this->officeTelNum = $officeTelNum;
		$this->mobileTelNum = $mobileTelNum;
		$this->email = $email;
		$this->postcode = $postcode;
		$this->address = $address;
		$this->county = $county;
		$this->city = $city;
		$this->country = $country;
		$this->altarCallResponse = $altarCallResponse;
		$this->prayerPoints = $prayerPoints;
		$this->regDate = $regDate;
	}
}
?>