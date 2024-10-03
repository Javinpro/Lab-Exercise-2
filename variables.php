<?php

class Variables {
    public $name;
    public $birthDate;
    public $sex;
    public $gpa;
    public $isStudent;

    // Constructor untuk inisialisasi properti
    public function __construct($name, $birthDate, $sex, $gpa, $isStudent) {
      $this->name = $name;
      $this->birthDate = new DateTime($birthDate); // DateTime untuk tanggal lahir
      $this->sex = $sex;
      $this->gpa = (float)$gpa; // Pastikan gpa adalah float
      $this->isStudent = (bool)$isStudent; // Boolean
    }

    // Menghitung umur dari tanggal lahir
    public function getAge() {
        $currentDate = new DateTime();
        $ageInterval = $this->birthDate->diff($currentDate);
        
        return $ageInterval->format('%y tahun, %m bulan, %d hari');
    }

    // Getter untuk nama
    public function get_name() {
      return $this->name;
    }

    // Getter untuk jenis kelamin
    public function get_sex() {
      return $this->sex;
    }

    // Getter untuk GPA
    public function get_gpa() {
      return $this->gpa;
    }

    // Getter untuk status isStudent (Yes/No)
    public function get_isStudent() {
      return $this->isStudent ? "Yes" : "No";
    }
}

// Contoh penggunaan
$variable = new Variables("Javin", "2005-12-12", "Male", 3.68, true);
echo $variable->get_name() . "<br>";
echo "Detail Umur: " . $variable->getAge() . "<br>";
echo "Sex: " . $variable->get_sex() . "<br>";
echo "GPA: " . $variable->get_gpa() . "<br>";   
echo "Is Student: " . $variable->get_isStudent() . "<br>";

?>
