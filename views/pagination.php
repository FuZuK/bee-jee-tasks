<?php if (isset($count_all) && isset($paging)): ?>
<?php
$count_pages = ceil($count_all / $paging['per_page']);
?>
<?php if ($count_pages > 1): ?>
<nav>
    <ul class="pagination justify-content-center">
        <?php
        for ($i = 1; $i <= $count_pages; $i++):
            $link = $paging['base_uri'] . '/' . $i . '/' . $paging['order'] . '/' . $paging['direction'];
            ?>
            <li class="page-item <?php echo $i == $paging['page'] ? 'active' : '' ?>">
                <a class="page-link" href="<?php echo $link ?>"><?php echo $i ?></a>
            </li>
        <?php endfor ?>
    </ul>
</nav>
<?php endif ?>
<?php endif ?>
