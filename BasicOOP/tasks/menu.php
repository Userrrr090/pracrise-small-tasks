<?php
require_once 'Tag.php';

echo '<p>' . (new Link())->setAttr('href', '/1.php')->setText('1') . '</p>';
echo '<p>' . (new Link())->setAttr('href', '/2.php')->setText('2') . '</p>';
echo '<p>' . (new Link())->setAttr('href', '/3.php')->setText('3') . '</p>';
echo '<p>' . (new Link())->setAttr('href', '/4.php')->setText('4') . '</p>';
echo '<p>' . (new Link())->setAttr('href', '/5.php')->setText('5') . '</p>';