<?php

abstract class Customer
{
    public $id;
    protected $name;
    protected $email;
    public $balance;

    public function getCustomer($id)
    {
        $this->id = $id;
        return 'John Doe ' . $id;
    }

    public function __construct($id, $name, $email, $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }

    /*    public function __destruct()
        {
            echo "The Destructor ran";
        }*/

    abstract public function getEmail();
}

//$customer = new Customer(99, 'Mark', 'email@email.com', '333');
//echo $customer->getCustomer(1);
//echo $customer->getCustomer(10);
//echo $customer->name;
//echo $customer->getEmail();

class Subscriber extends Customer
{
    public $plan;

    public function __construct($id, $name, $email, $balance, $plan)
    {
        parent::__construct($id, $name, $email, $balance);
        $this->plan = $plan;
    }

    public function getEmail()
    {
        return $this->email;
    }

}

$subscriber = new Subscriber(99, 'Timmy', 'email2@email.com', '50031', 'Beginer');
echo $subscriber->getEmail();


class User{
    private $username;
    private $password;
    //use static when you don't want to change
    public static $passwordLength = 5;

    public static function getPasswordLength(){
        //use "self" with static and no "this"
        return self::$passwordLength;
    }
}

echo "<br>";
echo User::getPasswordLength();
echo "<br>";
echo User::$passwordLength;

?>