<?php include 'app/views/shares/header.php'; ?>
<h1>Thanh toán</h1>
<form method="POST" action="/Product/processCheckout">
    <div class="form-group">
        <label for="name">Họ tên:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Số điện thoại:</label>
        <input type="text" id="phone" name="phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ:</label>
        <textarea id="address" name="address" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Thanh toán</button>
</form>
<a href="/Product/cart" class="btn btn-secondary mt-2">Quay lại giỏ
    hàng</a>
<?php include 'app/views/shares/footer.php'; ?>
<style>
    /* Global Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

/* Container for the form */
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

/* Form Group */
.form-group {
    margin-bottom: 20px;
}

/* Labels */
label {
    font-weight: bold;
    font-size: 16px;
    color: #333;
}

/* Form Fields */
input[type="text"], textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    margin-top: 5px;
}

/* Textarea */
textarea {
    height: 120px;
}

/* Buttons */
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
}

/* Button Hover Effects */
button[type="submit"]:hover, .btn-secondary:hover {
    background-color: #0056b3;
}

/* Spacing for Return Link */
a.btn-secondary {
    display: block;
    text-align: center;
    margin-top: 10px;
    text-decoration: none;
}

/* Responsive Design for smaller screens */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    h1 {
        font-size: 22px;
    }

    input[type="text"], textarea, button[type="submit"] {
        font-size: 14px;
    }
}

</style>