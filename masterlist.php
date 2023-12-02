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
        'seq' => '',
        'cntrlnum' => '',
        'id' => '',
        // ... other form data fields
    ];

    $tableData = [
        [
            'id' => '',
            'seq' => '',
            // ... other table data fields
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
                    <!-- Repeat similar table headers -->
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tableData as $row): ?>
                    <tr>
                        <td><?= $row['seq'] ?></td>
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
