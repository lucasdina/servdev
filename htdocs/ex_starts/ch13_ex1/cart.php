<?php
// Add an item to the cart
function add_item($cart, $key, $quantity) {
    global $products;
    if ($quantity < 1) return;

    // If item already exists in cart, update quantity
    if (isset($cart[$key])) {
        $quantity += $cart[$key]['qty'];
        update_item($cart, $key, $quantity);
        return;
    }

    // Add item
    $cost = $products[$key]['cost'];
    $total = $cost * $quantity;
    $item = array(
        'name' => $products[$key]['name'],
        'cost' => $cost,
        'qty'  => $quantity,
        'total' => $total
    );
    $_SESSION['cart13'][$key] = $item;
}

// Update an item in the cart
function update_item($cart, $key, $quantity) {
    $quantity = (int) $quantity;
    if (isset($cart[$key])) {
        if ($quantity <= 0) {
            unset($_SESSION['cart13'][$key]);
            unset ($cart);
        } else {
            $_SESSION['cart13'][$key]['qty'] = $quantity;
            $total = $cart[$key]['cost'] *
                     $cart[$key]['qty'];
            $_SESSION['cart13'][$key]['total'] = $total;
        }
    }
}

// Get cart subtotal
function get_subtotal ($cart) {
    $subtotal = 0;
    foreach ($_SESSION['cart13'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}
?>