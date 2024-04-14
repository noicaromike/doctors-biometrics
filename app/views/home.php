<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Doctor's Biometric</title>

</head>

<body>
    <div class="container">
        <div class="home-content">
            <div class="img-container">
                <img src="<?php echo URLROOT; ?>/public/img/EACMed Complete.png" alt="">
            </div>
            <h2>Doctors Biometric DTR Printing</h2>
            <span class="invalidFeedback"><?php echo $data['itemsError']; ?></span>
            <span class="invalidFeedback"><?php echo $data['startDateError']; ?></span>
            <span class="invalidFeedback"><?php echo $data['endDateError']; ?></span>

            <div class="table-container">
                <form action="" method="POST">
                    <div class="form-btns">

                        <div class="form-date">
                            <button type="submit" class="form__btn">Print preview</button>
                            <label class="date-label" for="">Start Date</label>
                            <input type="date" name="startDate" value="<?php echo $data['startDate']; ?>" class="form__input">
                            <label class="date-label" for="">End Date</label>
                            <input type="date" name="endDate" value="<?php echo $data['endDate']; ?>" class="form__input">
                        </div>
                        <div class="form-btn-container">

                            <a href="<?php echo URLROOT; ?>/employees/create" class="form__btn">Add Doctor</a>

                        </div>
                    </div>

                    <table>
                        <tr>
                            <th>Select</th>
                            <th>Employee Id</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Include in Plantilla</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        <?php foreach ($data['doctors'] as $doc) : ?>
                            <tr>
                                <td data-cell="Select">
                                    <input type="checkbox" name="items[]" value="<?php echo $doc->BNo; ?>">
                                </td>
                                <td data-cell="Employee Id"><?php echo $doc->BNo; ?></td>
                                <td data-cell="Name"><?php echo $doc->EMPNAME; ?></td>
                                <td data-cell="Position"><?php echo $doc->POSITION; ?></td>
                                <td data-cell="Include in Plantilla"></td>
                                <td data-cell="Status"></td>
                                <td data-cell="Action">
                                    <div class="action-item">
                                        <a href="<?php echo URLROOT . '/employees/edit/' . $doc->BNo; ?>" class="action-link green">
                                            <i class="ri-edit-box-line"></i>
                                        </a>
                                        <a href="<?php echo URLROOT . '/employees/delete/' . $doc->BNo; ?>" class="action-link red">
                                            <i class="ri-delete-bin-6-line"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>
                    <div class="pagination">
                        <?php if ($data['currentPage'] >= 1) : ?>
                            <a href="?page=<?php echo $data['currentPage'] - 1; ?>" class="add-btn">Previous</a>
                        <?php endif; ?>
                        <p>Page <?php echo $data['currentPage']; ?> of <?php echo $data['totalpages']; ?></p>
                        <?php if ($data['currentPage'] < $data['totalpages']) : ?>
                            <a href="?page=<?php echo $data['currentPage'] + 1; ?>" class="add-btn">Next</a>
                        <?php endif; ?>
                        <?php if ($data['currentPage'] == $data['totalpages']) : ?>
                            <a href="?page=<?php echo $data['currentPage']; ?>" class="add-btn">Next</a>
                        <?php endif; ?>

                    </div>
                </form>
            </div>


        </div>
    </div>


    <script src="<?php echo URLROOT; ?>/public/javascript/javascript.js"></script>

</body>

</html>