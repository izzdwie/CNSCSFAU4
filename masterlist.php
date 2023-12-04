<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNSC SFAU</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <?php
    // Your PHP code for server-side logic goes here
    $formData = [
        'SEQ' => '',
        'Control No.' => '',
        'LAST NAME' => '',
        'FIRST NAME'=> '',
        'MIDDLE NAME' => '',
        'SEX'=> '',
        'BIRTHDATE'=> '',
        'COURSE ENROLLED'=> '',
        'YEAR LEVEL'=> '',
        'HOUSEHOLD NO.	'=> '',
        'PER CAPITA INCOME'=> '',
        'STREET & BRGY.'=> '',
        'TOWN'=> '',
        'PROVINCE'=> '',
        'ZIP CODE'=> '',
        'TOTAL ASSESSMENT'=> '',
        'GWA'=> '',
        'DISABILITY'=> '',
        'CONTACT NUMBER'=> '',
        'EMAIL ADDRESS'=> '',
        'SCHOALRSHIP/GRANT'=> '',
        'COLLEGE/DEPARTMENT'=> '',
        'REMARKS'=> '',
        'STATUS'=> '',
        'SCHOLARSHIP STATUS'=> '',
    ];

    $tableData = [
        [
            'SEQ' => '',
            'Control No.' => '',
            'LAST NAME' => '',
            'FIRST NAME'=> '',
            'MIDDLE NAME' => '',
            'SEX'=> '',
            'BIRTHDATE'=> '',
            'COURSE ENROLLED'=> '',
            'YEAR LEVEL'=> '',
            'HOUSEHOLD NO.	'=> '',
            'PER CAPITA INCOME'=> '',
            'STREET & BRGY.'=> '',
            'TOWN'=> '',
            'PROVINCE'=> '',
            'ZIP CODE'=> '',
            'TOTAL ASSESSMENT'=> '',
            'GWA'=> '',
            'DISABILITY'=> '',
            'CONTACT NUMBER'=> '',
            'EMAIL ADDRESS'=> '',
            'SCHOALRSHIP/GRANT'=> '',
            'COLLEGE/DEPARTMENT'=> '',
            'REMARKS'=> '',
            'STATUS'=> '',
            'SCHOLARSHIP STATUS'=> '',
        ],
        // ... other rows
    ];
    ?>

    <div class="row">
        <div class="col-md-12">
            <!-- Header content goes here -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Form component -->
            <form>
                <?php foreach ($formData as $key => $value): ?>
                    <div class="form-group">
                        <label for="<?= $key ?>"><?= ucfirst($key) ?></label>
                        <input type="text" class="form-control" id="<?= $key ?>" name="<?= $key ?>" value="<?= $value ?>">
                    </div>
                <?php endforeach; ?>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

        <!-- Master list table -->
        <div class="col-md-6">
            <table class="table">
                <thead>
                <tr>
                    <th>SEQ</th>
                    <th>CONTROL NO.</th>
                    <th>LAST NAME</th>
                    <th>FIRST NAME</th>
                    <th>MIDDLE NAME</th>
                    <th>SEX</th>
                    <th>BIRTHDATE</th>	
                    <th>COURSE ENROLLED</th>	
                    <th>YEAR LEVEL</th>	
                    <th>HOUSEHOLD NO.</th>	
                    <th>PER CAPITA INCOME</th>	
                    <th>STREET & BRGY.</th>	
                    <th>TOWN</th>	
                    <th>PROVINCE</th>	
                    <th>ZIP CODE</th>
                    <th>TOTAL ASSESSMENT</th>	
                    <th>GWA</th>	
                    <th>DISABILITY</th>	
                    <th>CONTACT NUMBER</th>	
                    <th>EMAIL ADDRESS</th>	
                    <th>SCHOALRSHIP/GRANT</th>	
                    <th>COLLEGE/DEPARTMENT</th>
                    <th>REMARKS</th>
                    <th>STATUS</th>
                    <th>SCHOLARSHIP STATUS</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($tableData as $row): ?>
                    <tr>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['CONTROL NO.'] ?></td>
                        <td><?= $row['LAST NAME'] ?></td>
                        <td><?= $row['FIRST NAME'] ?></td>
                        <td><?= $row['MIDDLE NAME'] ?></td>
                        <td><?= $row['SEX'] ?></td>
                        <td><?= $row['BIRTHDATE'] ?></td>
                        <td><?= $row['COURSE ENROLLED'] ?></td>
                        <td><?= $row['YEAR LEVEL'] ?></td>
                        <td><?= $row['HOUSEHOLD NO.'] ?></td>
                        <td><?= $row['PER CAPITA INCOME'] ?></td>
                        <td><?= $row['STREET & BRGY.'] ?></td>
                        <td><?= $row['TOWN'] ?></td>
                        <td><?= $row['PROVINCE'] ?></td>
                        <td><?= $row['ZIP CODE'] ?></td>
                        <td><?= $row['TOTAL ASSESSMENT'] ?></td>
                        <td><?= $row['GWA'] ?></td>
                        <td><?= $row['DISABILITY'] ?></td>
                        <td><?= $row['CONTACT NUMBER'] ?></td>
                        <td><?= $row['EMAIL ADDRESS'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <td><?= $row['SEQ'] ?></td>
                        <!-- Repeat similar table cells -->
                        <td>
                            <button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
