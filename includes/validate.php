<?php

class Validate extends mysqli
{
    public $conn = null;
    public $query = null;
    public $errorMessage = "";
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function isNumRows($result)
    {
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function loadDept($userCredential)
    {
        $deptCode = null;
        $this->query = "SELECT * FROM users WHERE email = '$userCredential' OR user_id = '$userCredential'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $data = $result->fetch_assoc();
            $deptCode = $data['dept_code'];
        } else {
            $this->errorMessage = "Failed to find department code";
        }
        $this->query = null;
        return $deptCode;
    }
    public function findCourses($deptCode)
    {
        $courses = array();
        $this->query = "SELECT * FROM courses WHERE dept_code = '$deptCode'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $courses = $result->fetch_assoc();
        } else {
            $this->errorMessage = "No course(s) found for given department";
        }
        return $result;
    }
    public function findUser($userEmail)
    {
        $user = null;
        $this->query = "SELECT * FROM users WHERE email = '$userEmail' OR user_id = '$userEmail'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $user = $result->fetch_assoc();
        } else {
            $this->errorMessage = "No user found for given email";
        }
        return $user;
    }
    public function loadPart($userCredential)
    {
        $part = null;
        $this->query = "SELECT * FROM users WHERE email = '$userCredential' OR user_id = '$userCredential'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $data = $result->fetch_assoc();
            $part = $data['part'];
        } else {
            $this->errorMessage = "Failed to find department code";
        }
        $this->query = null;
        return $part;
    }
    public function findLevel($part)
    {
        $school_level = array();
        $this->query = "SELECT * FROM courses WHERE part = '$part'";
        $res = $this->conn->query($this->query);
        if ($this->isNumRows($res)) {
            $school_level = $res->fetch_assoc();
        } else {
            $this->errorMessage = "No course(s) found for given department";
        }
        return $res;
    }
    public function loadUni($userCredential)
    {
        $uniCode = null;
        $this->query = "SELECT * FROM users WHERE email = '$userCredential' OR user_id = '$userCredential'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $data = $result->fetch_assoc();
            $uniCode = $data['uni_code'];
        } else {
            $this->errorMessage = "Failed to find university courses";
        }
        $this->query = null;
        return $uniCode;
    }
    public function findUniCourses($uniCode)
    {
        $courses = array();
        $this->query = "SELECT * FROM university_courses WHERE uni_coursecode = '$uniCode'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $courses = $result->fetch_assoc();
        } else {
            $this->errorMessage = "No course(s) found for given department";
        }
        return $result;
    }
    public function loadSchool($userCredential)
    {
        $schoolCode = null;
        $this->query = "SELECT * FROM users WHERE email = '$userCredential' OR user_id = '$userCredential'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $data = $result->fetch_assoc();
            $schoolCode = $data['school_id'];
        } else {
            $this->errorMessage = "Failed to find school courses";
        }
        $this->query = null;
        return $schoolCode;
    }
    public function findSchoolCourses($schoolCode)
    {
        $courses = array();
        $this->query = "SELECT * FROM school_courses WHERE school_coursecode = '$schoolCode'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $courses = $result->fetch_assoc();
        } else {
            $this->errorMessage = "No course(s) found for given department";
        }
        return $result;
    }
    public function loadtecDept($userCredential)
    {
        $tecid = null;
        $this->query = "SELECT * FROM users WHERE email = '$userCredential' OR user_id = '$userCredential'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $data = $result->fetch_assoc();
            $tecid = $data['tec_id'];
        } else {
            $this->errorMessage = "Failed to find tec course";
        }
        $this->query = null;
        return $tecid;
    }
    public function findtecCourses($tecid)
    {
        $courses = array();
        $this->query = "SELECT * FROM tec_courses WHERE tec_id = '$tecid'";
        $result = $this->conn->query($this->query);
        if ($this->isNumRows($result)) {
            $courses = $result->fetch_assoc();
        } else {
            $this->errorMessage = "No course(s) found for given department";
        }
        return $result;
    }

}
