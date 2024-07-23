<?php
function getNotificationMessage($key) {
    // Define the language array with notification messages inside the function
    $lang = [
        'notify_ticket_assigned_department' => 'A new ticket has been assigned to one of your departments.',
        'notify_ticket_assigned'            => 'A new ticket has been assigned to you.',
        'notify_user_replied_ticket'        => 'The user has replied to the ticket that\'s assigned to you.',
        'notify_agent_replied_ticket'       => 'Your ticket has been replied to by our agent.',
        'notify_chat_assigned_department'   => 'A new chat has been assigned to one of your departments.',
        'notify_chat_assigned'              => 'A new chat has been assigned to you.',
        'notify_ticket_feedback_shared'     => 'The user shared the feedback to the ticket that\'s assigned to you.'
    ];

    // Check if the key exists in the array
    if (array_key_exists($key, $lang)) {
        return $lang[$key];
    } else {
        return 'Notification key not found.';
    }
}

function get_department_name($department_id,$conn){
    $sql = "SELECT * FROM tickets_departments WHERE id = $department_id";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            return $row['name'];
        }
    }else{
        return "Not Found";
    }
}

function update_task_status($ticket_id,$status,$conn){
    $sql = "UPDATE tickets SET status = $status WHERE id = $ticket_id";
    $result = $conn->query($sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

function update_task_subStatus($ticket_id,$status,$conn){
    $sql = "UPDATE tickets SET sub_status = $status WHERE id = $ticket_id";
    $result = $conn->query($sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

function get_task_opened($id){
    if ($id == 1) {
        $sub_status =  "Close Task";
      } else {
        $sub_status = "Reopen Task";
      }
      return $sub_status;

}
 
function get_task_status($id){
  switch ($id) {
      case 1:
          $sub_status = '<div clashs="text-center text-white bg-gray rounded-1 fw-medium px-2 py-1" style="font-size: 10px;">Unanswered</div>';
          break;
      case 2:
          $sub_status = '<div class="text-center text-white bg-info fw-medium px-2 py-1" style="font-size: 10px;">Replied</div>';
          break;
      case 3:
          $sub_status = '<div class="text-center text-white bg-success rounded-1 fw-medium px-2 py-1" style="font-size: 10px;">Solved</div>';
          break;
      default:
          $sub_status = '<div class="text-center text-white bg-success rounded-1 fw-medium px-2 py-1" style="font-size: 10px;">Solved</div>';
  }
  return $sub_status;
}
function get_updated_time($time){ 
    if ($time) {
        $updated_at = date("d/m/y h:i", $time);
      } else {
        $updated_at = date("d/m/y h:i", $time);
      }
      return $updated_at;
}

function get_profile_id($user_id,$conn){
  $sql = "SELECT picture FROM users WHERE id = $user_id";
    $result = $conn->query($sql);
    return "https://bizguard.toolfe.com/admin/uploads/images/users/".$result->fetch_assoc()['picture'];
}


function extractTicketNumber($url) {
    if (preg_match('/user\/support\/ticket\/(\d+)/', $url, $matches)) {
        return $matches[1];
    } else {
        return 4;
    }
}


?>