<?php

foreach ($navItems as $navItem) {
    echo "<li>
           <a href='$url[url]/$navItem[slug]'>$navItem[title]</a>
          </li>";
}
