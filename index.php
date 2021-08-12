<?php include 'stock/stock.php'; ?>
<?php include 'web-service/collect-and-print-data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/meta.php'; ?>
    <?php include 'includes/styles.php'; ?>
</head>
<body>
    <header>
        <?php include 'includes/navigation.php'; ?>
        <?php include 'includes/masthead.php'; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="container-fluid">
                <h2>Products</h2>
            </div>
            <?php printHTML(); ?>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>