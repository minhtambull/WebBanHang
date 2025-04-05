<?php include 'app/views/shares/header.php'; ?>
<h1>Giỏ hàng</h1>
<?php if (!empty($cart)): ?>
    <ul class="list-group">
        <?php foreach ($cart as $id => $item): ?>
            <li class="list-group-item">
                <h2>
                    <?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8');
                    ?>
                </h2>
                <?php if ($item['image']): ?>
                    <img src="/<?php echo $item['image']; ?>" alt="Product Image" style="max-width: 100px;">
                <?php endif; ?>
                <p>Giá:
                    <?php echo htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8'); ?> VND
                </p>
                <p>Số lượng:
                    <?php echo htmlspecialchars(
                        $item['quantity'],
                        ENT_QUOTES,
                        'UTF-8'
                    ); ?>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Giỏ hàng của bạn đang trống.</p>
<?php endif; ?>
<a href="/Product" class="btn btn-secondary mt-2">Tiếp tục mua sắm</a>
<a href="/Product/checkout" class="btn btn-secondary mt-2">Thanh Toán</a>
<?php include 'app/views/shares/footer.php'; ?>
<style>
    /* Global Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

/* Container for the content */
.container {
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    margin-top: 30px;
}

/* Heading Styling */
h1 {
    font-size: 26px;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Cart Item Styles */
.list-group-item {
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 15px;
    border-radius: 8px;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.list-group-item h2 {
    font-size: 18px;
    color: #333;
    margin: 0;
}

/* Image styling */
.list-group-item img {
    max-width: 100px;
    border-radius: 8px;
    margin-right: 15px;
}

/* Text Details Styling */
.list-group-item p {
    font-size: 14px;
    margin: 5px 0;
    color: #555;
}

/* Button Styling */
button[type="submit"], .btn-secondary {
    display: inline-block;
    padding: 12px 20px;
    margin-top: 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
    margin-right: 10px;
}

/* Button Hover Effects */
button[type="submit"]:hover, .btn-secondary:hover {
    background-color: #0056b3;
}

/* Empty Cart Message */
p {
    font-size: 16px;
    color: #777;
    text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    h1 {
        font-size: 22px;
    }

    .list-group-item {
        flex-direction: column;
        align-items: flex-start;
    }

    .list-group-item img {
        margin-right: 0;
        margin-bottom: 10px;
    }

    .list-group-item h2 {
        font-size: 16px;
    }

    .list-group-item p {
        font-size: 14px;
    }

    button[type="submit"], .btn-secondary {
        width: 100%;
        margin-top: 10px;
    }
}

</style>