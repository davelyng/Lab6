<?php

class FormInfoClass {
    private $lastName;
    private $firstName;
    private $middleInitial;
    private $age;
    private $contactNo;
    private $email;
    private $address;

    public function setLastName($lname) {
        $this->lastName = $lname;
    }

    public function setFirstName($fname) {
        $this->firstName = $fname;
    }

    public function setMiddleInitial($initial) {
        $this->middleInitial = $initial;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setContactNo($contactNo) {
        $this->contactNo = $contactNo;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getMiddleInitial() {
        return $this->middleInitial;
    }

    public function getAge() {
        return $this->age;
    }

    public function getContactNo() {
        return $this->contactNo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAddress() {
        return $this->address;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formInfo = new FormInfoClass();

    $formInfo->setLastName($_POST['lastName']);
    $formInfo->setFirstName($_POST['firstName']);
    $formInfo->setMiddleInitial($_POST['middleInitial']);
    $formInfo->setAge($_POST['age']);
    $formInfo->setContactNo($_POST['contactNo']);
    $formInfo->setEmail($_POST['email']);
    $formInfo->setAddress($_POST['address']);

    echo "<link rel='stylesheet' href='style.css'>";

    echo "<div class='output-container'>";
    echo "<h1>Information</h1>";
    echo "<p><span class='field-label'>Last Name:</span> " . htmlspecialchars($formInfo->getLastName()) . "</p>";
    echo "<p><span class='field-label'>First Name:</span> " . htmlspecialchars($formInfo->getFirstName()) . "</p>";
    echo "<p><span class='field-label'>Middle Initial:</span> " . htmlspecialchars($formInfo->getMiddleInitial()) . "</p>";
    echo "<p><span class='field-label'>Age:</span> " . htmlspecialchars($formInfo->getAge()) . "</p>";
    echo "<p><span class='field-label'>Contact No.:</span> " . htmlspecialchars($formInfo->getContactNo()) . "</p>";
    echo "<p><span class='field-label'>Email:</span> " . htmlspecialchars($formInfo->getEmail()) . "</p>";
    echo "<p><span class='field-label'>Address:</span> " . nl2br(htmlspecialchars($formInfo->getAddress())) . "</p>";
    echo "</div>";

    echo "</body>";
    echo "</html>";
}

?>
