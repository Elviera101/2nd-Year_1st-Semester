<?php
class BankAccount {
    private $accountNumber;
    private $accountHolder;
    private $balance;

    public function __construct($accountNumber, $accountHolder, $balance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
        }
    }

    public function withdraw($amount){
        if($amount > 0 && $this->balance >= $amount){
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds!<br>";
        }
    }

    public function getBalance(){
        return $this->balance;
    }

    public function getAccountHolder(){
        return $this->accountHolder;
    }

    public function setAccountHolder($accountHolder){
        $this->accountHolder = $accountHolder;
    }

    public function getAccountNumber(){
        return $this->accountNumber;
    }
}
echo "<h3>--- Bank Account Depositing  500 and Withdrawing 100  ---</h3>";
$account = new BankAccount("123456789", "Martin Angela", 1000000);
$account->deposit(500);
$account->withdraw(100);
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Account Holder: " . $account->getAccountHolder() . "<br>";
echo "Bank Account Balance: " . $account->getBalance() . "<br>";

class SavingAccount extends BankAccount {
    private $interestRate;

    public function __construct($accountNumber, $accountHolder, $balance, $interestRate) {
        parent::__construct($accountNumber, $accountHolder, $balance);
        $this->interestRate = $interestRate;
    }

    public function applyInterest(){
        $interest = $this->getBalance() * $this->interestRate;
        $this->deposit($interest);
    }

    public function getInterestRate(){
        return $this->interestRate;
    }

    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }
}

echo "<h3>--- Savings Account with 0.05 interest ---</h3>";
$savings = new SavingAccount("123456789", "Martin Angela", 1000000, 0.05);
$savings->applyInterest();
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Account Holder: " . $account->getAccountHolder() . "<br>";
echo "Savings Balance: " . $savings->getBalance() . "<br>";

class Customer {
    private $name;
    private $bankAccount;

    public function __construct($name, BankAccount $bankAccount) {
        $this->name = $name;
        $this->bankAccount = $bankAccount;
    }

    public function deposit($amount){
        $this->bankAccount->deposit($amount);
    }

    public function withdraw($amount){
        $this->bankAccount->withdraw($amount);
    }

    public function showBalance(){
        echo $this->name . "'s Balance: " . $this->bankAccount->getBalance() . "<br>";
    }

    public function changeAccountHolder($newName){
        $this->bankAccount->setAccountHolder($newName);
    }
}

echo "<h3>--- Customer Changing Name ---</h3>";
$customer = new Customer("Angela", $account);
$customer->changeAccountHolder("Angela G. Martin");
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Account Holder: " . $account->getAccountHolder() . "<br>";
echo "<br>";
$customer->showBalance();
echo "Savings Balance: " . $savings->getBalance() . "<br>";
echo "<br>";
echo "Updated Account Holder: " . $account->getAccountHolder() . "<br>";
?>
