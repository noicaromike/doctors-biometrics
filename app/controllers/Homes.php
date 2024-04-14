<?php

class Homes extends Controller
{
    private $homeModel;
    public function __construct()
    {
        $this->homeModel = $this->model('Home');
    }



    public function home()
    {
        $totalRecords = $this->homeModel->getTotalRecords();
        $recordsPerPage = 5;
        $totalpages = ceil($totalRecords / $recordsPerPage);
        // var_dump($totalpages);
        $currentPage = pagination($totalpages);
        // var_dump($currentPage);

        $doctors = $this->homeModel->getAllDoctors($currentPage, $recordsPerPage);
        $data = [
            'doctors' => $doctors,
            'totalpages' => $totalpages,
            'currentPage' => $currentPage,
            'itemsError' => '',
            'startDate' => '',
            'endDate' => '',
            'startDateError' => '',
            'endDateError' => '',
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'doctors' => $doctors,
                'totalpages' => $totalpages,
                'currentPage' => $currentPage,
                'itemsError' => '',
                'startDate' => $_POST['startDate'],
                'endDate' => $_POST['endDate'],
                'startDateError' => '',
                'endDateError' => '',
            ];
            if (empty($data['startDate'])) {
                $data['startDateError'] = 'Select a starting date.';
            }
            if (empty($data['endDate'])) {
                $data['endDateError'] = 'Select an end date.';
            }

            // Check if both start date and end date are within the same 15-day period
            if ($data['startDate'] && $data['endDate']) {
                $startDay = (int)date('d', strtotime($data['startDate']));
                $endDay = (int)date('d', strtotime($data['endDate']));

                if (($startDay <= 15 && $endDay > 15) || ($startDay > 15 && $endDay <= 15)) {
                    $data['startDateError'] = 'Start and end dates must be within the same 15-day period.';
                }
            }

            if ($data['startDate'] > $data['endDate']) {
                $data['startDateError'] = 'Start date must be before end date.';
            }
            if (
                empty($data['startDateError']) &&
                empty($data['endDateError'])

            ) {
                if (isset($_POST['items']) && is_array($_POST['items']) && !empty($_POST['items'])) {
                    $serializedIds = serialize($_POST['items']);
                    $encodedIds = urlencode($serializedIds);
                    // passing in session or global to get the date.
                    $_SESSION['startDate'] = $data['startDate'];
                    $_SESSION['endDate'] = $data['endDate'];

                    header('location:' . URLROOT . '/prints/print/?ids=' . $encodedIds);
                } else {
                    $data['itemsError'] = 'Please select a Doctor to proceed';
                }
            }
        }


        $this->view('home', $data);
    }
}
