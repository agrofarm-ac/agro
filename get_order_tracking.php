<?php
header('Content-Type: application/json');
include 'config.php'; 

$response = ['success' => false];

if (isset($_GET['id'])) {
    $order_id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM orders WHERE order_id = ?");
    $stmt->execute([$order_id]);
    $order = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($order) {
        $response['success'] = true;
        $response['order'] = [
            'order_id' => $order['order_id'],
            'customer_name' => $order['customer_name'],
            'status' => $order['status'], 
            'shipping_date' => $order['shipping_date'],
            'items' => $order['items_description'],
            'total' => $order['total_amount']
        ];
    }
}

echo json_encode($response);
?>
