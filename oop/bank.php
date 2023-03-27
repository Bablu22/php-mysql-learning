<?php

class Bank
{
    public $accountName;
    public $accountNumber = 101;
    public $ballance = 50;

    function __construct($accountName, $accountNumber)
    {
        if ($accountNumber !== $this->accountNumber) {
            throw new Exception('Your account number is invalid');
        }

        $this->accountNumber = $accountNumber;
        $this->accountName = $accountName;

    }

    function depositAmount($amount)
    {
        $this->ballance = $this->ballance + $amount;

        echo "You deposited $amount taka\n";
        return $this;
    }

    function deductAmount($amount)
    {

        if ($this->ballance <= 0) {
            echo 'No ballance in your account\n' . PHP_EOL;
            return;
        }
        if ($this->ballance <= $amount) {
            echo 'Requested amount is gratter than ballance\n' . PHP_EOL;
            return;
        }
        echo "You deduct $amount taka\n";
        $this->ballance = $this->ballance - $amount;
        return $this;
    }

    function checkBallance()
    {
        echo "Your ballacne is $this->ballance\n";
        return $this;
    }

}

try {
    $bank = new Bank('Bablu Mia', 111);

    $bank->checkBallance();
    $bank->depositAmount(200)->checkBallance();
    $bank->deductAmount(50)->checkBallance();
} catch (Exception $e) {

    echo $e->getMessage();
}