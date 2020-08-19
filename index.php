<?php

require_once 'WriteSystem/WritableInterface.php';
require_once 'WriteSystem/WriterAbstract.php';
require_once 'WriteSystem/JSONWriter.php';
require_once 'Persons/PersonAbstract.php';
require_once 'Persons/Student.php';
require_once 'Persons/Coach.php';
require_once 'Persons/Guest.php';

$guest = new Guest('guest@gmail.com', 'Hello I am new guest', '755-02-20');
echo "<br>";
echo $guest->getSummaryLine();
echo "<br>";
echo $guest->getEmail();
echo "<hr>";

$student = new Student('John Doe', 'john@email.com', 25, 4.5);

echo $student->getSummaryLine();

echo "<br>";


$coach = new Coach('Alex', 'email@gmail.com', 28, 'PHP');

echo $coach->getSummaryLine();
echo "<br>";
echo $coach->getEmail();
echo "<hr>";

$jsonWriter = new JSONWriter();
$jsonWriter->addPerson($student);
$jsonWriter->addPerson($coach);
$jsonWriter->addPerson($guest);

echo $jsonWriter->write();