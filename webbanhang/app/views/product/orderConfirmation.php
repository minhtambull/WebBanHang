<?php include 'app/views/shares/header.php'; ?>
<h1>Xác nhận đơn hàng</h1>
<p>Cảm ơn bạn đã đặt hàng. Đơn hàng của bạn đã được xử lý thành công.</p>
<a href="/Product/add" class="btn btn-primary mt-2">Tiếp tục mua sắm</a>
<?php include 'app/views/shares/footer.php'; ?>
<style>
    /* Global Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
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
    text-align: center;
}

/* Heading Styling */
h1 {
    font-size: 28px;
    color: #28a745; /* Green color for success */
    margin-bottom: 20px;
}

/* Confirmation Text */
p {
    font-size: 18px;
    color: #333;
    margin-bottom: 30px;
}

/* Button Styling */
button[type="submit"], .btn-primary {
    display: inline-block;
    padding: 12px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
    margin-top: 20px;
}

/* Button Hover Effects */
button[type="submit"]:hover, .btn-primary:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    h1 {
        font-size: 24px;
    }

    p {
        font-size: 16px;
    }

    button[type="submit"], .btn-primary {
        width: 100%;
        margin-top: 10px;
    }
}

</style>