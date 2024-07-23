<?php  

// get profile page data 
 
function get_profile_data($user_id,$conn) {
    $sql = "SELECT * FROM `users` WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

// get notifications data
function get_notification_data($user_id, $conn) {
    $sql = "SELECT * FROM `notifications` WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    $rows = [];

    // Fetch all rows and store them in the array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function get_announcemnet_data($user_id, $conn) {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM announcements WHERE client = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = [];

    // Fetch all rows and store them in the array
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    $stmt->close();
    return $rows;
}

function get_announcemnet_details($id, $conn) {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM announcements WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = mysqli_fetch_assoc($result);

    $stmt->close();
    return $row;
}






?>