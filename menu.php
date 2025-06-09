<nav class="semester-menu">
    <ul>
        <?php
        $pages = [
            'semester1.html' => 'Semester 1',
            'semester2.html' => 'Semester 2',
            'semester3.html' => 'Semester 3',
            'semester4.html' => 'Semester 4',
            'semester5.html' => 'Semester 5',
            'semester6.html' => 'Semester 6'
        ];
        
        $current_page = basename($_SERVER['PHP_SELF']);
        
        foreach ($pages as $url => $title) {
            $active = ($current_page == $url) ? 'active' : '';
            echo "<li><a href=\"$url\" class=\"$active\">$title</a></li>";
        }
        ?>
    </ul>
</nav>