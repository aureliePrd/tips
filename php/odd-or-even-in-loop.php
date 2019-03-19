
# Any integer that can be divided exactly by 2 is an even number.

<?php if( get_row_index() & 1 ) { echo 'odd'; } ?>
<?php if( get_row_index() % 2 == 0 ) { echo 'even'; } ?>


# https://support.advancedcustomfields.com/forums/topic/even-odd-display/