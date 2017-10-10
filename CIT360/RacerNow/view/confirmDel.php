<?php include '../view/header.php'; ?>
<main>
    <?php echo $warning ;?>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="cancel">
        <input type="hidden" name="registerID" value="<?php echo $registerID; ?>">
        <input type="hidden" name="first" value="<?php echo $first; ?>">
        <input class="btn-me" type="submit" value="Cancel">
    </form>
</main>
<?php include '../view/footer.php'; ?>
