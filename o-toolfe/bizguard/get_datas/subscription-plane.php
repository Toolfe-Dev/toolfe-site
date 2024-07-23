<?php 

function get_ticket_details($user_id, $conn) {
    $tickets = array();

    // Fetch tickets with status 0 (task in queue)
    $stmt = $conn->prepare("SELECT * FROM tickets WHERE user_id = ? AND status = 0 AND department_id != 4");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $tickets['queued'] = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    // Fetch tickets with status 1 (opened task)
    $stmt = $conn->prepare("SELECT * FROM tickets WHERE user_id = ? AND status = 1 AND department_id != 4");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $tickets['opened'] = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    // Fetch tickets with status 2 (closed task)
    $stmt = $conn->prepare("SELECT * FROM tickets WHERE user_id = ? AND status = 2 AND department_id != 4");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $tickets['closed'] = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    // Fetch all tickets
    $stmt = $conn->prepare("SELECT * FROM tickets WHERE user_id = ? AND department_id != 4");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $tickets['all_task'] = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    // Fetch all tickets by months

    $start_date = $_SESSION['plan_start'];
    $end_date = $_SESSION['plan_end'];

    // Prepare and execute the query to fetch tickets created in the current month and year
    $stmt = $conn->prepare("SELECT * FROM tickets WHERE user_id = ? AND created_month_year BETWEEN ? AND ? AND department_id != 4");
    $stmt->bind_param("iss", $user_id, $start_date, $end_date);
    $stmt->execute();
    $result = $stmt->get_result();
    $tickets['monthly_task'] = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    return $tickets;
}

function get_user_plane_details($id, $conn) {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT `user_plane`, `plane_mon` FROM `users` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $stmt->close();
    return $row;
}


function get_subscription_type($value) {
    if ($value === 0) {
        return "Monthly";
    } else {
        return "Yearly";
    }
}

function get_user_plane_name($value) {
    switch ($value) {
        case 1:
            return "Essential";
        case 2:
            return "Pro";
        case 3:
            return "Premium";
        case 4:
            return "Executive";
        case 5:
            return "No Plane";
        default:
            return "No Plane";
    }
}

function get_task_details($id, $conn) {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM `tasks` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    return $row;

}

function get_plane_task_status($plane_id, $total_tasks, $conn) {
    // Prepare and execute the query to fetch the plane details
    $stmt = $conn->prepare("SELECT `id`, `plane`, `tasks`, `open_taks`, `active`, `created_at` FROM `planes` WHERE `id` = ?");
    $stmt->bind_param("i", $plane_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $plane = $result->fetch_assoc();
    $stmt->close();

    // Calculate the balance tasks
    $balance_tasks = $plane['tasks'] - $total_tasks;
    $balance_tasks = max(0, $plane['tasks'] - $total_tasks);

    // Determine the task status
    $task_status = $balance_tasks > 0 ? true : false;

    // Prepare the response array with balance tasks and task status
    $response = array(
        'balance_tasks' => $balance_tasks,
        'task_status' => $task_status,
        'total_tasks' => $plane['tasks'],
    );

    return $response;
}

function task_percentage($total_task, $closed_task) {
    if ($total_task == 0) {
      return 0;
    }
    $percentage = ($closed_task / $total_task) * 100;
    return round($percentage); 
  }





?>