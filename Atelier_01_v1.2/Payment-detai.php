<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Payement</title>
</head>
<body>

    <div class="d-flex justify-content-between align-items-center">
        <h4 class="fw-bold">Payment Details</h4>
        <div class="d-flex">
            <div class="d-flex flex-column btn btn-sm">
                <i class="bi bi-caret-up p-0 text-info"></i>
                <i class="bi bi-caret-down p-0 text-info"></i>
            </div>
        </div>
    </div>
    <hr>
    <div class="overflow-auto" style="width: 100%;">
        <table class="table table-borderless table-striped" style="min-width: 1200px;">
            <thead>
                <tr class="text-secondary">
                    <th class="fw-normal h6">Name</th>
                    <th class="fw-normal h6">Payment Schedule</th>
                    <th class="fw-normal h6">Bill Number</th>
                    <th class="fw-normal h6">Amount Paid</th>
                    <th class="fw-normal h6">Balance Amount</th>
                    <th class="fw-normal h6">Date</th>
                    <th class="fw-normal h6"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $payement = [
                        array('Name'=>'Karthi' , 'Payment'=> 'First' , 'Bill'=>'00012223' , 'Amount'=>'DHS 100,000' , 'Balance'=>'DHS 500,000' , 'Date'=>'05-Jan, 2022' , 'icon'=>'<i class="bi bi-eye btn btn-sm text-info"></i>'),
                        array('Name'=>'Karthi' , 'Payment'=> 'First' , 'Bill'=>'00012223' , 'Amount'=>'DHS 100,000' , 'Balance'=>'DHS 500,000' , 'Date'=>'05-Jan, 2022' , 'icon'=>'<i class="bi bi-eye btn btn-sm text-info"></i>'),
                        array('Name'=>'Karthi' , 'Payment'=> 'First' , 'Bill'=>'00012223' , 'Amount'=>'DHS 100,000' , 'Balance'=>'DHS 500,000' , 'Date'=>'05-Jan, 2022' , 'icon'=>'<i class="bi bi-eye btn btn-sm text-info"></i>'),
                        array('Name'=>'Karthi' , 'Payment'=> 'First' , 'Bill'=>'00012223' , 'Amount'=>'DHS 100,000' , 'Balance'=>'DHS 500,000' , 'Date'=>'05-Jan, 2022' , 'icon'=>'<i class="bi bi-eye btn btn-sm text-info"></i>'),
                    ];
                    foreach ($payement as $key => $payement){
                        echo "<tr>
                                <td>".$payement['Name']."</td>
                                <td>".$payement['Payment']."</td>
                                <td>".$payement['Bill']."</td>
                                <td>".$payement['Amount']."</td>
                                <td>".$payement['Balance']."</td>
                                <td>".$payement['Date']."</td>
                                <td>".$payement['icon']."</td>
                            </tr>";
                    }
                ?>

            </tbody>
        </table>

    </div>

</body>
</html>