<?php


class Prints extends Controller
{
    private $printModel;

    public function __construct()
    {
        $this->printModel = $this->model('Printss');
    }

    public function print()
    {

        if (isset($_GET['ids'])) {
            $encodedIds = $_GET['ids'];
            $serializedIds = urldecode($encodedIds);
            $doctorIds = unserialize($serializedIds);
        }
        if (isset($_SESSION['startDate']) && isset($_SESSION['endDate'])) {
            $startDate = $_SESSION['startDate'];
            $endDate = $_SESSION['endDate'];
            unset($_SESSION['startDate']);
            unset($_SESSION['endDate']);
        }

        $doctors = $this->printModel->getDoctorsById($doctorIds);

        $data = [
            'ids' => $doctorIds,
            'doctors' => $doctors,
            'startDate' => $startDate,
            'endDate' => $endDate,



        ];
        $this->view('prints/print', $data);
    }
}
