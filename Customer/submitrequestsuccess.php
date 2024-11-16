<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();

// Check if request details are stored in the session
if (!isset($_SESSION['requestDetails'])) {
    header("Location: submitrequest.php");
    exit();
}

// Retrieve request details
$requestDetails = $_SESSION['requestDetails'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Submitted</title>
    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
<div class="col-sm-9 col-md-10 mt-5 p-4 border rounded bg-white">
        <h3 class="text-center">Request Submitted Successfully!</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr><td>Your Request ID: <strong><?php echo $requestDetails['id']; ?></strong></td></tr>
                    <tr><td>Request Info: <strong><?php echo htmlspecialchars($requestDetails['info']); ?></strong></td></tr>
                    <tr><td>Description: <strong><?php echo htmlspecialchars($requestDetails['description']); ?></strong></td></tr>
                    <tr><td>Name: <strong><?php echo htmlspecialchars($requestDetails['name']); ?></strong></td></tr>
                    <tr><td>Address: <strong><?php echo htmlspecialchars($requestDetails['address1']) . ", " . htmlspecialchars($requestDetails['address2']); ?></strong></td></tr>
                    <tr><td>City: <strong><?php echo htmlspecialchars($requestDetails['city']); ?></strong></td></tr>
                    <tr><td>State: <strong><?php echo htmlspecialchars($requestDetails['state']); ?></strong></td></tr>
                    <tr><td>Zip: <strong><?php echo htmlspecialchars($requestDetails['zip']); ?></strong></td></tr>
                    <tr><td>Email: <strong><?php echo htmlspecialchars($requestDetails['email']); ?></strong></td></tr>
                    <tr><td>Mobile: <strong><?php echo htmlspecialchars($requestDetails['mobile']); ?></strong></td></tr>
                    <tr><td>Date: <strong><?php echo htmlspecialchars($requestDetails['date']); ?></strong></td></tr>
                    <tr>
                        <td>
                            <a href="submitrequest.php">Submit Another Request</a>
                            <div class="text-center">
                                <form class='d-print-none'>
                                    <input class='btn btn-primary' type='submit' value='Print' onClick='window.print()'>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>
<?php
include('includes/footer.php'); 
$conn->close();
?>