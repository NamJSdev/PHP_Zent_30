<?php
    class Student{
        protected $name;
        protected $gt;
        protected $date;
        protected $address;

        function setName($name)
        {
            $this->name = $name;
        }
        function setGT($gt)
        {
            $this->gt = $gt;
        }
        function setDate($date)
        {
            $this->date = $date;
        }
        function setAddress($address)
        {
            $this->address= $address;
        }

        function getName()
        {
            return $this->name;
        }
        function getGT()
        {
            return $this->gt;
        }
        function getDate()
        {
            return $this->date;
        }
        function getAddress()
        {
            return $this->address;
        }
    }
    $student = new Student();
    // Set
    $student->setName('Nguyễn Văn An');
    $student->setGT('Nam');
    $student->setDate('01/08/2005');
    $student->setAddress('Hà Nội');
    // Get
    echo 'Họ Tên : ' . $student->getName();
    echo '<br>';
    echo 'Giới Tính : ' . $student->getGT();
    echo '<br>';
    echo 'Ngày Sinh : ' . $student->getDate();
    echo '<br>';
    echo 'Quê Quán : ' . $student->getAddress();
?>