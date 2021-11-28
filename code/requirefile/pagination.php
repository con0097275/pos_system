<!-- <a class="page-item" href="?per_page=4&page=1">1</a>
<a class="page-item" href="?per_page=4&page=2">2</a>
<a class="page-item" href="?per_page=4&page=3">3</a> -->
<ul class="pagination justify-content-end" style="margin:20px 0">
    <!-- first nav -->
    <?php
    if ($current_page > 3) {
        $first_page = 1; ?>
        <li class="page-item"><a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">	&lsaquo;&lsaquo;</a></li>
    <?php } ?>
    <!-- prev nav -->
    <?php
    if ($current_page > 1) {
        $prev_page = $current_page - 1; ?>
        <li class="page-item"><a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Prev</a></li>
    <?php } ?>
    <!-- main nav -->
    <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
        <?php if ($num != $current_page) { ?>
            <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                <li class="page-item"><a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a></li>
            <?php } ?>
        <?php } else { ?>
            <li class="page-item active"><a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a></li>
        <?php } ?>
    <?php } ?>
    <!-- next nav -->
    <?php
    if ($current_page < $totalPages - 1) {
        $next_page = $current_page + 1; ?>
        <li class="page-item"><a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Next</a></li>
    <?php } ?>
    <!-- Last nav -->
    <?php
    if ($current_page < $totalPages - 3) {
        $end_page = $totalPages;
    ?>
        <li class="page-item"><a class="page-link" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">&rsaquo;&rsaquo;</a></li>

    <?php
    }
    ?>
</ul>
<!-- 
<ul class="pagination justify-content-end" style="margin:20px 0">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul> -->