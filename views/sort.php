<div class="pb-4">
    <?php
    if (isset($sorts) && isset($paging)) {
        foreach ($sorts as $key => $value) {
            $link = $paging['base_uri'] . '/1/' . $key . '/' . ($key === $paging['order'] && $paging['direction'] === 'asc' ? 'desc' : 'asc');
            $btn_class = $key === $paging['order'] ? 'primary' : 'light';
            $arrow = $paging['direction'] === 'asc' ? 'up' : 'down';

            echo '<a class="btn btn-' . $btn_class . '" href="' . $link . '">';
            echo $value . ' &nbsp;';

            if ($paging['order'] === $key) {
                echo '<i class="fas fa-sort-' . $arrow . '"></i> ';
            }

            echo '</a> &nbsp;';
        }
    }
    ?>
</div>
