<?php

$former_sensei = false;

if ( block_rows( 'sensei' ) ):
	echo '<div class="wp-block-columns sensei-list">';
	$i = 1;

    while ( block_rows( 'sensei' ) ) :
        block_row( 'sensei' );
		if ( !block_sub_value( 'former-sensei' ) ) {
			if ($i & 1) {
				echo '</div>';
				echo '<div class="wp-block-columns">';
			}
			$i++;
			
			echo '<div class="wp-block-column">';
				echo '<h3 class="sensei-name">';
					block_sub_field( 'firstname' ); echo ' '; block_sub_field( 'lastname' );
				echo '</h3>';

				echo '<figure class="wp-block-image is-style-circle-mask alignleft">';
					echo '<img src="'; block_sub_field( 'picture' ); echo '" class="sensei-img" height="200" width="200" />';
				echo '</figure>';

				echo '<dl>';
					echo '<dd>';
						echo '<strong>E-Mail:</strong> '; echo '<a href="mailto:'; block_sub_field( 'email' ); echo '">'; block_sub_field( 'email' ); echo '</a>';
					echo '</dd>';
					echo '<dd>';
						echo '<strong>Website:</strong> '; echo '<a href="'; block_sub_field( 'website' ); echo '">'; block_sub_field( 'website' ); echo '</a>';
					echo '</dd>';
				echo '</dl>';

				// echo '<p class="sensei-biography">';
					block_sub_field( 'biography' );
				// echo '</p>';
			echo '</div>';
		} else {
			$former_sensei = true;
		}
    endwhile;

	echo '</div>';
endif;

reset_block_rows( 'sensei' );


if ( $former_sensei ) :
	echo '<h2>Ehemalige</h2>';
if ( block_rows( 'sensei' ) ):
	echo '<div class="wp-block-columns former-sensei-list">';
	$i = 1;

    while ( block_rows( 'sensei' ) ) :
        block_row( 'sensei' );
		if ( block_sub_value( 'former-sensei' ) ) {
			if ($i & 1) {
				echo '</div>';
				echo '<div class="wp-block-columns">';
			}
			$i++;
			
			echo '<div class="wp-block-column">';
				echo '<h3 class="sensei-name">';
					block_sub_field( 'firstname' ); echo ' '; block_sub_field( 'lastname' );
				echo '</h3>';
				echo '<img src="'; block_sub_field( 'picture' ); echo '" class="sensei-img" />';
				// echo '<p class="sensei-biography">';
					block_sub_field( 'biography' );
				// echo '</p>'; 
				echo '<dl>';
					echo '<dd>';
						echo '<strong>E-Mail:</strong> '; echo '<a href="mailto:'; block_sub_field( 'email' ); echo '">'; block_sub_field( 'email' ); echo '</a>';
					echo '</dd>';
					echo '<dd>';
						echo '<strong>Website:</strong> '; echo '<a href="'; block_sub_field( 'website' ); echo '">'; block_sub_field( 'website' ); echo '</a>';
					echo '</dd>';
				echo '</dl>';
			echo '</div>';
		} else {
			$former_sensei = true;
		}
    endwhile;

	echo '</div>';
endif;

reset_block_rows( 'sensei' );

endif;
